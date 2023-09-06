<?php

namespace App\Http\Controllers;

use App\Models\Blog\Post;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        $posts = Post::with('category')
            ->latest()
            ->take(3)
            ->get();

        return view('home', compact('posts'));
    }
}
