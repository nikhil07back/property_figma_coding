<x-default-layout>
    
    <section class="property-section">

        {{-- Breadcrumbs (Start) --}}
        <div class="py-3 px-7">
            <ul class="breadcrumb">
                <li><a href="/shift/all">Shifts</a></li>
                <li><i class="fas fa-chevron-right"></i></li>
                <li class="active"><a href="/shift/edit">Edit Shift</a></li>
            </ul>
        </div>
        {{-- Breadcrumbs (End) --}}
    
        {{-- Top Header (Start) --}}
        <div class="guard-header card rounded-0">
            <div class="card-body p-5 pb-3">
                <div class="row">
                    <div class="col-lg-10 col-12">
                        <h1 class="title mb-7">Rivi Properties - Hallway Shift 4</h1>
                        <div class="row mt-5">

                            <div class="col-lg-3 col-md-4 col-12 mb-3">
                                <figure class="info-card card">
                                    <div class="card-body p-4">
                                        <div>
                                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.15 11.5488V1.88281C7.4 2.55781 2 8.34931 2 15.3828C2 22.4163 7.4 28.2078 14.15 28.8828V19.2168C12.8 18.6633 11.45 17.1648 11.45 15.3828C11.45 13.6008 12.8 12.1023 14.15 11.5488ZM19.361 14.0328H29C28.352 7.62031 23.6 2.51731 16.85 1.88281V11.5488C18.2 11.9538 18.902 12.8718 19.361 14.0328ZM16.85 19.2168V28.8828C23.6 28.2483 28.352 23.1453 29 16.7328H19.361C18.902 17.8938 18.2 18.8118 16.85 19.2168Z" fill="#244B8A"/>
                                                </svg>                                                
                                            <label>Total <br>
                                                Checkpoints</label>
                                        </div>
                                        <div>
                                            <h2 class="count">56</h2>
                                        </div>
                                    </div>
                                </figure>
                            </div>

                            <div class="col-lg-3 col-md-4 col-12 mb-3">
                                <figure class="info-card card">
                                    <div class="card-body p-4">
                                        <div>
                                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8375 16.4124C22.55 17.5749 23.75 19.1499 23.75 21.2499V24.9999H28.75V21.2499C28.75 18.5249 24.2875 16.9124 20.8375 16.4124Z" fill="#244B8A"/>
                                                <path d="M11.25 15C14.0114 15 16.25 12.7614 16.25 10C16.25 7.23858 14.0114 5 11.25 5C8.48858 5 6.25 7.23858 6.25 10C6.25 12.7614 8.48858 15 11.25 15Z" fill="#244B8A"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.75 15C21.5125 15 23.75 12.7625 23.75 10C23.75 7.2375 21.5125 5 18.75 5C18.1625 5 17.6125 5.125 17.0875 5.3C18.125 6.5875 18.75 8.225 18.75 10C18.75 11.775 18.125 13.4125 17.0875 14.7C17.6125 14.875 18.1625 15 18.75 15Z" fill="#244B8A"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.25 16.25C7.9125 16.25 1.25 17.925 1.25 21.25V25H21.25V21.25C21.25 17.925 14.5875 16.25 11.25 16.25Z" fill="#244B8A"/>
                                                </svg>                                                
                                            <label>Assign
                                                Guards</label>
                                        </div>
                                        <div>
                                            <h2 class="count">2345</h2>
                                        </div>
                                    </div>
                                </figure>
                            </div>

                            <div class="col-lg-3 col-md-4 col-12 mb-3">
                                <figure class="info-card card">
                                    <div class="card-body p-4">
                                        <div>
                                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M27.5 13.75V3.75H18.75V7.5H11.25V3.75H2.5V13.75H11.25V10H13.75V22.5H18.75V26.25H27.5V16.25H18.75V20H16.25V10H18.75V13.75H27.5Z" fill="#244B8A"/>
                                                </svg>
                                                
                                            <label>Missed <br>
                                                Shifts</label>
                                        </div>
                                        <div>
                                            <h2 class="count">6751</h2>
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

            <div class="card property-create-card mb-6">
                <div class="card-body overscroll-auto">
                    <div class="progress-points-div">
                        <ul class="progress-points">
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
                    <div class="row justify-content-between mb-2">
                        <div class="col-lg-6 col-12">
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
                                        <p class="small text-black-50"></p>
                                        <input type="text" class="form-control" value="08:00 AM" required>
                                    </div> 
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 mb-4">
                                    <div class="form-group">
                                        <label class="form-label">Clock-Out Time *</label>
                                        <p class="small text-black-50"></p>
                                        <input type="text" class="form-control" value="12:00 PM" required>
                                    </div> 
                                </div>
                            </div>
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

                        <div class="col-lg-4 col-1">
                            <div class="card border rounded" style="border-color: #6666 !important;">
                                <div class="card-body p-5">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <img src="{{asset('assets/images/properties/shift-qr.png')}}" alt="qr" class="img-fluid">
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="h-100 d-flex flex-column align-items-center justify-content-center">
                                                <h5 class="text-dark mb-8">Shift QR Code</h5>
                                                <a href="#" class="btn btn-sm btn-primary inverse">Download</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                        
                    </div>
                </div>
            </div>
            
            <div class="card section-card">
                <div class="card-body p-5 text-end">
                <button onclick="$('#next-button').html('Save')" class="btn btn-primary inverse me-3">Edit</button>
                <a href="/shift/checkpoint"><button class="btn btn-primary" id="next-button">Next</button> </a>
                </div>

            </div>

        </div>
        {{-- Section Content (End) --}}
    
    </section>
    </x-default-layout>