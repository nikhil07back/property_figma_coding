<x-default-layout>

    <div class="modal fade" id="delete-report-modal" tabindex="-1" aria-labelledby="delete-report-modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
              <p>All the Data Will be lost. Do you want to <br> delete this report?</p>
            </div>
            <div class="modal-footer justify-content-center">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary ms-3">Continue</button>
            </div>
          </div>
        </div>
      </div>

    {{-- General Report Modal --}}
    <div class="modal fade" id="general-report-modal" tabindex="-1" aria-labelledby="general-report-modal" aria-hidden="true">
         <div class="modal-dialog rounded">
        <div class="modal-content">
            <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">
                <svg class="me-2" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.8 11.592V3C7.8 3.6 3 8.748 3 15C3 21.252 7.8 26.4 13.8 27V18.408C12.6 17.916 11.4 16.584 11.4 15C11.4 13.416 12.6 12.084 13.8 11.592ZM18.432 13.8H27C26.424 8.1 22.2 3.564 16.2 3V11.592C17.4 11.952 18.024 12.768 18.432 13.8ZM16.2 18.408V27C22.2 26.436 26.424 21.9 27 16.2H18.432C18.024 17.232 17.4 18.048 16.2 18.408Z" fill="#244B8A"/>
                     </svg>
                General Report</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
            <div class="modal-body">
                <div class="form-group mb-5">
                     <label class="form-label">Guard Name</label>
                    <input type="text" class="form-control" value="Manik Shah" required>
                </div>
                 <div class="form-group mb-5">
                    <label class="form-label">Shift Assigned Name</label>
                    <input type="text" class="form-control" value="Morning Shift" required>
                 </div>
                <div class="form-group mb-5">
                    <label class="form-label">Property Name</label>
                     <input type="text" class="form-control" value="Rivi Properties" required>
                </div>
                <div class="form-group mb-5">
                     <label class="form-label">Title</label>
                    <input type="text" class="form-control" value="ABCDEFGH........" required>
                </div>
                 <div class="form-group mb-5">
                    <label class="form-label">Notes</label>
                    <textarea rows="3" class="form-control">Korem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</textarea>
                 </div>
                <div class="form-group mb-5">
                    <label class="form-label">Image Samples</label>
                     <div class="row">
                        <div class="col-lg-3 col-6">
                            <img src="{{asset('assets/images/reports/image-sample-1.png')}}" alt="image-sample" class="img-fluid rounded">
                         </div>
                        <div class="col-lg-3 col-6">
                            <img src="{{asset('assets/images/reports/image-sample-2.png')}}" alt="image-sample" class="img-fluid rounded">
                         </div>
                        <div class="col-lg-3 col-6">
                            <img src="{{asset('assets/images/reports/image-sample-3.png')}}" alt="image-sample" class="img-fluid rounded">
                         </div>
                        <div class="col-lg-3 col-6">
                            <img src="{{asset('assets/images/reports/image-sample-4.png')}}" alt="image-sample" class="img-fluid rounded">
                         </div>
                    </div>
                </div>
             </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary inverse" data-bs-dismiss="modal">Cancel</button>
                 <button ty
    e
