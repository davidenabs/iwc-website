<?php

namespace App\Http\Controllers;

use App\Models\Blog\Category;
use App\Models\Blog\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        $recent = Post::with([
            'author' => function ($query) {
                $query->select('id', 'name',);
            },
        ])
            // ->where('sessions', '>', 0)
            // ->orderByDesc('sessions')
            ->limit(6)
            ->get();

        $posts = Post::with([
            'category',
            'author' => function ($query) {
                $query->select('id', 'name',);
            },

        ])
            ->search()
            ->latest()
            ->paginate(perPage: 16);

        $categories = Category::with('posts')->latest()->get();

        return view('pages.posts.index', compact('recent', 'posts', 'categories'));
    }
}
