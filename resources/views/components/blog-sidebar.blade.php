@props(['recent', 'categories'])
<div class="sidebar">
    <div class="sidebar-item search-form">
        <h3 class="sidebar-title">Search</h3>
        <form action="" method="GET" class="mt-3">
            <input
                type="text"
                name="search"
                placeholder="Keyword" value="{{request()->query('search')}}">
            <button type="submit"><i class="bi bi-search"></i></button>
        </form>
    </div><!-- End sidebar search formn-->
    <div class="sidebar-item categories">
        <h3 class="sidebar-title">Categories</h3>
        <ul class="mt-3">
            @forelse ($categories as $category)
                <li><a href="{{ route('category.posts', $category->slug) }}">{{ $category->name }} <span>({{ $category->posts->count() }})</span></a></li>
            @empty
                <p class="text-center text-muted">No Category Available.</p>
            @endforelse
        </ul>
    </div><!-- End sidebar categories-->
    <div class="sidebar-item recent-posts">
        <h3 class="sidebar-title">Recent Posts</h3>
        <div class="mt-3">
            @forelse ($recent as $post)
                <div class="post-item mt-3">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="flex-shrink-0">
                    <div>
                        <h4><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></h4>
                        <time
                            datetime="{{ $post->created_at->format('y-m-d') }}">{{ $post->created_at->format('M d, Y') }}</time>
                    </div>
                </div><!-- End recent post item-->
            @empty
            @endforelse
        </div>
    </div><!-- End sidebar recent posts-->
</div><!-- End Blog Sidebar -->