="button" class="btn btn-primary">Save</button>
            </div>
        </div>
        </div>
    </div>

    {{-- Maintenance Report Modal --}}
    <div class="modal fade" id="maintenance-report-modal" tabindex="-1" aria-labelledby="maintenance-report-modal" aria-hidden="true">
        <div class="modal-dialog rounded">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
                <svg class="me-2" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.8 11.592V3C7.8 3.6 3 8.748 3 15C3 21.252 7.8 26.4 13.8 27V18.408C12.6 17.916 11.4 16.584 11.4 15C11.4 13.416 12.6 12.084 13.8 11.592ZM18.432 13.8H27C26.424 8.1 22.2 3.564 16.2 3V11.592C17.4 11.952 18.024 12.768 18.432 13.8ZM16.2 18.408V27C22.2 26.436 26.424 21.9 27 16.2H18.432C18.024 17.232 17.4 18.048 16.2 18.408Z" fill="#244B8A"/>
                    </svg>
                    Maintenance Report</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group mb-5">
                    <label class="form-label">Guard Name</label>
                    <input type="text" class="form-control" value="Manik Shah" required>
                </div>
                <div class="form-group mb-5">
                    <label class="form-label">Shift Assigned Name</label>
                    <input type="text" class="form-control" value="Morning Shift" required>
                </div>
                <div class="form-group mb-5">
                    <label class="form-label">Property Name</label>
                    <input type="text" class="form-control" value="Rivi Properties" required>
                </div>
                <div class="form-group mb-5">
                    <label class="form-label">Title</label>
                    <input type="text" class="form-control" value="ABCDEFGH........" required>
                </div>
                <div class="form-group mb-5">
                    <label class="form-label">Notes</label>
                    <textarea rows="3" class="form-control">Korem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</textarea>
                </div>
                <div class="form-group mb-5">
                    <label class="form-label">Image Samples</label>
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <img src="{{asset('assets/images/reports/image-sample-1.png')}}" alt="image-sample" class="img-fluid rounded">
                        </div>
                        <div class="col-lg-3 col-6">
                            <img src="{{asset('assets/images/reports/image-sample-2.png')}}" alt="image-sample" class="img-fluid rounded">
                        </div>
                        <div class="col-lg-3 col-6">
                            <img src="{{asset('assets/images/reports/image-sample-3.png')}}" alt="image-sample" class="img-fluid rounded">
                        </div>
                        <div class="col-lg-3 col-6">
                            <img src="{{asset('assets/images/reports/image-sample-4.png')}}" alt="image-sample" class="img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary inverse" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
        </div>
    </div>

    {{-- Parking Report Modal --}}
    <div class="modal fade" id="parking-report-modal" tabindex="-1" aria-labelledby="parking-report-modal" aria-hidden="true">
        <div class="modal-dialog rounded modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
                <svg class="me-2" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.8 11.592V3C7.8 3.6 3 8.748 3 15C3 21.252 7.8 26.4 13.8 27V18.408C12.6 17.916 11.4 16.584 11.4 15C11.4 13.416 12.6 12.084 13.8 11.592ZM18.432 13.8H27C26.424 8.1 22.2 3.564 16.2 3V11.592C17.4 11.952 18.024 12.768 18.432 13.8ZM16.2 18.408V27C22.2 26.436 26.424 21.9 27 16.2H18.432C18.024 17.232 17.4 18.048 16.2 18.408Z" fill="#244B8A"/>
                    </svg>
                    Parking Report</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="form-group mb-5">
                            <label class="form-label">Guard Name</label>
                            <input type="text" class="form-control" value="Manik Shah" required>
                        </div>
                        <div class="form-group mb-5">
                            <label class="form-label">Shift Assigned Name</label>
                            <input type="text" class="form-control" value="Morning Shift" required>
                        </div>
                        <div class="form-group mb-5">
                            <label class="form-label">Property Name</label>
                            <input type="text" class="form-control" value="Rivi Properties" required>
                        </div>
                        <div class="form-group mb-5">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" value="ABCDEFGH........" required>
                        </div>
                        <div class="form-group mb-5">
                            <label class="form-label">Notes</label>
                            <textarea rows="3" class="form-control">Korem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</textarea>
                        </div>
                        <div class="form-group mb-5">
                            <label class="form-label">Image Samples</label>
                            <div class="row">
                                <div class="col-lg-3 col-6">
                                    <img src="{{asset('assets/images/reports/image-sample-1.png')}}" alt="image-sample" class="img-fluid rounded">
                                </div>
                                <div class="col-lg-3 col-6">
                                    <img src="{{asset('assets/images/reports/image-sample-2.png')}}" alt="image-sample" class="img-fluid rounded">
                                </div>
                                <div class="col-lg-3 col-6">
                                    <img src="{{asset('assets/images/reports/image-sample-3.png')}}" alt="image-sample" class="img-fluid rounded">
                                </div>
                                <div class="col-lg-3 col-6">
                                    <img src="{{asset('assets/images/reports/image-sample-4.png')}}" alt="image-sample" class="img-fluid rounded">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="form-group mb-5">
                            <label class="form-label">Vechile Name</label>
                            <input type="text" class="form-control" value="Mahindra Thar" required>
                        </div>
                        <div class="form-group mb-5">
                            <label class="form-label">Model</label>
                            <input type="text" class="form-control" value="4568AS3450971" required>
                        </div>
                        <div class="form-group mb-5">
                            <label class="form-label">Color</label>
                            <input type="text" class="form-control" value="White" required>
                        </div>
                        <div class="form-group mb-5">
                            <label class="form-label">License Number</label>
                            <input type="text" class="form-control" value="6TT6Y54GHAAWQE" required>
                        </div>
                        <div class="form-group mb-5">
                            <label class="form-label">State</label>
                            <input type="text" class="form-control" value="ASDGFG" required>
                        </div>
                        <div class="form-group mb-5">
                            <label class="form-label">Towed</label>
                            <input type="text" class="form-control" value="No" required>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary inverse" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
        </div>
    </div>

    {{-- Emergency Report Modal --}}
    <div class="modal fade" id="emergency-report-modal" tabindex="-1" aria-labelledby="emergency-report-modal" aria-hidden="true">
        <div class="modal-dialog rounded modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
                <svg class="me-2" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.8 11.592V3C7.8 3.6 3 8.748 3 15C3 21.252 7.8 26.4 13.8 27V18.408C12.6 17.916 11.4 16.584 11.4 15C11.4 13.416 12.6 12.084 13.8 11.592ZM18.432 13.8H27C26.424 8.1 22.2 3.564 16.2 3V11.592C17.4 11.952 18.024 12.768 18.432 13.8ZM16.2 18.408V27C22.2 26.436 26.424 21.9 27 16.2H18.432C18.024 17.232 17.4 18.048 16.2 18.408Z" fill="#244B8A"/>
                    </svg>
                    Emergency Report</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="form-group mb-5">
                            <label class="form-label">Guard Name</label>
                            <input type="text" class="form-control" value="Manik Shah" required>
                        </div>
                        <div class="form-group mb-5">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" value="ABCDEFGH........" required>
                        </div>
                        <div class="form-group mb-5">
                            <label class="form-label">Emergency Date & Time</label>
                            <input type="datetime-local" class="form-control w-50" required>
                        </div>
                        <div class="form-group mb-5">
                            <label class="h5">
                                <svg class="me-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.25" y="0.25" width="19.5" height="19.5" rx="9.75" fill="white"/>
                                <path d="M3 10C3 9.72386 3.22386 9.5 3.5 9.5H5C5.27614 9.5 5.5 9.72386 5.5 10C5.5 10.2761 5.27614 10.5 5 10.5H3.5C3.22386 10.5 3 10.2761 3 10Z" fill="#244A8D"/>
                                <path d="M14.5 10C14.5 9.72386 14.7239 9.5 15 9.5H16.5C16.7761 9.5 17 9.72386 17 10C17 10.2761 16.7761 10.5 16.5 10.5H15C14.7239 10.5 14.5 10.2761 14.5 10Z" fill="#244A8D"/>
                                <path d="M13.5 10C13.5 11.933 11.933 13.5 10 13.5C8.067 13.5 6.5 11.933 6.5 10C6.5 8.067 8.067 6.5 10 6.5C11.933 6.5 13.5 8.067 13.5 10ZM7.55 10C7.55 11.3531 8.6469 12.45 10 12.45C11.3531 12.45 12.45 11.3531 12.45 10C12.45 8.6469 11.3531 7.55 10 7.55C8.6469 7.55 7.55 8.6469 7.55 10Z" fill="#244A8D"/>
                                <path d="M11.5 10C11.5 10.8284 10.8284 11.5 10 11.5C9.17157 11.5 8.5 10.8284 8.5 10C8.5 9.17157 9.17157 8.5 10 8.5C10.8284 8.5 11.5 9.17157 11.5 10Z" fill="#244A8D"/>
                                <path d="M10 5.5C9.72386 5.5 9.5 5.27614 9.5 5V3.5C9.5 3.22386 9.72386 3 10 3C10.2761 3 10.5 3.22386 10.5 3.5V5C10.5 5.27614 10.2761 5.5 10 5.5Z" fill="#244A8D"/>
                                <path d="M10 17C9.72386 17 9.5 16.7761 9.5 16.5V15C9.5 14.7239 9.72386 14.5 10 14.5C10.2761 14.5 10.5 14.7239 10.5 15V16.5C10.5 16.7761 10.2761 17 10 17Z" fill="#244A8D"/>
                                <rect x="0.25" y="0.25" width="19.5" height="19.5" rx="9.75" stroke="#244A8D" stroke-width="0.5"/>
                                </svg>
                                Location</label>
                            <img src="{{asset('assets/images/reports/map.png')}}" alt="map" class="img-fluid">
                        </div>
                        <div class="form-group mb-5">
                            <label class="form-label">Emergency Details</label>
                            <textarea rows="3" class="form-control">Korem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</textarea>
                        </div>
                        <div class="form-group mb-5">
                            <label class="form-label">Image Samples</label>
                            <div class="row">
                                <div class="col-lg-3 col-6">
                                    <img src="{{asset('assets/images/reports/image-sample-1.png')}}" alt="image-sample" class="img-fluid rounded">
                                </div>
                                <div class="col-lg-3 col-6">
                                    <img src="{{asset('assets/images/reports/image-sample-2.png')}}" alt="image-sample" class="img-fluid rounded">
                                </div>
                                <div class="col-lg-3 col-6">
                                    <img src="{{asset('assets/images/reports/image-sample-3.png')}}" alt="image-sample" class="img-fluid rounded">
                                </div>
                                <div class="col-lg-3 col-6">
                                    <img src="{{asset('assets/images/reports/image-sample-4.png')}}" alt="image-sample" class="img-fluid rounded">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="form-group mb-5">
                            <label class="form-label">People Involved</label>
                            <textarea rows="2" class="form-control">Name - Javed Akhtar 
