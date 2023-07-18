<x-auth-layout>
    <div class="row justify-content-center align-items-center">

        {{-- Form Div (Start) --}}
        <div class="col-lg-6 col-md-7 col-12">
            <div class="auth-form">
                <h1 class="title mb-12">Verify Email  </h1>

                <div class="form-group mb-6">
                    <label for="email" class="mb-2 form-label">Enter verification code send to your entered email address</label>
                    <input type="email" name="email" class="form-control mb-2" required/>
                </div>

                <div class="d-flex align-items-center justify-content-between mb-10">
                    <div>
                        <a href="/login" class="link text-decoration-underline h5">Re-Send Code</a>
                    </div>
                    <div>
                        <button class="btn btn-primary">Confirm</button>
                    </div>
                </div>

            </div>
        </div>
        {{-- Form Div (Start) --}}

        {{-- Illustration Div (Start) --}}
        <div class="col-lg-6 col-md-5 col-12">
            <figure class="d-lg-block d-md-block d-none">
                <img src="{{ asset('assets/images/auth/verify-email.png') }}" alt="register-illustration"
                    class="auth-illustration">
            </figure>
        </div>
        {{-- Illustration Div (End) --}}

    </div>
</x-auth-layout>
