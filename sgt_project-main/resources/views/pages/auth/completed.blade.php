<x-auth-layout>
    <div class="row justify-content-center align-items-center">

        {{-- Form Div (Start) --}}
        <div class="col-lg-6 col-md-7 col-12">
            <div class="auth-form text-center">

                <div class="mb-10">
                    <div class="completed-icon"><i class="fas fa-check"></i></div>
                </div>

                <h1 class="title mb-7">Nice to have you, John 🙌</h1>
                <p class="text-dark mb-12">A link was just sent to your phone to download the application.</p>

                <div class="d-flex align-items-center justify-content-center mb-10">
                    <div>
                        <button class="btn btn-primary">Go To Dashboard <i class="fas fa-arrow-right ms-1"></i></button>
                    </div>
                </div>

            </div>
        </div>
        {{-- Form Div (Start) --}}

        {{-- Illustration Div (Start) --}}
        <div class="col-lg-6 col-md-5 col-12">
            <figure class="d-lg-block d-md-block d-none">
                <img src="{{ asset('assets/images/auth/completed.png') }}" alt="completed-illustration"
                    class="auth-illustration">
            </figure>
        </div>
        {{-- Illustration Div (End) --}}

    </div>
</x-auth-layout>
