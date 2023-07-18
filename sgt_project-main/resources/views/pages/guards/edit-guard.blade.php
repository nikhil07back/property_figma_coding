<x-default-layout>

    <section class="property-section">
    
        {{-- Top Header (Start) --}}
        <div class="guard-header card mt-lg-7 rounded-0">
            <div class="card-body p-5 pb-3">
                <div class="row">
                    <div class="col-lg-10 col-12">
                        <h1 class="title">Add Guard</h1>
                        <p class="description mb-2">Guard ID : 55465416541</p>
                        <div class="row mt-5">

                            <div class="col-lg-3 col-md-4 col-6 mb-3">
                                <figure class="info-card card">
                                    <div class="card-body p-4">
                                        <div>
                                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15 2.5L5 6.25V13.8625C5 20.175 9.2625 26.0625 15 27.5C20.7375 26.0625 25 20.175 25 13.8625V6.25L15 2.5ZM13.675 19.425L9.25 15L11.0125 13.2375L13.6625 15.8875L18.9625 10.5875L20.725 12.35L13.675 19.425Z" fill="#244B8A"/>
                                                </svg>                                                
                                            <label>Completed <br>
                                                Jobs</label>
                                        </div>
                                        <div>
                                            <h2 class="count">56</h2>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                            
                            <div class="col-lg-3 col-md-4 col-6 mb-3">
                                <figure class="info-card card">
                                    <div class="card-body p-4">
                                        <div>
                                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15 2.5L5 6.25V13.8625C5 20.175 9.2625 26.0625 15 27.5C20.7375 26.0625 25 20.175 25 13.8625V6.25L15 2.5ZM19.375 17.6125L17.6125 19.375L15 16.775L12.3875 19.375L10.625 17.6125L13.2375 15L10.625 12.3875L12.3875 10.625L15 13.2375L17.6125 10.625L19.375 12.3875L16.775 15L19.375 17.6125Z" fill="#244B8A"/>
                                                </svg>                                                
                                            <label>Missed <br>
                                                Shifts</label>
                                        </div>
                                        <div>
                                            <h2 class="count">541</h2>
                                        </div>
                                    </div>
                                </figure>
                            </div>

                            <div class="col-lg-3 col-md-4 col-6 mb-3">
                                <figure class="info-card card">
                                    <div class="card-body p-4">
                                        <div>
                                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.25 22.5H23.75V25H6.25V22.5ZM12 19.125L6.25 13.375L8.75 11L12 14.25L21.25 5L23.75 7.5L12 19.125Z" fill="#244B8A"/>
                                                </svg>                                                
                                            <label>Total <br>
                                                Leave</label>
                                        </div>
                                        <div>
                                            <h2 class="count">2345</h2>
                                        </div>
                                    </div>
                                </figure>
                            </div>

                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        {{-- Top Header (End) --}}
    
        {{-- Section Content (Start) --}}
        <div class="p-7">

            <div class="card section-card add-guard-card mb-6">
                <div class="card-body p-7">
                    <div class="mb-10">
                        <img src="{{asset('assets/images/guards/guard-profile.png')}}" alt="guard-profile" class="guard-profile">
                        <a href="javascript:void(0);" onclick="$('#upload-profile-input').click()" class="link text-decoration-underline" onclick="">Upload Image</a>
                        <input type="file" id="upload-profile-input" hidden>
                    </div>
                    <div class="row ">
                        <div class="col-12 mb-5">
                            <h1 class="guard-form-title">Personal Info</h1>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 mb-5">
                            <div class="form-group">
                                <label class="form-label">Name</label>
                                <input type="text" value="John Daily" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 mb-5">
                            <div class="form-group">
                                <label class="form-label">Guard Position</label>
                                <input type="text" value="Supervisor" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 mb-5">
                            <div class="form-group">
                                <label class="form-label">Gender</label>
                                <input type="text" value="Male" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 mb-5">
                            <div class="form-group">
                                <label class="form-label">Date Of Birth</label>
                                <input type="date" value="John Daily" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 mb-5">
                            <div class="form-group">
                                <label class="form-label">Contact Number</label>
                                <input type="text" value="+91 9345746464" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card section-card add-guard-card mb-6">
                <div class="card-body p-7">
                    <div class="row ">
                        <div class="col-12 mb-5">
                            <h1 class="guard-form-title">Address</h1>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 mb-5">
                            <div class="form-group">
                                <label class="form-label">Street</label>
                                <input type="text" value="Ashiana" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 mb-5">
                            <div class="form-group">
                                <label class="form-label">City</label>
                                <input type="text" value="Lucknow" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 mb-5">
                            <div class="form-group">
                                <label class="form-label">State</label>
                                <input type="text" value="Uttar Pradesh" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 mb-5">
                            <div class="form-group">
                                <label class="form-label">Country</label>
                                <input type="text" value="India" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 mb-5">
                            <div class="form-group">
                                <label class="form-label">Zip Code</label>
                                <input type="text" value="226010" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card section-card add-guard-card">
                <div class="card-body p-7">
                    <div class="row ">
                        <div class="col-12 mb-5">
                            <h1 class="guard-form-title">Credentials</h1>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 mb-5">
                            <div class="form-group">
                                <label class="form-label">Email Address</label>
                                <input type="text" value="karamveer@gmail.com" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 mb-5">
                            <div class="form-group">
                                <label class="form-label">Password</label>
                                <input type="password" value="232323" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 text-lg-end">
                            <a href="#" class="link text-decoration-underline d-block my-5">Send Application</a>
                            <a href="#" class="link text-decoration-underline d-block">Change Password</a>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-12 mb-5 mt-7">
                            <h1 class="guard-form-title">Guard Identity Card</h1>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 mb-5">
                            <div class="d-flex flex-lg-row flex-col align-items-center">
                                <div>
                                    <img src="{{asset('assets/images/guards/guard-card.png')}}" alt="guard-card" class="img-fluid">
                                </div>
                                <a href="javascript:void(0);" onclick="$('#upload-id-card-input').click()" class="link text-decoration-underline ms-lg-3" style="white-space: nowrap;">Update ID Card</a>
                                <input type="file" id="upload-id-card-input" hidden>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
    
        </div>
        {{-- Section Content (End) --}}
    
    </section>
    </x-default-layout>
    