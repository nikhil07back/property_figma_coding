<x-default-layout>

    <section class="property-section">

        {{-- Breadcrumbs (Start) --}}
        <div class="py-3 px-7">
            <ul class="breadcrumb">
                <li><a href="/properties/all">All New Properties</a></li>
                <li><i class="fas fa-chevron-right"></i></li>
                <li><a href="/properties/create">Rivi properties</a></li>
                <li><i class="fas fa-chevron-right"></i></li>
                <li class="active"><a href="/properties/create/shift">Property Shifts</a></li>
            </ul>
        </div>
        {{-- Breadcrumbs (End) --}}

        {{-- Section Content (Start) --}}
        <div class="p-7 pt-2">

            <div class="card property-create-card create-shift mb-6">
                <div class="card-body p-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12 mb-4">
                            <!-- Swiper -->
                            <div class="property-image-slider-div position-relative rounded">
                                <button type="button" onclick="$('.swiper-button-next').click()" class="property-navigation">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                                <div class="swiper property-image-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="{{ asset('assets/images/properties/upload-image.png') }}"
                                                alt="property-image" class="img-fluid">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('assets/images/properties/upload-image.png') }}"
                                                alt="property-image" class="img-fluid">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('assets/images/properties/upload-image.png') }}"
                                                alt="property-image" class="img-fluid">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('assets/images/properties/upload-image.png') }}"
                                                alt="property-image" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="swiper-button-next d-none"></div>
                                    <div class="swiper-button-prev d-none"></div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6 col-12">
                            <div class="property-details">
                                <div>
                                    <h5 class="mb-0 d-inline-block">Property Name - </h5>
                                    <p class="description d-inline-block">Rivi Properties</p>
                                </div>
                                <div>
                                    <h5 class="mb-0 d-inline-block">Property Address - </h5>
                                    <p class="description d-inline-block">2118 Thornridge Cir. Syracuse, Connecticut 35624</p>
                                </div>
                                <div>
                                    <h5 class="mb-3 d-block">Property Description</h5>
                                    <p class="description d-block">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima quasi fugit quas molestiae dolorum nisi nihil saepe dicta ab ea rem ducimus, ratione excepturi consequuntur dignissimos possimus modi. Eos, voluptatum! 
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima quasi fugit quas molestiae dolorum nisi nihil saepe dicta ab ea rem ducimus, ratione excepturi consequuntur dignissimos possimus modi. Eos, voluptatum!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card property-create-card mb-6">
                <div class="card-body overscroll-auto">
                    <div class="progress-points-div">
                        <ul class="progress-points">
                            <li class="active">
                                <div><i class="fas fa-circle-check"></i><span>Create Property</span></div>
                            </li>
                            <li class="active">
                                <div><i class="fas fa-circle-check"></i><span>Shift</span></div>
                            </li>
                            <li>
                                <div><i class="fas fa-circle-check"></i><span>Checkpoints</span></div>
                            </li>
                            <li>
                                <div><i class="fas fa-circle-check"></i><span>Routes</span></div>
                            </li>
                            <li>
                                <div><i class="fas fa-circle-check"></i><span>Assign Guards</span></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card property-create-card mb-6">
                <div class="card-body p-5">
                    <div class="row justify-content-between mb-lg-18 mb-5">
                        <div class="col-lg-6 col-12 mb-4">
                            <div class="mb-10">
                                <h5 class="text-dark">Fill out the below details to create a shift for Rivi Propertv.
                                </h5>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <div class="form-group">
                                        <label class="form-label">Shift Name *</label>
                                        <input type="text" placeholder="Enter shift name" class="form-control" required>
                                        <div class="text-end">
                                            <small class="ms-auto text-black-50">0/25 Characters</small>
                                        </div>
                                    </div> 
                                </div>

                                <div class="col-lg-6 col-md-6 col-12 mb-4">
                                    <div class="form-group">
                                        <label class="form-label">Clock-In Time *</label>
                                        <p class="small text-black-50"><i>Enter shift entry time</i></p>
                                        <input type="time" class="form-control" required>
                                    </div> 
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 mb-4">
                                    <div class="form-group">
                                        <label class="form-label">Clock-Out Time *</label>
                                        <p class="small text-black-50"><i>Enter shift exit time</i></p>
                                        <input type="time" class="form-control" required>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 mb-4">
                            <div class="card border mb-3 rounded" style="border-color: #6666 !important;">
                                <div class="card-body p-5">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <img src="{{asset('assets/images/properties/generate-qr.png')}}" alt="qr" class="img-fluid" id="qr-code">
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="h-100 d-flex flex-column align-items-center justify-content-center">
                                                <h5 class="text-dark mb-8">Shift QR Code</h5>
                                                <a href="javascript:void(0);" onclick="handleGenerateQR(event);" class="btn btn-sm btn-primary inverse">Generate QR</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="small text-dark"><i class="fas fa-info-circle me-2"></i>Scan the QR to clockin into the shift</p>
                        </div>
                        
                        <div class="col-12">
                            <div class="form-group w-100">
                                <label class="form-label">Shift Description <span class="text-black-50">(Optional)</span></label>
                                <textarea rows="3" class="form-control mb-3" placeholder="This is a property description area where in person can write basic description of the property for the destails This is a property description area where in person can write basic description of the property for the destails This is a property description area where in person can write basic description of the property for the destails.  write basic description of the property for the destails This is a property"></textarea>
                                <div class="text-end">
                                    <small class="ms-auto text-black-50">0/500 Characters</small>
                                </div>
                            </div> 
                        </div>
                        
                    </div>
                    <div class="text-end">
                    <a href="/properties/all" class="btn btn-primary inverse me-3">Save & Exit</button> </a>
                                            <a href="/properties/create/checkpoints" class="btn btn-primary">Save & Next</a>
                    </div>
                </div>
            </div>


        </div>
        {{-- Section Content (End) --}}

    </section>
    <script>
        const handleGenerateQR = (event) => {
            event.target.innerHTML = "Download QR";
            document.getElementById('qr-code').setAttribute('src',"{{asset('assets/images/properties/shift-qr.png')}}"); 
        }
    </script>
</x-default-layout>
