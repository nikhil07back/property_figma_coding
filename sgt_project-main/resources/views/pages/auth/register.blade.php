<x-auth-layout>
    <div class="row justify-center">

        {{-- Form Div (Start) --}}
        <div class="col-lg-6 col-md-7 col-12">
            <div class="auth-form">
                <h1 class="title mb-12">Create your Account </h1>

                <div class="form-group mb-6">
                    <label for="first_name" class="mb-2 form-label">First Name <em>*</em></label>
                    <input type="text" name="first_name" class="form-control mb-2" required>
                </div>

                <div class="form-group mb-6">
                    <label for="last_name" class="mb-2 form-label">Last Name <em>*</em></label>
                    <input type="text" name="last_name" class="form-control mb-2" required>
                </div>

                <div class="form-group mb-6">
                    <label for="email" class="mb-2 form-label">Email Address <em>*</em></label>
                    <input type="email" name="email" class="form-control mb-2" required>
                </div>

                <div class="form-group mb-6">
                    <label for="phone" class="mb-2 form-label">Phone Number <em>*</em></label>
                    <input type="tel" name="phone" class="form-control mb-2" required>
                </div>

                <div class="form-group mb-10">
                    <label for="password" class="mb-2 form-label">Password</label>
                    <input type="password" class="form-control mb-2" required>
                </div>

                <div class="form-group mb-10">
                    <label for="password" class="mb-2 form-label">Re-Enter Password</label>
                    <input type="password" class="form-control mb-2" required>
                </div>

                <div class="d-flex align-items-center justify-content-between mb-10">
                    <div>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                        <label for="" class="form-check-label text-dark ms-2">I agree to the Terms and Conditions</label>
                    </div>
                    <div>
                        <button class="btn btn-primary">Sign up</button>
                    </div>
                </div>

                <div class="opacity-50 mb-10">
                    <hr class="opacity-25">
                </div>

                <div>
                    <p>Have an account?  <a href="/login" class="link">Sign In</a></p>
                </div>

            </div>
        </div>
        {{-- Form Div (Start) --}}

        {{-- Illustration Div (Start) --}}
        <div class="col-lg-6 col-md-5 col-12">
            <figure class="d-lg-block d-md-block d-none">
                <img src="{{ asset('assets/images/auth/register.png') }}" alt="register-illustration"
                    class="auth-illustration">
            </figure>
        </div>
        {{-- Illustration Div (End) --}}

    </div>
</x-auth-layout>
