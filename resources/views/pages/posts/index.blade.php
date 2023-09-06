@php
    if (isset($category)) {
        $title = 'Category - ' . $category->name;
        $description = $category->description;
    } else {
      $title = 'Blog';
    }
@endphp

<x-guest
  title="{{ $title }}">
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>{{ $title }}</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>{{ $title }}</li>
        </ol>
      </div>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Blog Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row g-5 justify-content-center">

        <div class="col-lg-8">

          <div class="row gy-4 posts-list">

            @forelse ($posts as $post)
            <div class="col-lg-6">
                <article class="d-flex flex-column">

                  <div class="post-img">
                    <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->title }}" class="img-fluid">
                  </div>

                  <h2 class="title">
                    <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                  </h2>

                  <div class="meta-top">
                    <ul class="justify-content-between">
                      {{-- <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="{{ route('blog.show', $post->slug) }}">{{ $post->author->name }}</a></li> --}}
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="{{ route('blog.show', $post->slug) }}"><time datetime="{{ $post->created_at->format('Y-m-d') }}">{{ $post->created_at->format('M d, Y') }}</time></a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-folder"></i> <a href="{{ route('category.posts', $post->category->slug) }}">{{ $post->category->name }}</a></li>
                    </ul>
                  </div>

                  <div class="content">
                    <p>
                      {{ $post->description }}
                    </p>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a href="{{ route('blog.show', $post->slug) }}" style="border-radius: 50px !important;">Read More</a>
                  </div>

                </article>
              </div><!-- End post list item -->
            @empty
                <p class="text-center text-muted">Opps! no blog posts available.</p>
            @endforelse

          </div><!-- End blog posts list -->

          <div class="blog-pagination">
            {{ $posts->links('include.pagination', ['posts' => $posts]) }}
            {{-- <ul class="justify-content-center">
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
            </ul> --}}
          </div><!-- End blog pagination -->

        </div>

        {{-- <div class="col-lg-4">

          <x-blog-sidebar :recent="$recent" :categories="$categories" />

        </div> --}}

      </div>

    </div>
  </section><!-- End Blog Section -->
</x-guest>