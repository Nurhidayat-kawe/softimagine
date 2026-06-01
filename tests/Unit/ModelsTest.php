<?php

namespace Tests\Unit;

use App\Models\Blog;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\SiteSetting;
use App\Models\SiteStat;
use App\Models\TeamMember;
use App\Models\Testimonial;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ModelsTest extends TestCase
{
    use RefreshDatabase;

    public function test_service_fillable_and_casts(): void
    {
        $service = Service::factory()->create();
        $this->assertIsArray($service->features);
        $this->assertContains('icon', $service->getFillable());
        $this->assertContains('title', $service->getFillable());
    }

    public function test_portfolio_fillable_and_casts(): void
    {
        $portfolio = Portfolio::factory()->create();
        $this->assertIsArray($portfolio->tech);
        $this->assertNull($portfolio->images);
        $this->assertContains('title', $portfolio->getFillable());
        $this->assertContains('category', $portfolio->getFillable());
    }

    public function test_testimonial_fillable_and_casts(): void
    {
        $testimonial = Testimonial::factory()->create();
        $this->assertIsInt($testimonial->rating);
        $this->assertContains('name', $testimonial->getFillable());
    }

    public function test_blog_fillable_and_casts(): void
    {
        $blog = Blog::factory()->create();
        $this->assertNotNull($blog->slug);
        $this->assertContains('title', $blog->getFillable());
    }

    public function test_team_member_fillable_and_casts(): void
    {
        $member = TeamMember::factory()->create();
        $this->assertIsArray($member->skills);
        $this->assertContains('name', $member->getFillable());
    }

    public function test_site_stat_fillable(): void
    {
        $stat = SiteStat::factory()->create();
        $this->assertContains('label', $stat->getFillable());
        $this->assertContains('value', $stat->getFillable());
    }

    public function test_site_setting_fillable(): void
    {
        $setting = SiteSetting::factory()->create();
        $this->assertContains('key', $setting->getFillable());
        $this->assertContains('value', $setting->getFillable());
    }

    public function test_service_features_serialized_as_json(): void
    {
        $features = ['Feature 1', 'Feature 2', 'Feature 3'];
        $service = Service::factory()->create(['features' => $features]);
        $this->assertEquals($features, $service->features);
    }

    public function test_portfolio_tech_serialized_as_json(): void
    {
        $tech = ['PHP', 'Laravel', 'MySQL'];
        $portfolio = Portfolio::factory()->create(['tech' => $tech]);
        $this->assertEquals($tech, $portfolio->tech);
    }
}
