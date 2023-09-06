<x-guest-layout>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-4">
                    {{-- <x-application-logo /> --}}
                    <h2 class="heading-section">IWC Logo</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-user-o"></span>
                        </div>
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                        @livewire('auth.login')
                    </div>
                    <div class="py-3"></div>
                    <div class="my-5 text-center text-muted">
                        Not a member?<a href="{{ route('register') }}" class="nav-link d-inline text-danger">Register here</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
