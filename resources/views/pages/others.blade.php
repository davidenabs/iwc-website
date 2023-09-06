<x-guest
    title="{{ $page->title }}"
    description="{{ $page->description }}"
    keyboard="{{ $page->keyboard }}">
    <section id="hero-animated" class="hero-animated d-flex align-items-center">
        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
            data-aos="zoom-out">
            {{-- <img src="assets/img/hero-carousel/1.png" class="img-fluid animated"> --}}

            <h1><span>{{ $page->title }}</span></h1>
            <p>
                <div class="wave"></div>
            </p>
            {{-- <div class="d-flex">
                <a href="#about" class="btn-get-started">Get Started</a>
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                    class="glightbox btn-watch-video d-flex align-items-center"><i
                        class="bi bi-play-circle"></i><span>Watch
                        Video</span></a>
            </div> --}}
        </div>
    </section>
    <section id="blog" class="blog bg-light">
        <div class="container p-0" data-aos="fade-up">

            <div class="row g-5 justify-content-center">

                <div class="col-lg-8">
                    <div class="container mt-5">
                        {!! $page->content !!}
                    </div>

            </div>
        </div>


        </div>
    </section>

    @section('styles')
        <style>

.wave {
    height: 2px;
    border-radius: 50px;
    width: 300px;
    background-color: red;
}
        </style>
    @endsection
</x-guest>
