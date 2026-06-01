<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Testimonial;
use App\Models\Blog;
use App\Models\TeamMember;
use App\Models\SiteStat;

class PageController extends Controller
{
    public function home()
    {
        $services = Service::orderBy('sort_order')->get();
        $portfolios = Portfolio::orderBy('sort_order')->get();
        $testimonials = Testimonial::orderBy('created_at', 'desc')->get();
        $blogs = Blog::orderBy('date', 'desc')->get();
        $stats = SiteStat::all();

        return view('pages.home', compact(
            'services', 'portfolios', 'testimonials', 'blogs', 'stats'
        ));
    }

    public function about()
    {
        $team = TeamMember::orderBy('sort_order')->get();
        $stats = SiteStat::all();
        $services = Service::orderBy('sort_order')->get();

        return view('pages.about', compact('team', 'stats', 'services'));
    }

    public function services()
    {
        $services = Service::orderBy('sort_order')->get();

        return view('pages.services', compact('services'));
    }

    public function portfolio()
    {
        $portfolios = Portfolio::orderBy('sort_order')->get();
        $categories = $portfolios->pluck('category')->unique()->values()->toArray();

        return view('pages.portfolio', compact('portfolios', 'categories'));
    }

    public function blog()
    {
        $blogs = Blog::orderBy('date', 'desc')->get();

        return view('pages.blog', compact('blogs'));
    }

    public function blogShow(string $slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $related = Blog::where('slug', '!=', $slug)->latest('date')->take(3)->get();

        return view('pages.blog-show', compact('blog', 'related'));
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
