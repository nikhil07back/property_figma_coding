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
                <li class="active"><a href="/properties/create/checkpoints/morning-shift">Create Checkpoints & Tasks</a></li>
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
                                <button type="button" onclick="$('.swiper-button-next').click()"
                                    class="property-navigation">
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
                                    <p class="description d-inline-block">2118 Thornridge Cir. Syracuse, Connecticut
                                        35624</p>
                                </div>
                                <div>
                                    <h5 class="mb-3 d-block">Property Description</h5>
                                    <p class="description d-block">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima quasi fugit
                                        quas molestiae dolorum nisi nihil saepe dicta ab ea rem ducimus, ratione
                                        excepturi consequuntur dignissimos possimus modi. Eos, voluptatum!
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima quasi fugit
                                        quas molestiae dolorum nisi nihil saepe dicta ab ea rem ducimus, ratione
                                        excepturi consequuntur dignissimos possimus modi. Eos, voluptatum!
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

            <div class="card property-create-card checkpoints-list mb-6">
                <div class="card-body p-5">
                    <div class="mb-6">
                        <h1 class="title"><b>Create checkpoint for Morning Shift</b></h1>
                    </div>
                    <div>
                        <div class="d-flex flex-wrap">
                            <div class="d-inline-block mb-7 me-7">
                                <div class="uploaded-image-card">
                                    <button><i class="far fa-times-circle"></i></button>
                                    <img src="{{ asset('assets/images/properties/upload-image.png') }}" alt="">
                                </div>
                            </div>
                            <div class="d-inline-block mb-7 me-7">
                                <div class="uploaded-image-card">
                                    <button><i class="far fa-times-circle"></i></button>
                                    <img src="{{ asset('assets/images/properties/upload-image.png') }}" alt="">
                                </div>
                            </div>
                            <div class="d-inline-block mb-7 me-7">
                                <div class="image-upload-div">
                                    <input type="file" required>
                                    <div>
                                        <svg width="20" height="14" viewBox="0 0 20 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5 14C3.62121 14 2.44318 13.5406 1.46591 12.6219C0.488636 11.7031 0 10.5802 0 9.25313C0 8.11562 0.356061 7.10208 1.06818 6.2125C1.7803 5.32292 2.71212 4.75417 3.86364 4.50625C4.24242 3.16458 5 2.07812 6.13636 1.24688C7.27273 0.415625 8.56061 0 10 0C11.7727 0 13.2765 0.594271 14.5114 1.78281C15.7462 2.97135 16.3636 4.41875 16.3636 6.125C17.4091 6.24167 18.2765 6.67552 18.9659 7.42656C19.6553 8.1776 20 9.05625 20 10.0625C20 11.1562 19.6023 12.0859 18.8068 12.8516C18.0114 13.6172 17.0455 14 15.9091 14H10.9091C10.4091 14 9.98106 13.8286 9.625 13.4859C9.26894 13.1432 9.09091 12.7312 9.09091 12.25V7.74375L7.63636 9.1L6.36364 7.875L10 4.375L13.6364 7.875L12.3636 9.1L10.9091 7.74375V12.25H15.9091C16.5455 12.25 17.0833 12.0385 17.5227 11.6156C17.9621 11.1927 18.1818 10.675 18.1818 10.0625C18.1818 9.45 17.9621 8.93229 17.5227 8.50938C17.0833 8.08646 16.5455 7.875 15.9091 7.875H14.5455V6.125C14.5455 4.91458 14.1023 3.88281 13.2159 3.02969C12.3295 2.17656 11.2576 1.75 10 1.75C8.74242 1.75 7.67045 2.17656 6.78409 3.02969C5.89773 3.88281 5.45455 4.91458 5.45455 6.125H5C4.12121 6.125 3.37121 6.42396 2.75 7.02188C2.12879 7.61979 1.81818 8.34167 1.81818 9.1875C1.81818 10.0333 2.12879 10.7552 2.75 11.3531C3.37121 11.951 4.12121 12.25 5 12.25H7.27273V14H5Z"
                                                fill="#666666" />
                                        </svg>
                                        <p class="description small">Upload image</p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-inline-block mb-7 me-7">
                                <div class="h-100 w-100 d-flex align-items-center justify-content-center">
                                    <button class="btn btn-primary inverse">Add more</button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="mb-10">
                        <i>
                            <p class="description mb-1 small">Max 10 photos of property can be uploaded</p>
                        </i>
                        <i>
                            <p class="description small">Maximum image size 500kb and should be in JPG or PNG format.
                            </p>
                        </i>
                    </div>
                    <div class="row">

                        <div class="col-lg-6 col-12 mb-5">
                            <div class="form-group">
                                <label class="form-label">Property Name</label>
                                <input type="text" placeholder="" value="Rivi properties " class="form-control mb-1" required disabled>
                            </div> 
                        </div>

                        <div class="col-lg-6 col-12 mb-5">
                            <div class="form-group">
                                <label class="form-label">Checkpoint Name*</label>
                                <input type="text" placeholder="" class="form-control mb-1" required>
                            </div> 
                        </div>

                        <div class="col-lg-6 col-md-6 col-12 mb-4">
                            <div class="form-group">
                                <label class="form-label">Clock-In Time *</label>
                                <p class="small text-black-50"><i>Checkpoint time should be between the shift time: 04:00 PM - 08:00PM</i></p>
                                <input type="time" class="form-control" required>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>

            <div class="card property-create-card mb-6">
                <div class="card-body p-5">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <h5 class="text-dark">Latitude & Longitude*
                                </h5>
                                <p class="description small">(Enter checkpoint latitude and longitude for guards to reach checkpoints)</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 mb-5">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Latitude" required>
                                <div class="text-end mt-2">
                                    <a href="#" class="text-decoration-underline" style="color: #244B8A;" class="ms-auto text-dark">Drop your location from map 
                                        <i class="fas fa-location text-dark fa-2xl"></i>
                                    </a>
                                </div>
                            </div> 
                        </div>
                        <div class="col-lg-6 col-12 mb-5">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Longitude" required>
                            </div> 
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-6 mt-4">
                            <figure class="overflow-hidden rounded">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.1457143858!2d72.71637333457338!3d19.082177512678562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1687857332610!5m2!1sen!2sin" class="w-100" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </figure>
                        </div>
                        <div class="col-lg-1 col-12 mb-4"></div>
                        <div class="col-lg-4 col-12 mb-4">
                            <div class="card border mb-3 rounded" style="border-color: #6666 !important;">
                                <div class="card-body p-5">
                                    <div class="row">
                                        <div class="col-6">
                                            <img src="{{asset('assets/images/properties/generate-qr.png')}}" alt="qr" class="img-fluid" id="qr-code">
                                        </div>
                                        <div class="col-6">
                                            <div class="h-100 d-flex flex-column align-items-center justify-content-center">
                                                <h5 class="text-dark mb-8 text-center">Checkpoint
                                                    QR Code</h5>
                                                <a href="javascript:void(0);" onclick="handleGenerateQR(event)" class="btn btn-sm btn-primary inverse">Generate QR</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="small text-dark"><i class="fas fa-info-circle me-2"></i>Scan the QR to clockin into the shift</p>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="card property-create-card checkpoints-task mb-6">
                <div class="card-body p-5">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 mb-3">
                            <h1 class="title"><b>Tasks for this checkpoint</b></h1>
                            <p class="description small">Min 1  and Max 15 Task can be added in a single checkpoints</p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 text-end mb-3">
                            <a href="javascript:void(0);" onclick="handleAddTask(event)" class="add-task-btn">+ ADD TASK</a>
                        </div>
                    </div>
                    <div>
                        <div class="task-list" id="task-list">
                            
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="card property-create-card mb-6">
                <div class="card-body p-5 text-end">
                <a href="/properties/all" class="btn btn-primary inverse me-3">Save & Exit</button> </a>
                    <a href="/properties/create/routes" class="btn btn-primary">Save & Next</a>
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

        const handleRemoveTask = (event) => {
            event.target.parentNode.parentNode.parentNode.parentNode.querySelector('.task-input-row').remove();
        }

        const handleAddTask = (event) => {

            const inputLength = document.querySelectorAll('.task-input-row').length;

            let html = `
                                <div class="col-lg-6">
                                    <div>
                                        <label class="mb-lg-0 mb-2">Task ${inputLength + 1}</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="text-end">
                                        <button class="delete-button py-2 border-0 bg-white" onclick="handleRemoveTask(event)">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            `;

            const parentRow = document.createElement('div');
            parentRow.className = "task task-input-row row align-items-center justify-content-between border-bottom py-3";
            parentRow.innerHTML = html;
            
            document.getElementById('task-list').appendChild(parentRow);

        }
        handleCreateContactInput() 
    </script>
</x-default-layout>
