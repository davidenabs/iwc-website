<?php

namespace App\Http\Controllers;

use App\Models\Blog\Category;
use App\Models\Blog\Post;
use Illuminate\Http\Request;

class ShowPostByCategoryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Category $category)
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

        $posts = $category->posts()->with([
            'author' => function ($query) {
                $query->select('id', 'name',);
            },
            'category',
        ])
            ->search()
            ->latest()
            ->paginate(perPage: 16);

        $categories = Category::with('posts')->latest()->get();

        return view('pages.posts.index', compact('recent', 'posts', 'categories', 'category'));
    }
}
