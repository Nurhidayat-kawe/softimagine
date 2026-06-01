<?php

namespace Tests\Feature;

use App\Models\Blog;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\TeamMember;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminRoutesTest extends TestCase
{
    use RefreshDatabase;

    protected function createAdminUser(): User
    {
        return User::factory()->create(['is_admin' => true]);
    }

    protected function createRegularUser(): User
    {
        return User::factory()->create(['is_admin' => false]);
    }

    public function test_admin_dashboard_accessible_by_admin(): void
    {
        $admin = $this->createAdminUser();
        Service::factory(1)->create();
        Portfolio::factory(1)->create();
        Testimonial::factory(1)->create();
        Blog::factory(1)->create();
        TeamMember::factory(1)->create();

        $response = $this->actingAs($admin)->get('/admin');
        $response->assertStatus(200);
    }

    public function test_admin_dashboard_denied_for_regular_user(): void
    {
        $user = $this->createRegularUser();

        $response = $this->actingAs($user)->get('/admin');
        $response->assertStatus(403);
    }

    public function test_admin_requires_authentication(): void
    {
        $response = $this->get('/admin');
        $response->assertStatus(302);
    }

    public function test_service_crud(): void
    {
        $admin = $this->createAdminUser();

        $this->actingAs($admin)->get('/admin/services')->assertStatus(200);
        $this->actingAs($admin)->get('/admin/services/create')->assertStatus(200);

        $data = [
            'icon' => 'bi-code',
            'title' => 'Test Service',
            'short_desc' => 'Short description',
            'description' => 'Full description content',
            'features' => '["Feature 1","Feature 2"]',
            'sort_order' => 1,
        ];

        $this->actingAs($admin)->post('/admin/services', $data)->assertRedirect('/admin/services');
        $this->assertDatabaseHas('services', ['title' => 'Test Service']);

        $service = Service::where('title', 'Test Service')->first();

        $this->actingAs($admin)->get("/admin/services/{$service->id}/edit")->assertStatus(200);

        $this->actingAs($admin)->put("/admin/services/{$service->id}", [
            'icon' => 'bi-star',
            'title' => 'Updated Service',
            'short_desc' => 'Updated short',
            'description' => 'Updated description',
            'features' => '["Updated"]',
            'sort_order' => 2,
        ])->assertRedirect('/admin/services');

        $this->assertDatabaseHas('services', ['title' => 'Updated Service']);

        $this->actingAs($admin)->delete("/admin/services/{$service->id}")->assertRedirect('/admin/services');
        $this->assertDatabaseMissing('services', ['id' => $service->id]);
    }

    public function test_portfolio_crud(): void
    {
        $admin = $this->createAdminUser();

        $this->actingAs($admin)->get('/admin/portfolios')->assertStatus(200);
        $this->actingAs($admin)->get('/admin/portfolios/create')->assertStatus(200);

        $data = [
            'title' => 'Test Portfolio',
            'category' => 'web',
            'description' => 'Portfolio description',
            'icon' => 'bi-briefcase',
            'client' => 'Test Client',
            'year' => '2026',
            'tech' => '["Laravel","Vue.js"]',
            'sort_order' => 0,
        ];

        $this->actingAs($admin)->post('/admin/portfolios', $data)->assertRedirect('/admin/portfolios');
        $this->assertDatabaseHas('portfolios', ['title' => 'Test Portfolio']);

        $portfolio = Portfolio::where('title', 'Test Portfolio')->first();

        $this->actingAs($admin)->get("/admin/portfolios/{$portfolio->id}/edit")->assertStatus(200);

        $this->actingAs($admin)->put("/admin/portfolios/{$portfolio->id}", [
            'title' => 'Updated Portfolio',
            'category' => 'android',
            'description' => 'Updated desc',
            'icon' => 'bi-phone',
            'client' => 'Updated Client',
            'year' => '2025',
            'tech' => '["Kotlin"]',
            'sort_order' => 1,
        ])->assertRedirect('/admin/portfolios');

        $this->assertDatabaseHas('portfolios', ['title' => 'Updated Portfolio']);

        $this->actingAs($admin)->delete("/admin/portfolios/{$portfolio->id}")->assertRedirect('/admin/portfolios');
        $this->assertDatabaseMissing('portfolios', ['id' => $portfolio->id]);
    }

    public function test_testimonial_crud(): void
    {
        $admin = $this->createAdminUser();

        $this->actingAs($admin)->get('/admin/testimonials')->assertStatus(200);
        $this->actingAs($admin)->get('/admin/testimonials/create')->assertStatus(200);

        $data = [
            'name' => 'John Doe',
            'role' => 'CEO',
            'company' => 'Test Corp',
            'initials' => 'JD',
            'rating' => 5,
            'quote' => 'Great service!',
        ];

        $this->actingAs($admin)->post('/admin/testimonials', $data)->assertRedirect('/admin/testimonials');
        $this->assertDatabaseHas('testimonials', ['name' => 'John Doe']);

        $testimonial = Testimonial::where('name', 'John Doe')->first();

        $this->actingAs($admin)->get("/admin/testimonials/{$testimonial->id}/edit")->assertStatus(200);

        $this->actingAs($admin)->put("/admin/testimonials/{$testimonial->id}", [
            'name' => 'Jane Doe',
            'role' => 'CTO',
            'company' => 'Test Corp',
            'initials' => 'JD',
            'rating' => 4,
            'quote' => 'Updated quote',
        ])->assertRedirect('/admin/testimonials');

        $this->assertDatabaseHas('testimonials', ['name' => 'Jane Doe']);

        $this->actingAs($admin)->delete("/admin/testimonials/{$testimonial->id}")->assertRedirect('/admin/testimonials');
        $this->assertDatabaseMissing('testimonials', ['id' => $testimonial->id]);
    }

    public function test_blog_crud(): void
    {
        $admin = $this->createAdminUser();

        $this->actingAs($admin)->get('/admin/blogs')->assertStatus(200);
        $this->actingAs($admin)->get('/admin/blogs/create')->assertStatus(200);

        $data = [
            'title' => 'Test Blog Post',
            'category' => 'Technology',
            'author' => 'Admin',
            'excerpt' => 'Blog excerpt',
            'content' => 'Full blog content',
            'read_time' => '5 min read',
            'date' => '2026-01-01',
        ];

        $this->actingAs($admin)->post('/admin/blogs', $data)->assertRedirect('/admin/blogs');
        $this->assertDatabaseHas('blogs', ['title' => 'Test Blog Post']);

        $blog = Blog::where('title', 'Test Blog Post')->first();

        $this->actingAs($admin)->get("/admin/blogs/{$blog->id}/edit")->assertStatus(200);

        $this->actingAs($admin)->put("/admin/blogs/{$blog->id}", [
            'title' => 'Updated Blog',
            'category' => 'Web Development',
            'author' => 'Admin',
            'excerpt' => 'Updated excerpt',
            'content' => 'Updated content',
            'read_time' => '3 min read',
            'date' => '2026-02-01',
        ])->assertRedirect('/admin/blogs');

        $this->assertDatabaseHas('blogs', ['title' => 'Updated Blog']);

        $this->actingAs($admin)->delete("/admin/blogs/{$blog->id}")->assertRedirect('/admin/blogs');
        $this->assertDatabaseMissing('blogs', ['id' => $blog->id]);
    }

    public function test_team_member_crud(): void
    {
        $admin = $this->createAdminUser();

        $this->actingAs($admin)->get('/admin/team')->assertStatus(200);
        $this->actingAs($admin)->get('/admin/team/create')->assertStatus(200);

        $data = [
            'name' => 'Alice',
            'role' => 'Developer',
            'initials' => 'AL',
            'phone' => '08123456789',
            'skills' => '["PHP","Laravel"]',
            'sort_order' => 0,
        ];

        $this->actingAs($admin)->post('/admin/team', $data)->assertRedirect('/admin/team');
        $this->assertDatabaseHas('team_members', ['name' => 'Alice']);

        $member = TeamMember::where('name', 'Alice')->first();

        $this->actingAs($admin)->get("/admin/team/{$member->id}/edit")->assertStatus(200);

        $this->actingAs($admin)->put("/admin/team/{$member->id}", [
            'name' => 'Bob',
            'role' => 'Designer',
            'initials' => 'BB',
            'phone' => '08123456788',
            'skills' => '["Figma","Photoshop"]',
            'sort_order' => 1,
        ])->assertRedirect('/admin/team');

        $this->assertDatabaseHas('team_members', ['name' => 'Bob']);

        $this->actingAs($admin)->delete("/admin/team/{$member->id}")->assertRedirect('/admin/team');
        $this->assertDatabaseMissing('team_members', ['id' => $member->id]);
    }

    public function test_admin_stats_page(): void
    {
        $admin = $this->createAdminUser();

        $this->actingAs($admin)->get('/admin/stats')->assertStatus(200);
    }

    public function test_admin_settings_page(): void
    {
        $admin = $this->createAdminUser();

        $this->actingAs($admin)->get('/admin/settings')->assertStatus(200);
    }

    public function test_show_route_not_accessible_for_resources(): void
    {
        $admin = $this->createAdminUser();

        $this->actingAs($admin)->get('/admin/services/1')->assertStatus(405);
        $this->actingAs($admin)->get('/admin/portfolios/1')->assertStatus(405);
        $this->actingAs($admin)->get('/admin/testimonials/1')->assertStatus(405);
        $this->actingAs($admin)->get('/admin/blogs/1')->assertStatus(405);
        $this->actingAs($admin)->get('/admin/team/1')->assertStatus(405);
    }
}
