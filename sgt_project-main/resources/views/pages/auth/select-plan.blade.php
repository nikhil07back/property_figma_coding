<x-auth-layout>
    <div class="row justify-center mb-18">

        {{-- Form Div (Start) --}}
        <div class="col-lg-6 col-md-7 col-12">
            <div class="plan-selection-div">

                <div class="mb-12">
                    <ul class="form-progress-points">
                        <li><div class="active">1</div></li>
                        <li><div class="active">2</div></li>
                        <li><div class="inactive">3</div></li>
                        <li><div class="inactive">4</div></li>
                    </ul>
                </div>

                <h1 class="title mb-12">Select a Plan </h1>

                <div class="mb-10">
                    <div class="d-flex align-items-center justify-content-start plan-duration-selector">
                        <p class="mb-0 me-3">Monthly</p>
                        <label class="switch">
                            <input type="checkbox" checked required>
                            <span class="slider"></span>
                          </label>                          
                        <p class="mb-0 ms-3">Annualy <span style="color: #10B981;"> (-10%)</span></p>
                    </div>
                </div>

                <div>

                    {{-- Plan Card (Start) --}}
                    <div class="plan-card active">
                        <div class="row">
                            <div class="col-6">
                                <div class="d-flex align-items-center justify-content-start mb-5">
                                    <img src="{{asset('assets/images/plans/silver.png')}}" alt="silver-plan" class="plan-icon">
                                    <h1 class="plan-title">Silver</h1>
                                </div>
                                <div class="mb-5">
                                    <p class="plan-description">For single location security companies looking to revamp their technology.</p>
                                </div>
                                <div>
                                    <div class="plan-price">
                                        <span>$25</span>
                                        <span>/mo</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1"></div>
                            <div class="col-5">
                                <div>
                                    <h1 class="plan-feature-title">WHAT’S INCLUDED</h1>
                                    <ul class="plan-feature-list">
                                        <li>
                                            <span><i class="fas fa-check"></i></span>
                                            <span>5 Properties</span>
                                        </li>
                                        <li>
                                            <span><i class="fas fa-check"></i></span>
                                            <span>10 Shift</span>
                                        </li>
                                        <li>
                                            <span><i class="fas fa-check"></i></span>
                                            <span>10 Checkpoints</span>
                                        </li>
                                        <li>
                                            <span><i class="fas fa-check"></i></span>
                                            <span>10 Guards</span>
                                        </li>
                                        <li>
                                            <span><i class="fas fa-times"></i></span>
                                            <span>Messenger</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Plan Card (End) --}}

                    {{-- Plan Card (Start) --}}
                    <div class="plan-card">
                        <div class="row">
                            <div class="col-6">
                                <div class="d-flex align-items-center justify-content-start mb-5">
                                    <img src="{{asset('assets/images/plans/gold.png')}}" alt="silver-plan" class="plan-icon">
                                    <h1 class="plan-title">Gold</h1>
                                </div>
                                <div class="mb-5">
                                    <p class="plan-description">For single location security companies looking to revamp their technology.</p>
                                </div>
                                <div>
                                    <div class="plan-price">
                                        <span>$100</span>
                                        <span>/mo</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1"></div>
                            <div class="col-5">
                                <div>
                                    <h1 class="plan-feature-title">WHAT’S INCLUDED</h1>
                                    <ul class="plan-feature-list">
                                        <li>
                                            <span><i class="fas fa-check"></i></span>
                                            <span>5 Properties</span>
                                        </li>
                                        <li>
                                            <span><i class="fas fa-check"></i></span>
                                            <span>10 Shift</span>
                                        </li>
                                        <li>
                                            <span><i class="fas fa-check"></i></span>
                                            <span>10 Checkpoints</span>
                                        </li>
                                        <li>
                                            <span><i class="fas fa-check"></i></span>
                                            <span>10 Guards</span>
                                        </li>
                                        <li>
                                            <span><i class="fas fa-check"></i></span>
                                            <span>Messenger</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Plan Card (End) --}}

                    {{-- Plan Card (Start) --}}
                    <div class="plan-card">
                        <div class="row">
                            <div class="col-6">
                                <div class="d-flex align-items-center justify-content-start mb-5">
                                    <img src="{{asset('assets/images/plans/platinum.png')}}" alt="silver-plan" class="plan-icon">
                                    <h1 class="plan-title">Platinum</h1>
                                </div>
                                <div class="mb-5">
                                    <p class="plan-description">For single location security companies looking to revamp their technology.</p>
                                </div>
                                <div>
                                    <div class="plan-price">
                                        <span>$250</span>
                                        <span>/mo</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1"></div>
                            <div class="col-5">
                                <div>
                                    <h1 class="plan-feature-title">WHAT’S INCLUDED</h1>
                                    <ul class="plan-feature-list">
                                        <li>
                                            <span><i class="fas fa-check"></i></span>
                                            <span>5 Properties</span>
                                        </li>
                                        <li>
                                            <span><i class="fas fa-check"></i></span>
                                            <span>10 Shift</span>
                                        </li>
                                        <li>
                                            <span><i class="fas fa-check"></i></span>
                                            <span>10 Checkpoints</span>
                                        </li>
                                        <li>
                                            <span><i class="fas fa-check"></i></span>
                                            <span>10 Guards</span>
                                        </li>
                                        <li>
                                            <span><i class="fas fa-check"></i></span>
                                            <span>Messenger</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Plan Card (End) --}}

                </div>

                <br>

                <div class="d-flex align-items-center justify-content-between mb-10">
                    <div>
                        <a href="/login" class="link text-decoration-underline h5"><i class="fas fa-arrow-left me-2"></i>Back</a>
                    </div>
                    <div>
                        <a href="/billing-address" class="btn btn-primary">Next Step <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>



            </div>
        </div>
        {{-- Form Div (Start) --}}

        {{-- Illustration Div (Start) --}}
        <div class="col-lg-6 col-md-5 col-12">
            <figure class="d-lg-block d-md-block d-none">
                <img src="{{ asset('assets/images/auth/select-plan.png') }}" alt="register-illustration"
                    class="img-fluid">
            </figure>
        </div>
        {{-- Illustration Div (End) --}}

    </div>


    <div class="row justify-content-center mb-12">
        <div class="col-lg-8 col-md-10 col-sm-12">
            <div class="text-center mb-10">
                <h1 class="plan-table-title mb-8">Pick a plan that works best for you</h1>
                <p class="plan-table-description">Stay cool, we have a 48-hour money back guarantee!</p>
            </div>
            <div class="plan-table-div">
                <table class="table w-full table-striped plan-table m-0">
                    <tbody>
                        <tr>
                            <td class="type-column">
                                <div>
                                    TYPE
                                </div>
                            </td>
                            <td class="info-column">
                                <div>
                                    <span>Silver</span>
                                    <span>$8/Month</span>
                                </div>
                            </td>
                            <td class="info-column">
                                <div>
                                    <span>Silver</span>
                                    <span>$8/Month</span>
                                </div>
                            </td>
                            <td class="info-column">
                                <div>
                                    <span>Silver</span>
                                    <span>$8/Month</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>14-days free trial</td>
                            <td class="info-column"><i class="fas fa-check-circle"></i></td>
                            <td class="info-column"><i class="fas fa-check-circle"></i></td>
                            <td class="info-column"><i class="fas fa-check-circle"></i></td>
                        </tr>
                        <tr>
                            <td>No user limit</td>
                            <td class="info-column"><i class="fas fa-times-circle"></i></td>
                            <td class="info-column"><i class="fas fa-times-circle"></i></td>
                            <td class="info-column"><i class="fas fa-check-circle"></i></td>
                        </tr>
                        <tr>
                            <td>Product Support</td>
                            <td class="info-column"><i class="fas fa-times-circle"></i></td>
                            <td class="info-column"><i class="fas fa-check-circle"></i></td>
                            <td class="info-column"><i class="fas fa-check-circle"></i></td>
                        </tr>
                        <tr>
                            <td>Email Support</td>
                            <td class="info-column"><i class="fas fa-times-circle"></i></td>
                            <td class="info-column">
                                <span class="message">Save up to 10%</span>
                            </td>
                            <td class="info-column"><i class="fas fa-check-circle"></i></td>
                        </tr>
                        <tr>
                            <td>Integrations</td>
                            <td class="info-column"><i class="fas fa-times-circle"></i></td>
                            <td class="info-column"><i class="fas fa-check-circle"></i></td>
                            <td class="info-column"><i class="fas fa-check-circle"></i></td>
                        </tr>
                        <tr>
                            <td>Removal of Front branding</td>
                            <td class="info-column"><i class="fas fa-times-circle"></i></td>
                            <td class="info-column">
                                <span class="message">Save up to 10%</span>
                            </td>
                            <td class="info-column"><i class="fas fa-check-circle"></i></td>
                        </tr>
                        <tr>
                            <td>Active maintenance & support</td>
                            <td class="info-column"><i class="fas fa-times-circle"></i></td>
                            <td class="info-column"><i class="fas fa-times-circle"></i></td>
                            <td class="info-column"><i class="fas fa-check-circle"></i></td>
                        </tr>
                        <tr>
                            <td>Data storage for 365 days</td>
                            <td class="info-column"><i class="fas fa-times-circle"></i></td>
                            <td class="info-column"><i class="fas fa-times-circle"></i></td>
                            <td class="info-column"><i class="fas fa-check-circle"></i></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <br>

    <script defer>

        document.querySelectorAll(".plan-card").forEach((element, index) => {
            element.addEventListener('click',function(event){
                const div = document.querySelectorAll('.plan-card')[index];
                document.querySelectorAll(".plan-card").forEach((element, index) => {
                    element.classList.remove('active');
                });
                console.log(div.classList.add('active'));
            });
        });
        
    </script>
</x-auth-layout>
