<x-auth-layout>
    <div class="row justify-content-center align-items-center">

        {{-- Form Div (Start) --}}
        <div class="col-lg-6 col-md-7 col-12">
            <div class="auth-form">
                <h1 class="title mb-2">Get the app! </h1>
                <p class="text-dark mb-12">Enter your phone number to get the guard app.</p>

                <div class="form-group mb-6">
                    <label for="phone" class="mb-2 form-label">Phone Number</label>
                    <input type="tel" name="phone" class="form-control mb-2" required/>
                </div>

                <div class="d-flex align-items-center justify-content-end mb-10">
                    <div>
                        <button class="btn btn-primary inverse">Send Download Link</button>
                    </div>
                </div>

            </div>
        </div>
        {{-- Form Div (Start) --}}

        {{-- Illustration Div (Start) --}}
        <div class="col-lg-6 col-md-5 col-12">
            <figure class="d-lg-block d-md-block d-none">
                <img src="{{ asset('assets/images/auth/add-phone.png') }}" alt="add-phone-illustration"
                    class="auth-illustration">
            </figure>
        </div>
        {{-- Illustration Div (End) --}}

    </div>
</x-auth-layout>
