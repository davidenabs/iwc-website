@php
    $pages = App\Models\Page::get(['title', 'slug', 'add_to_nav']);
@endphp

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container d-flex align-items-center justify-content-between">

        <a href="{{ route('home') }}" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
            <img src="{{ asset('assets/logo/impact-the-world-for-christ.png') }}" alt="Impact the world for Christ" >
            {{-- <h4>IWC Logo<span>.</span></h4> --}}
        </a>

        <nav id="navbar" class="navbar">
            <ul>

                <li><a class="nav-link " href="{{ route('home') }}">Home</a></li>

                {{-- <li class="dropdown"><a href="#"><span>Packages</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="#">IWC Bronze</a></li>
                        <li><a href="#">IWC Silver</a></li>
                        <li><a href="#">IWC Gold</a></li>
                        <li><a href="#">IWC Premium</a></li>
                    </ul>
                </li> --}}

                <li><a class="nav-link scrollto" href="{{ route('home') }}#about">About</a></li>
                <li><a class="nav-link scrollto" href="{{ route('home') }}#services">Services</a></li>
                <li><a class="nav-link scrollto" href="{{ route('home') }}#pricing">Pricing</a></li>
                @foreach ($pages as $page)
                    @if ($page->add_to_nav)
                    <li><a class="nav-link scrollto {{ Request::is($page->slug) ? 'active' : '' }}" href="{{ route('page', $page->slug) }}">{{ $page->title }}</a></li>
                    @endif
                @endforeach

                <li><a class="nav-link scrollto {{
                    Route::currentRouteName() === 'blog.index' ||
                    Route::currentRouteName() === 'blog.show'
                    ? 'active' : ''
                }}" href="{{ route('blog.index') }}">Blog</a></li>
                <li><a class="nav-link scrollto" href="{{ route('home') }}#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle d-none"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
