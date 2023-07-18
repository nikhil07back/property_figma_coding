<x-auth-layout>
    <div class="row justify-center">

        {{-- Form Div (Start) --}}
        <div class="col-lg-6 col-md-7 col-12">
            <div class="plan-selection-div">

                <div class="mb-18">
                    <ul class="form-progress-points">
                        <li><div class="active">1</div></li>
                        <li><div class="active">2</div></li>
                        <li><div class="active">3</div></li>
                        <li><div class="active">4</div></li>
                    </ul>
                </div>

                <h1 class="title mb-12">Company Details </h1>

                <div class="form-group mb-6">
                    <label for="company_name" class="mb-2 form-label">Company Name <em>*</em></label>
                    <input type="text" name="company_name" class="form-control mb-2" required/>
                </div>

                <div class="row">

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group mb-6">
                            <label for="fedral_ein" class="mb-2 form-label">Federal EIN <span>(Optional)</span></label>
                            <input type="text" name="fedral_ein" class="form-control mb-2" required/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group mb-6">
                            <label for="bsis_number" class="mb-2 form-label">BSIS Number <span>(Optional)</span></label>
                            <input type="text" name="bsis_number" class="form-control mb-2" required/>
                        </div>
                    </div>

                </div>

                <div class="form-group mb-6">
                    <label for="street" class="mb-2 form-label">Street Address <em>*</em></label>
                    <input type="text" name="street" class="form-control mb-2" required/>
                </div>

                <div class="row">

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group mb-6">
                            <label for="city" class="mb-2 form-label">City <em>*</em></label>
                            <input type="text" name="city" class="form-control mb-2" required/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-group mb-6">
                            <label for="postal_code" class="mb-2 form-label">Postal Code <em>*</em></label>
                            <input type="text" name="postal_code" class="form-control mb-2" required/>
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

                <div class="d-flex align-items-center justify-content-end mb-10">
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
                <img src="{{ asset('assets/images/auth/company-details.png') }}" alt="register-illustration"
                    class="auth-illustration">
            </figure>
        </div>
        {{-- Illustration Div (End) --}}

    </div>
</x-auth-layout>
