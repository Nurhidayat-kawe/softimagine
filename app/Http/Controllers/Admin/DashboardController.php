<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Testimonial;
use App\Models\Blog;
use App\Models\TeamMember;
use App\Models\SiteStat;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'services_count' => Service::count(),
            'portfolios_count' => Portfolio::count(),
            'testimonials_count' => Testimonial::count(),
            'blogs_count' => Blog::count(),
            'team_count' => TeamMember::count(),
            'stats_count' => SiteStat::count(),
        ];

        return view('admin.dashboard.index', $data);
    }
}
