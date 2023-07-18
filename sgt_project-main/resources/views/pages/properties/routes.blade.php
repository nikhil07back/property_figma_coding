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
                <li class="active"><a href="/properties/create/routes">Routes</a></li>
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

            <div class="card property-create-card create-route mb-6">
                <div class="card-body p-5">
                    <div class="row mb-10">
                        <div class="col-lg-6 col-md-6 col-12 mb-2">
                            <button class="d-inline-block btn btn-primary me-lg-2">Route 1</button>
                            <button class="d-inline-block btn btn-primary inverse">+ Add New route</button>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 text-lg-end">
                           <a href="/properties/create"><button class="d-inline-block btn btn-primary inverse text-uppercase"><svg width="19" class="me-2" height="19" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.57062 14.419L9.96612 13.9942L13.182 17.0205L13.6578 16.7872L12.9312 5.31907L5.33724 13.9433L5.57062 14.419ZM7.76047 20.4474C6.45251 20.0003 5.30816 19.332 4.32745 18.4424C3.34673 17.5528 2.57631 16.5371 2.0162 15.3953C1.45609 14.2535 1.12443 13.0225 1.02122 11.7025C0.918017 10.3825 1.08994 9.06844 1.53699 7.76047C1.98405 6.45251 2.65237 5.30816 3.54196 4.32745C4.43155 3.34673 5.44725 2.57631 6.58908 2.0162C7.7309 1.45609 8.96183 1.12443 10.2819 1.02122C11.6019 0.918017 12.9159 1.08994 14.2239 1.53699C15.5319 1.98405 16.6762 2.65237 17.6569 3.54196C18.6376 4.43155 19.4081 5.44725 19.9682 6.58908C20.5283 7.7309 20.8599 8.96183 20.9632 10.2819C21.0664 11.6019 20.8944 12.9159 20.4474 14.2239C20.0003 15.5319 19.332 16.6762 18.4424 17.6569C17.5528 18.6376 16.5371 19.4081 15.3953 19.9682C14.2535 20.5283 13.0225 20.8599 11.7025 20.9632C10.3825 21.0664 9.06844 20.8944 7.76047 20.4474ZM8.40682 18.5563C10.5185 19.2781 12.5575 19.1566 14.524 18.192C16.4905 17.2274 17.8346 15.6892 18.5563 13.5776C19.2781 11.4659 19.1566 9.42683 18.192 7.46036C17.2274 5.49389 15.6892 4.14978 13.5776 3.42803C11.4659 2.70628 9.42683 2.82773 7.46036 3.79237C5.49389 4.75701 4.14978 6.29516 3.42803 8.40682C2.70628 10.5185 2.82773 12.5575 3.79237 14.524C4.75701 16.4905 6.29516 17.8346 8.40682 18.5563Z" fill="#244B8A"/>
                                </svg>
                                Route Map View</button>
                        </div>
                    </div>
                    <div class="mb-5">
                        <h1 class="title">Routes</h1>
                    </div>
                    <div class="row mb-10">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Route Number *</label>
                                <input type="text" placeholder="Route Number" class="form-control mb-1" required>
                            </div> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-5">
                                <h1 class="title">Routes</h1>
                                <p class="text-black-50">Minimum 2 checkpoints need to be selected to create a route. <a href="javascript:void(0);" onclick="handleAddRoute(event)" class="link">+ Add more Checkpoint</a></p>
                            </div>
                            <div class="card rounded route-checkpoint-card">
                                <div class="card-body px-5">
                                    
                                    <ul class="route-checkpoint-list">
                                        <li>
                                            <div class="d-flex flex-column">
                                                <img src="{{asset('assets/icons/route-checkpoint.svg')}}" alt="" class="checkpoint-icon">    
                                                <label>Start</label>
                                            </div>
                                            <div class="w-100">
                                                <select class="form-select">
                                                    <option value="Checkpoint">Checkpoint</option>
                                                </select>
                                            </div>
                                            <div>

                                            </div>
                                        </li>

                                        <div id="route-checkpoint-list">

                                        </div>
                                        
                                        <li class="last-child mt-12">
                                            <div class="d-flex flex-column">
                                                <img src="{{asset('assets/icons/route-checkpoint.svg')}}" alt="" class="checkpoint-icon">    
                                                <label>End</label>
                                            </div>
                                            <div class="w-100">
                                                <select class="form-select">
                                                    <option value="Checkpoint">Checkpoint</option>
                                                </select>
                                            </div>
                                            <div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card property-create-card mb-6">
                <div class="card-body p-5 text-end">
                  <a href="/properties/all"  class="btn btn-primary inverse me-3">Save & Exit</a>  
                    <a href="/properties/create/assign-guards" class="btn btn-primary">Save & Next</a>
                </div>
            </div>
            


        </div>
        {{-- Section Content (End) --}}

    </section>
    <script>
        const handleRemoveRoute = (event) => {
            event.target.parentNode.parentNode.parentNode.querySelector('.route-input-row').remove();
        }

        const handleAddRoute = (event) => {

            let html = `
                    <div class="d-flex flex-column">
                        <img src="{{asset('assets/icons/route-checkpoint-bars.svg')}}" alt="" class="checkpoint-icon-bars">
                    </div>
                    <div class="w-100">
                        <select class="form-select">
                            <option value="Checkpoint">Checkpoint</option>
                        </select>
                    </div>
                    <div>
                        <button onclick="handleRemoveRoute(event)"><i onclick="handleRemoveRoute(event)" class="fas fa-trash"></i></button>
                    </div>`;

            const parentRow = document.createElement('li');
            parentRow.className = "route-input-row";
            parentRow.innerHTML = html;
            
            document.getElementById('route-checkpoint-list').appendChild(parentRow);

        }
        handleAddRoute() 
    </script>
</x-default-layout>
