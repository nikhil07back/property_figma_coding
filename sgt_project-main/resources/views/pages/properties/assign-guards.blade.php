<x-default-layout>

    <section class="property-section">

        {{-- Breadcrumbs (Start) --}}
        <div class="py-3 px-7">
            <ul class="breadcrumb">
                <li><a href="/properties/all">All New Properties</a></li>
                <li><i class="fas fa-chevron-right"></i></li>
                <li><a href="/properties/create">Create new property</a></li>
                <li><i class="fas fa-chevron-right"></i></li>
                <li><a href="/properties/create/shift">Create shifts</a></li>
                <li><i class="fas fa-chevron-right"></i></li>
                <li><a href="/properties/create/checkpoints/morning-shift">Create Checkpoints & Tasks</a></li>
                <li><i class="fas fa-chevron-right"></i></li>
                <li><a href="/properties/create/routes">Routes</a></li>
                <li><i class="fas fa-chevron-right"></i></li>
                <li class="active"><a href="/properties/create/assign-guards">Assign Guards</a></li>
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
                            <li class="active">
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
                    <div class="row mb-10">
                        <div class="col-lg-6 col-md-6 col-12 mb-3">
                            <h1 class="title">Assign Guards</h1>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 text-lg-end">
                            <a href="#" class="btn btn-primary inverse">+ Add New Guard</a>
                        </div>
                    </div>
                    <div class="route-tabs mb-10">
                        <a href="#" class="btn route-tab d-inline-block active">Route 1</a>
                        <a href="#" class="btn route-tab d-inline-block">Route 2</a>
                        <a href="#" class="btn route-tab d-inline-block">Route 3</a>
                        <a href="#" class="btn route-tab d-inline-block">Route 4</a>
                    </div> 
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group mb-8">
                                <label class="form-label">Selected Dates *</label>
                                <div class="d-flex align-items-center justify-content-center">

                                    <input id="tagify-date-input" class="tagify-input form-control" value="04-05-23, 13-05-23" placeholder="Select dates">
                                    <input onchange="handleAddDate(event)" type="date" class="form-control ms-2" style="width: 45px">
                                </div>
                            </div> 
                            <div class="form-group">
                                <label class="form-label">Assign guards for the route*</label>
                                <input id="tagify-guard-input" class="tagify-input form-control" value="Guard Sahil, Guard Sashi" placeholder="Choose from guard list" required>
                                <div >
                                    <table class="assign-guards-table table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>S. No.</th>
                                                <th>Guard Name</th>
                                                <th>Last Shift</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @for ($i = 1; $i <= 5; $i++)
                                            <tr>
                                                <td>#00{{$i}}</td>
                                                <td onclick="handleAddGuard(event)">Guard Sashi {{$i}}</td>
                                                <td>10:00 AM - 02:00 PM<input type="checkbox" class="ms-2"></td>
                                            </tr>   
                                            @endfor
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="card property-create-card mb-6">
                <div class="card-body p-5 text-end">
                <a href="/properties/all" class="btn btn-primary inverse me-3">Save & Exit</button> </a>
                    <a href="/properties/all" class="btn btn-primary">Finish</a>
                </div>
            </div>
            


        </div>
        {{-- Section Content (End) --}}

    </section>
    <script>
        const handleAddDate = (event) => {
            const inputValue = document.getElementById('tagify-date-input').value;
            const object = JSON.parse(inputValue);
            object.push({
                'value': event.target.value
            })
            document.getElementById('tagify-date-input').value = JSON.stringify(object);
        }
        const handleAddGuard = (event) => {
            const inputValue = document.getElementById('tagify-guard-input').value;
            const object = JSON.parse(inputValue);
            object.push({
                'value': event.target.innerHTML
            })
            document.getElementById('tagify-guard-input').value = JSON.stringify(object);
        }
    </script>
</x-default-layout>
