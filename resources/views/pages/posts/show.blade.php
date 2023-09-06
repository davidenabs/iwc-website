<x-guest :title="$post->title" :description="$post->description" :image="asset('storage/' . $post->image)">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h1> </h1>
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('blog.index') }}">Blog</a></li>
                    <li>{{ Str::limit($post->title, 10, '...') }}</li>
                </ol>
            </div>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row g-5">

                <div class="col-lg-8">

                    <article class="blog-details">

                        <div class="post-img">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid">
                        </div>

                        <h1 class="title">{{ $post->title }}</h1>

                        <div class="meta-top">
                            <ul>
                                {{-- <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">{{ $post->author->name }}</a></li> --}}
                                <li class="d-flex align-items-center"><i class="bi bi-folder"></i> <a
                                        href="{{ route('category.posts', $post->category->slug) }}">{{ $post->category->name }}</a>
                                </li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                        href="{{ route('blog.show', $post->slug) }}"><time
                                            datetime="{{ $post->created_at->format('y-m-d') }}">{{ $post->created_at->format('M d, Y') }}</time></a>
                                </li>
                                {{-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="{{ route('blog.show', $post->slug) }}">12 Comments</a></li> --}}
                            </ul>
                        </div><!-- End meta top -->

                        <div class="content">

                            {!! $post->content !!}

                        </div><!-- End post content -->


                        <div class="meta-bottom d-flex justify-content-between">
                            <div>
                              <i class="bi bi-folder"></i>
                            <ul class="cats">
                                <li><a href="#">{{ $post->category->name }}</a></li>
                            </ul>
                            </div>

                            {!! ShareButtons::page(route('blog.show', $post->slug), $post->title, [
                                'title' => $post->title,
                                'rel' => 'nofollow noopener noreferrer',
                            ])
                              ->facebook()
                              ->whatsapp()
                              ->linkedin(['rel' => 'follow'])
                              ->telegram()
                              ->skype()
                              ->mailto()        # Generates a send by mail share button
                              ->copylink()      # Generates a copy to the clipboard share button
                              ->render() !!}



                            {{-- <i class="bi bi-tags"></i>
                  <ul class="tags">
                    <li><a href="#">Creative</a></li>
                    <li><a href="#">Tips</a></li>
                    <li><a href="#">Marketing</a></li>
                  </ul> --}}
                        </div><!-- End meta bottom -->

                    </article><!-- End blog post -->

                    {{-- <div class="post-author d-flex align-items-center">
                <img src="assets/img/blog/blog-author.jpg" class="rounded-circle flex-shrink-0" alt="">
                <div>
                  <h4>Jane Smith</h4>
                  <div class="social-links">
                    <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                    <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                    <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                  </div>
                  <p>
                    Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                  </p>
                </div>
              </div><!-- End post author --> --}}

                    {{-- <x-blog-commment /> --}}

                </div>

                <div class="col-lg-4">

                    <x-blog-sidebar :recent="$recent" :categories="$categories" />

                </div>
            </div>

        </div>
    </section><!-- End Blog Details Section -->

    @section('scripts')
        {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script> --}}
        {{-- <script src="{{ asset('js/share.js') }}"></script> --}}
        <script src="{{ asset('assets/js/share-buttons.js') }}"></script>
        <script src="{{ asset('assets/js/share-buttons.jquery.js') }}"></script>
    @endsection

    @section('styles')
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="{{ asset('assets/css/share-buttons.css') }}">
    @endsection
</x-guest>
