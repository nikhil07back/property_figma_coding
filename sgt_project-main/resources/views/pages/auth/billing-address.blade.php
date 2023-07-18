<x-auth-layout>
    <div class="row justify-content-center align-items-center">

        {{-- Form Div (Start) --}}
        <div class="col-lg-6 col-md-7 col-12">
            <div class="auth-form">

                <div class="mb-18">
                    <ul class="form-progress-points">
                        <li><div class="active">1</div></li>
                        <li><div class="active">2</div></li>
                        <li><div class="active">3</div></li>
                        <li><div class="inactive">4</div></li>
                    </ul>
                </div>

                <h1 class="title mb-12">Billing Address </h1>

                <div class="form-group mb-6">
                    <label for="street" class="mb-2 form-label">Street Address <em>*</em></label>
                    <input type="text" name="street" class="form-control mb-2" required>
                </div>

                <div class="row">

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group mb-6">
                            <label for="city" class="mb-2 form-label">City <em>*</em></label>
                            <input type="text" name="city" class="form-control mb-2" required>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group mb-6">
                            <label for="postal_code" class="mb-2 form-label">Postal Code <em>*</em></label>
                            <input type="text" name="postal_code" class="form-control mb-2" required>
                        </div>
                    </div>

                </div>

                <div class="form-group mb-6">
                    <label for="state" class="mb-2 form-label">State <em>*</em></label>
                    <select name="state" id="state" class="form-select">
                        <option value="">Select State</option>
                    </select>
                </div>

                <div class="form-group mb-6">
                    <label for="country" class="mb-2 form-label">Country <em>*</em></label>
                    <select name="country" id="country" class="form-select">
                        <option value="">Select Country</option>
                    </select>
                </div>

                <div class="d-flex align-items-center justify-content-between mb-10">
                    <div>
                        <a href="/login" class="link text-decoration-underline h5"><i class="fas fa-arrow-left me-2"></i>Back</a>
                    </div>
                    <div>
                        <button class="btn btn-primary">Next Step <i class="fas fa-arrow-right ms-2"></i></button>
                    </div>
                </div>

            </div>
        </div>
        {{-- Form Div (Start) --}}

        {{-- Illustration Div (Start) --}}
        <div class="col-lg-6 col-md-5 col-12">
            <figure class="d-lg-block d-md-block d-none">
                <img src="{{ asset('assets/images/auth/billing-address.png') }}" alt="billing-address"
                    class="auth-illustration">
            </figure>
        </div>
        {{-- Illustration Div (End) --}}

    </div>
</x-auth-layout>
