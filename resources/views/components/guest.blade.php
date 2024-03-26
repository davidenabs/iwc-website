<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta name="description"
        content="{{ $description ?? 'Discover comprehensive ministry services designed to boost your online presence, engage your audience, and drive support for your mission. Our offerings include social media management, content creation, donation support, outreach consulting, website design, and book writing. Partner with us to maximize your impact for Christ.' }}" />

    <meta property="og:title" content="{{ $title ?? config('app.name') }}" />
    <meta name="keywords"
        content="ministry services, social media management, online presence, content creation, donation support, ministry growth, book writing, outreach consulting, website design, theological training, online ministry, impact for Christ" />

    @if (!empty($image))
        <meta property="og:image" content="{{ $image }}" />
    @endif
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:creator" content="@iwc" />
    <meta name="twitter:description"
        content="{{ $description ?? 'Discover comprehensive ministry services designed to boost your online presence, engage your audience, and drive support for your mission. Our offerings include social media management, content creation, donation support, outreach consulting, website design, and book writing. Partner with us to maximize your impact for Christ.' }}" />
    @if (!empty($image))
        <meta name="twitter:image" content="{{ $image }}" />
    @endif
    <meta name="twitter:title" content="{{ $title ?? config('app.name') }}" />

    <title>{{ $title ?? config('app.name') }}</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/variables.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/variables-red.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/logo/180x180.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/logo/16x16.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/logo/32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="48x48" href="{{ asset('assets/logo/48x48.png') }}" />
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/logo/96x96.png') }}" />

    @yield('styles')
    
    {{-- @livewireStyles --}}
</head>

<body>

    @include('layouts.navigation')

    @if (isset($hero))
        {{ $hero }}
    @endif

    <main id="main">

        {{ $slot }}

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-content">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            {{-- <h3>{{ env('APP_NAME') }}</h3> --}}
                            <img src="{{ asset('assets/logo/impact-the-world-for-christ.png') }}"
                                alt="Impact the world for Christ" style="max-height: 60px;">
                            <p>
                                7661 Mclaughlin Rd<br>
                                #272 Falcon, CO 80831<br><br>
                                <strong>Phone:</strong> {{ env('APP_PHONE_NUMBER') }}<br>
                                <strong>Email:</strong> {{ env('APP_EMAIL') }}<br>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('home') }}">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('home') }}#about">About us</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('home') }}#services">Services</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('home') }}#">Terms of service</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('home') }}#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Social Media Management</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Donation </a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Generate Teaching Contents</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Website Creation</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Generate Written contents</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Writing Books</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Stay in the loop with our newsletter for updates, insights, and more!</p>
                        {{-- <iframe src="https://api.leadconnectorhq.com/widget/form/SsE7XMpQue4Uhun0LQ3b"
                            style=""
                            id="inline-SsE7XMpQue4Uhun0LQ3b" data-layout="{'id':'INLINE'}"
                            data-trigger-type="alwaysShow" data-trigger-value=""
                            data-activation-type="alwaysActivated" data-activation-value=""
                            data-deactivation-type="neverDeactivate" data-deactivation-value=""
                            data-form-name="Subscribe" data-height="400"
                            data-layout-iframe-id="inline-SsE7XMpQue4Uhun0LQ3b" data-form-id="SsE7XMpQue4Uhun0LQ3b"
                            title="Subscribe">
                        </iframe>
                        <script src="https://link.msgsndr.com/js/form_embed.js"></script> --}}
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="footer-legal text-center">
            <div
                class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

                <div class="d-flex flex-column align-items-center align-items-lg-start">
                    <div class="copyright">
                        &copy; Copyright <strong><span>{{ config('app.name') }}</span></strong>. All Rights Reserved
                    </div>
                </div>

                <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bi bi-youtube"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>

            </div>
        </div>

    </footer><!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    {{-- <div id="preloader"></div> --}}

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    @yield('scripts')
    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    {{-- @livewireScripts --}}

</body>

</html>
