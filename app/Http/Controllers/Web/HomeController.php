<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Branch;

class HomeController extends Controller
{
    public function index()
    {
        $latestBlogs = Blog::published()
            ->latest('published_at')
            ->take(3)
            ->get();

        $featuredBranches = Branch::active()
            ->orderBy('name')
            ->take(3)
            ->get();

        return view('home.index', compact('latestBlogs', 'featuredBranches'));
    }
}
