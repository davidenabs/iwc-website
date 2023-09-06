@if ($posts->count() > 2)
    <!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-blog-posts" class="recent-blog-posts">

  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Blog</h2>
      <p>Recent posts form our Blog</p>
    </div>

    <div class="row">

      @foreach ($posts as $post)
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="post-box">
          <div class="post-img"><img src="{{ asset('storage/'.$post->image) }}" class="img-fluid" alt="{{ $post->title }}"></div>
          <div class="meta">
            <span class="post-date">{{ $post->created_at->format('D, M d') }}</span>
            <span class="post-author"> / {{ $post->category->name }}</span>
          </div>
          <h3 class="post-title">{{ $post->title }}</h3>
          <p>{{ Str::limit($post->descrption, 150, '...') }}</p>
          <a href="{{ route('blog.show', $post->slug) }}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
      @endforeach

    </div>

  </div>

</section><!-- End Recent Blog Posts Section -->
@endif