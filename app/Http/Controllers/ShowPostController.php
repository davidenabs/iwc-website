<?php

namespace App\Http\Controllers;

use App\Models\Blog\Category;
use App\Models\Blog\Post;
use Illuminate\Http\Request;

class ShowPostController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Post $post)
    {
        if (request()->query('search') == true) {

            $postController = new PostController();

            return $postController->__invoke();
        }

        $recent = Post::with('author')
            // ->where('sessions', '>', 0)
            // ->orderByDesc('sessions')
            ->limit(6)
            ->get();

        $categories = Category::with('posts')->latest()->get();

        return view('pages.posts.show', [
            'post' => $post,
            'recent' => $recent,
            'categories' => $categories,
            'recommended' => cache()->remember(
                "post_{$post->id}_recommendations",
                24 * 3600, // 24 hours.
                fn () => $post->recommendations,
            ),
        ]);
    }
}
