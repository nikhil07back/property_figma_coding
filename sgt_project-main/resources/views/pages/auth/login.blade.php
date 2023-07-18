<x-auth-layout>
    <div class="row align-items-center justify-center">

        {{-- Form Div (Start) --}}
        <div class="col-lg-6 col-md-6 col-12">
            <form class="auth-form" action="/properties/all" method="GET">
                <h1 class="title mb-12">Welcome back! </h1>

                <div class="form-group mb-6">
                    <label for="email" class="mb-2 form-label">Email Address</label>
                    <input type="email" class="form-control mb-2">
                    {{-- <small class="form-text text-danger mt-2"><i class="fas fa-info-circle text-danger"></i> Email
                        Address is incorrect</small> --}}
                </div>

                <div class="form-group mb-10">
                    <label for="email" class="mb-2 form-label">Password</label>
                    <input type="password" class="form-control mb-2"> 
                </div>

                <div class="d-flex align-items-center justify-content-between mb-10">
                    <div>
                        <a href="/forgot-password" class="link text-decoration-underline h5">Forgot Password?</a>
                    </div>
                    <div>
                        <button class="btn btn-primary">Sign In</button>
                    </div>
                </div>

                <div class="opacity-50 mb-10">
                    <hr class="opacity-25">
                </div>

                <div>
                    <p>Don’t you have an account? <a href="/register" class="link">Sign Up</a></p>
                </div>

            </form>
        </div>
        {{-- Form Div (Start) --}}

        {{-- Illustration Div (Start) --}}
        <div class="col-lg-6 col-md-6 col-12">
            <figure class="d-lg-block d-md-block d-none">
                <img src="{{ asset('assets/images/auth/login.png') }}" alt="login-illustration"
                    class="auth-illustration">
            </figure>
        </div>
        {{-- Illustration Div (End) --}}

    </div>
</x-auth-layout>
