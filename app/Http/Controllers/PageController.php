<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display the Homepage (The Conversion Engine).
     */
    public function homepage()
    {
        $featuredProjects = Portfolio::where('is_featured', true)->take(4)->get();
        $allProjects = Portfolio::all();

        return view('pages.homepage', compact('featuredProjects', 'allProjects'));
    }

    /**
     * Display the Services & Process page (The Value Builder).
     */
    public function services()
    {
        return view('pages.services');
    }

    /**
     * Display the Portfolio Grid & Case Studies (The Proof).
     */
    public function portfolio(Request $request)
    {
        $category = $request->query('category');

        $query = Portfolio::query();
        if ($category && $category !== 'All') {
            $query->where('category', $category);
        }

        $projects = $query->orderBy('created_at', 'desc')->get();
        $categories = ['All', 'Kitchens', 'Wardrobes', 'Doors', 'Living', 'Bathrooms', 'Commercial'];

        return view('pages.portfolio', compact('projects', 'categories', 'category'));
    }

    /**
     * Display a single Portfolio Case Study.
     */
    public function portfolioDetail($slug)
    {
        $project = Portfolio::where('slug', $slug)->firstOrFail();
        $relatedProjects = Portfolio::where('id', '!=', $project->id)
            ->where('category', $project->category)
            ->take(3)
            ->get();

        if ($relatedProjects->isEmpty()) {
            $relatedProjects = Portfolio::where('id', '!=', $project->id)->take(3)->get();
        }

        return view('pages.portfolio-detail', compact('project', 'relatedProjects'));
    }

    /**
     * Display the About / Philosophy page (The Connection).
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Display the Contact & Booking page (The Closer).
     */
    public function contact()
    {
        return view('pages.contact');
    }
}
