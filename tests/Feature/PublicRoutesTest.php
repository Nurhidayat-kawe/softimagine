<?php

namespace Tests\Feature;

use App\Models\Blog;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\SiteStat;
use App\Models\TeamMember;
use App\Models\Testimonial;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PublicRoutesTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_page_returns_successful_response(): void
    {
        Service::factory(3)->create();
        Portfolio::factory(3)->create();
        Testimonial::factory(2)->create();
        Blog::factory(3)->create();
        TeamMember::factory(3)->create();
        SiteStat::factory(3)->create();

        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_about_page_returns_successful_response(): void
    {
        SiteStat::factory(3)->create();
        TeamMember::factory(3)->create();

        $response = $this->get('/about');
        $response->assertStatus(200);
    }

    public function test_services_page_returns_successful_response(): void
    {
        Service::factory(3)->create();

        $response = $this->get('/services');
        $response->assertStatus(200);
    }

    public function test_portfolio_page_returns_successful_response(): void
    {
        Portfolio::factory(3)->create();

        $response = $this->get('/portfolio');
        $response->assertStatus(200);
    }

    public function test_blog_page_returns_successful_response(): void
    {
        Blog::factory(3)->create();

        $response = $this->get('/blog');
        $response->assertStatus(200);
    }

    public function test_blog_show_page_returns_successful_response(): void
    {
        $blog = Blog::factory()->create();

        $response = $this->get('/blog/' . $blog->slug);
        $response->assertStatus(200);
    }

    public function test_blog_show_page_returns_404_for_invalid_slug(): void
    {
        $response = $this->get('/blog/non-existent-slug');
        $response->assertStatus(404);
    }

    public function test_contact_page_returns_successful_response(): void
    {
        $response = $this->get('/contact');
        $response->assertStatus(200);
    }

    public function test_public_routes_do_not_require_authentication(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);

        $response = $this->get('/about');
        $response->assertStatus(200);

        $response = $this->get('/contact');
        $response->assertStatus(200);
    }
}