Mobile Number - +91 9845651516
                            </textarea>
                        </div>
                        <div class="form-group mb-5">
                            <label class="form-label">Wasim Akram</label>
                            <textarea rows="2" class="form-control">Name - Javed Akhtar 
Mobile Number - +91 9845651516
                            </textarea>
                        </div>
                        <div class="form-group mb-5">
                            <label class="form-label">Action Taken</label>
                            <input type="text" class="form-control" value="Ahmad Raza" required>
                        </div>
                        <div class="form-group mb-5">
                            <label class="form-label">Police Report</label>
                            <input type="text" class="form-control" value="WDGWGDWGB...." required>
                        </div>
                        <div class="form-group mb-5">
                            <label class="form-label">Officer Name</label>
                            <input type="text" class="form-control" value="Zaheer Khan" required>
                        </div>
                        <div class="form-group mb-5">
                            <label class="form-label">Towed</label>
                            <input type="text" class="form-control" value="Yes" required>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary inverse" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
        </div>
    </div>

    <section class="property-section">
    
        {{-- Top Header (Start) --}}
        <div class="guard-header card mt-lg-7 rounded-0">
            <div class="card-body p-5 pb-3">
                <div class="row">
                    <div class="col-lg-10 col-12">
                        <h1 class="title mb-5">All Reports</h1>
                        <div class="row mt-5">

                            <div class="col-lg-3 col-md-4 col-12 mb-3">
                                <figure class="info-card card">
                                    <div class="card-body p-4">
                                        <div>
                                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.25 21.25L15 17.575C14.5125 17.525 14.15 17.5 13.75 17.5C10.4125 17.5 3.75 19.175 3.75 22.5V25H15L11.25 21.25ZM13.75 15C16.5125 15 18.75 12.7625 18.75 10C18.75 7.2375 16.5125 5 13.75 5C10.9875 5 8.75 7.2375 8.75 10C8.75 12.7625 10.9875 15 13.75 15Z" fill="#244B8A"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.3375 25.625L15 21.25L16.75 19.4875L19.3375 22.0875L25.75 15.625L27.5 17.3875L19.3375 25.625Z" fill="#244B8A"/>
                                                </svg>                                                
                                            <label>General <br>
                                                Reports</label>
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
                                                <path d="M14.15 11.5488V1.88281C7.4 2.55781 2 8.34931 2 15.3828C2 22.4163 7.4 28.2078 14.15 28.8828V19.2168C12.8 18.6633 11.45 17.1648 11.45 15.3828C11.45 13.6008 12.8 12.1023 14.15 11.5488ZM19.361 14.0328H29C28.352 7.62031 23.6 2.51731 16.85 1.88281V11.5488C18.2 11.9538 18.902 12.8718 19.361 14.0328ZM16.85 19.2168V28.8828C23.6 28.2483 28.352 23.1453 29 16.7328H19.361C18.902 17.8938 18.2 18.8118 16.85 19.2168Z" fill="#244B8A"/>
                                                </svg>                                                
                                            <label>Maintenance <br>
                                                Reports</label>
                                        </div>
                                        <div>
                                            <h2 class="count">541</h2>
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
                                            <label>Emergency <br>
                                                Reports</label>
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
                                                
                                            <label>Parking <br>
                                                Reports</label>
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

            <div class="card table-card mb-6">
                {{-- <div class="card-body p-5 border-bottom">
                    <div class="row w-100">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-control search-box">
                                <i class="fas fa-search"></i>
                                <input type="search" placeholder="Search by location, job role,..." class="py-1" required>
                            </div>
                        </div>
                            <div class="col-lg-6 col-md-6 col-12 text-lg-end pe-0">
                                    <select class="form-select">
                                        <option value="Filter">Filter</option>
                                    </select>
                                    <select class="form-select">
                                        <option value="Export">Export</option>
                                    </select>
                            </div>
                    </div>
                </div> --}}
                <div class="card-body p-0 table-div">
                    <table id="data-table" class="w-100">
                        <thead>
                            <tr>
                                <th>
                                    <img src="{{asset('assets/images/reports/check.png')}}" alt="">
                                    Select
                                </th>
                                <th>S.No.</th>
                                <th style="curser:pointer;">Property Name</th>
                                <th  style="curser:pointer;">Guard Name</th>
                                <th>Report Title</th>
                                <th>Report Type</th>
                                <th>Report Date & Time</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 1; $i <= 6; $i++)
                            <tr>
                                <td><input type="checkbox" required></td>
                                <td>{{$i}}</td>
                                <td  style=" cursor: pointer;;">RIVI Properties	</td>
                                <td  style=" cursor: pointer;;">John Daly</td>
                                <td>Morning Report...</td>
                                <td>Emergency Report</td>
                                <td class="bold-colored">18/05/2023, 04:23 PM</td>
                                <td>
                                <div class="dropdown">
                                    <button class="btn p-1" type="button">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">View Report</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);"  data-bs-toggle="modal" data-bs-target="#delete-report-modal">Delete</a></li>
                                        <li><a class="dropdown-item" href="#">Download Report</a></li>
                                    </ul>
                                    </div>
                                </td>
                                {{-- <td></td> --}}
                            </tr>  
                            @endfor
                            
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card ">
                <div class="card-body p-5">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#general-report-modal">General Report</button>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#maintenance-report-modal">Maintenance Report</button>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#emergency-report-modal">Emergency Report</button>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#parking-report-modal">Parking Report</button>
                </div>
            </div>
    
        </div>
        {{-- Section Content (End) --}}
    </section>
    </x-default-layout>