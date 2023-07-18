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
                            <li class="active">
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

            <div class="card property-create-card no-checkpoints mb-6">
                <div class="card-body p-5 py-20 d-flex flex-column align-items-center justify-content-center text-center">
                    <h1 class="mb-5"><b>No Checkpoints created for the morning shift</b></h1>
                    <a href="/properties/create/checkpoints/morning-shift">+ CREATE CHECKPOINTS</a>
                </div>
            </div>

            <div class="card property-create-card checkpoints-list mb-6">
                <div class="card-body p-5">
                    <div class="d-flex flex-lg-row flex-column justify-content-between">
                        <div class="mb-lg-5">
                            <h1 class="text-dark mb-3 title">Checkpoints of First Shift</h1>
                            <p class="mb-2 shift-time">Shift Time : <span>10:00 AM - 02:00 PM</span></p>
                            <p class="text-black-50">Below are the checkpoints created under the morning shift for the Rivi Property </p>
                        </div>
                        <div class="mb-4">
                            <a href="/properties/create/checkpoints/morning-shift" class="btn btn-primary">Add more checkpoint</a>
                        </div>
                    </div>
                    <div class="row mb-5">

                        <div class="col-lg-3 col-md-6 col-sm-12 pb-5">
                            <div class="card border checkpoint-card">
                                <button class="options">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <div class="checkpoint-image">
                                    <div class="checkpoint-image-overlay"></div>
                                    <img src="{{ asset('assets/images/properties/upload-image.png') }}" alt="img" class="img-fluid">
                                </div>
                                <div class="card-body p-4">
                                    <h1 class="checkpoint-title">Building Hallway</h1>
                                    <p class="checkpoint-description">Created By : Adam Staff</p>
                                    <p class="checkpoint-option">No. Of Tasks : <span>12</span></p>
                                    <p class="checkpoint-option">Check-In Time : <span>10:00 AM</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12 pb-5">
                            <div class="card border checkpoint-card">
                                <button class="options">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <div class="checkpoint-image">
                                    <div class="checkpoint-image-overlay"></div>
                                    <img src="{{ asset('assets/images/properties/upload-image.png') }}" alt="img" class="img-fluid">
                                </div>
                                <div class="card-body p-4">
                                    <h1 class="checkpoint-title">Building Hallway</h1>
                                    <p class="checkpoint-description">Created By : Adam Staff</p>
                                    <p class="checkpoint-option">No. Of Tasks : <span>12</span></p>
                                    <p class="checkpoint-option">Check-In Time : <span>10:00 AM</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12 pb-5">
                            <div class="card border checkpoint-card">
                                <button class="options">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <div class="checkpoint-image">
                                    <div class="checkpoint-image-overlay"></div>
                                    <img src="{{ asset('assets/images/properties/upload-image.png') }}" alt="img" class="img-fluid">
                                </div>
                                <div class="card-body p-4">
                                    <h1 class="checkpoint-title">Building Hallway</h1>
                                    <p class="checkpoint-description">Created By : Adam Staff</p>
                                    <p class="checkpoint-option">No. Of Tasks : <span>12</span></p>
                                    <p class="checkpoint-option">Check-In Time : <span>10:00 AM</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-5">
                            <div class="card border checkpoint-card">
                                <button class="options">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <div class="checkpoint-image">
                                    <div class="checkpoint-image-overlay"></div>
                                    <img src="{{ asset('assets/images/properties/upload-image.png') }}" alt="img" class="img-fluid">
                                </div>
                                <div class="card-body p-4">
                                    <h1 class="checkpoint-title">Building Hallway</h1>
                                    <p class="checkpoint-description">Created By : Adam Staff</p>
                                    <p class="checkpoint-option">No. Of Tasks : <span>12</span></p>
                                    <p class="checkpoint-option">Check-In Time : <span>10:00 AM</span></p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="text-end">
                    <a href="/properties/all" class="btn btn-primary inverse me-3">Save & Exit</button> </a>
                <a href="#" class="btn btn-primary">Save & Next</a>
                    </div>
                </div>
            </div>


        </div>
        {{-- Section Content (End) --}}

    </section>
</x-default-layout>
