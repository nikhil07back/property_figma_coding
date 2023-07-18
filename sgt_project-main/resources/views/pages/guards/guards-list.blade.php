<x-default-layout>

    <!-- Modal -->
    <div class="modal fade" id="assign-guard-modal" tabindex="-1" aria-labelledby="assign-guard-modal" aria-hidden="true">
        <div class="modal-dialog rounded">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Assign Duty</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Fill details below to assign task to guard</p>
                <div class="form-group mb-5">
                    <label class="form-label">Guard Name*</label>
                    <select class="form-select">
                    <option value="property1">Guard 1</option>
            <option value="property2">Guard 2</option>
            <option value="property3">Guard 3</option>
                    </select>
                </div>
                <div class="form-group mb-5">
                    <label class="form-label">Property Name*</label>
                    <select class="form-select">
                    <option value="property1">Property 1</option>
            <option value="property2">Property 2</option>
            <option value="property3">Property 3</option>
                    </select>
                </div>
                <div class="form-group mb-5">
                    <label class="form-label">Shift Name*</label>
                    <select class="form-select">
                    <option value="property1">Shift 1</option>
            <option value="property2">Shift 2</option>
            <option value="property3">Shift 3</option>
                    </select>
                </div>
                <div class="form-group mb-5">
                    <label class="form-label">Route Name*</label>
                    <select class="form-select">
                    <option value="property1">Route 1</option>
            <option value="property2">Route 2</option>
            <option value="property3">Route 3</option>
                    </select>
                </div>
                <div class="form-group mb-5">
                    <label class="form-label">Time & Date*</label>
                    <input type="datetime-local" class="form-control w-50" required>
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
                        <h1 class="title">Guards</h1>
                        <div class="row mt-5">

                            <div class="col-lg-3 col-md-4 col-6 mb-3">
                                <figure class="info-card card">
                                    <div class="card-body p-4">
                                        <div>
                                            <svg width="36" height="36" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.25 21.25L15 17.575C14.5125 17.525 14.15 17.5 13.75 17.5C10.4125 17.5 3.75 19.175 3.75 22.5V25H15L11.25 21.25ZM13.75 15C16.5125 15 18.75 12.7625 18.75 10C18.75 7.2375 16.5125 5 13.75 5C10.9875 5 8.75 7.2375 8.75 10C8.75 12.7625 10.9875 15 13.75 15Z" fill="#244B8A"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.3375 25.625L15 21.25L16.75 19.4875L19.3375 22.0875L25.75 15.625L27.5 17.3875L19.3375 25.625Z" fill="#244B8A"/>
                                            </svg>
                                            <label>Total <br>Guards</label>
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
                                            <svg width="30" height="15" viewBox="0 0 24 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M17.4545 13C19.2727 13 20.8182 12.3681 22.0909 11.1042C23.3636 9.84028 24 8.30556 24 6.5C24 4.69444 23.3636 3.15972 22.0909 1.89583C20.8182 0.631944 19.2727 0 17.4545 0H6.54545C4.72727 0 3.18182 0.631944 1.90909 1.89583C0.636362 3.15972 0 4.69444 0 6.5C0 8.30556 0.636362 9.84028 1.90909 11.1042C3.18182 12.3681 4.72727 13 6.54545 13H17.4545ZM17.4545 10.8333H6.54545C5.34545 10.8333 4.31818 10.409 3.46363 9.56042C2.60909 8.71181 2.18182 7.69167 2.18182 6.5C2.18182 5.30833 2.60909 4.28819 3.46363 3.43958C4.31818 2.59097 5.34545 2.16667 6.54545 2.16667H17.4545C18.6545 2.16667 19.6818 2.59097 20.5364 3.43958C21.3909 4.28819 21.8182 5.30833 21.8182 6.5C21.8182 7.69167 21.3909 8.71181 20.5364 9.56042C19.6818 10.409 18.6545 10.8333 17.4545 10.8333ZM17.4545 9.75C16.5455 9.75 15.7727 9.43403 15.1364 8.80208C14.5 8.17014 14.1818 7.40278 14.1818 6.5C14.1818 5.59722 14.5 4.82986 15.1364 4.19792C15.7727 3.56597 16.5455 3.25 17.4545 3.25C18.3636 3.25 19.1364 3.56597 19.7727 4.19792C20.4091 4.82986 20.7273 5.59722 20.7273 6.5C20.7273 7.40278 20.4091 8.17014 19.7727 8.80208C19.1364 9.43403 18.3636 9.75 17.4545 9.75Z" fill="#244B8A"/>
                                                </svg>
                                                
                                            <label>Active<br>Guards</label>
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
                                            <svg width="30" height="15" viewBox="0 0 24 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.54545 13C4.72727 13 3.18182 12.3681 1.90909 11.1042C0.636364 9.84028 0 8.30556 0 6.5C0 4.69444 0.636364 3.15972 1.90909 1.89583C3.18182 0.631944 4.72727 0 6.54545 0H17.4545C19.2727 0 20.8182 0.631944 22.0909 1.89583C23.3636 3.15972 24 4.69444 24 6.5C24 8.30556 23.3636 9.84028 22.0909 11.1042C20.8182 12.3681 19.2727 13 17.4545 13H6.54545ZM6.54545 10.8333H17.4545C18.6545 10.8333 19.6818 10.409 20.5364 9.56042C21.3909 8.71181 21.8182 7.69167 21.8182 6.5C21.8182 5.30833 21.3909 4.28819 20.5364 3.43958C19.6818 2.59097 18.6545 2.16667 17.4545 2.16667H6.54545C5.34545 2.16667 4.31818 2.59097 3.46364 3.43958C2.60909 4.28819 2.18182 5.30833 2.18182 6.5C2.18182 7.69167 2.60909 8.71181 3.46364 9.56042C4.31818 10.409 5.34545 10.8333 6.54545 10.8333ZM6.54545 9.75C7.45455 9.75 8.22727 9.43403 8.86364 8.80208C9.5 8.17014 9.81818 7.40278 9.81818 6.5C9.81818 5.59722 9.5 4.82986 8.86364 4.19792C8.22727 3.56597 7.45455 3.25 6.54545 3.25C5.63636 3.25 4.86364 3.56597 4.22727 4.19792C3.59091 4.82986 3.27273 5.59722 3.27273 6.5C3.27273 7.40278 3.59091 8.17014 4.22727 8.80208C4.86364 9.43403 5.63636 9.75 6.54545 9.75Z" fill="#999999"/>
                                            </svg>
                                            <label>Inactive <br>Guards</label>
                                        </div>
                                        <div>
                                            <h2 class="count">2345</h2>
                                        </div>
                                    </div>
                                </figure>
                            </div>

                            <div class="col-lg-3 col-md-4 col-6 mb-3">
                                <figure class="info-card card">
                                    <div class="card-body p-4">
                                        <div>
                                            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 0C5.4 0 0 5.4 0 12C0 18.6 5.4 24 12 24C18.6 24 24 18.6 24 12C24 5.4 18.6 0 12 0ZM2.4 12C2.4 6.72 6.72 2.4 12 2.4C14.16 2.4 16.2 3.12 17.88 4.44L4.44 17.88C3.12 16.2 2.4 14.16 2.4 12ZM12 21.6C9.84 21.6 7.8 20.88 6.12 19.56L19.56 6.12C20.88 7.8 21.6 9.84 21.6 12C21.6 17.28 17.28 21.6 12 21.6Z" fill="#244B8A"/>
                                            </svg>
                                            <label>Guard <br>On Leave</label>
                                        </div>
                                        <div>
                                            <h2 class="count">6751</h2>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-12 text-lg-end p-lg-5">
                        <a href="/guards/add" class="link text-uppercase d-block h6 mb-5 mb-lg-16">+ Add New Guard</a>
                        <a href="javascript:void(0);" class="link text-uppercase d-block h6" data-bs-toggle="modal" data-bs-target="#assign-guard-modal">+ Assign Duty</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- Top Header (End) --}}
    
        {{-- Section Content (Start) --}}
        <div class="p-7">

            <div class="card table-card mb-6">
                <div class="card-body p-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.1457143858!2d72.71637333457338!3d19.082177512678562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1687857332610!5m2!1sen!2sin" class="w-100" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
    
            <div class="card table-card">
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
                                    <option value="Sort">Sort</option>
                                </select>
                                <select class="form-select">
                                    <option value="Export">Export</option>
                                </select>
                        </div>
                    </div>
                </div> --}}
                <div class="card-body p-0 table-div">
                    <table id="data-table">
                        <thead>
                            <tr>
                            <th>
                                    <img src="{{asset('assets/images/reports/check.png')}}" alt="">
                                    Select
                                </th>
                                 <th>S.No.</th>
                                <th>Guard Name </th>
                                <th>Position</th>
                                <th>Gender</th>
                                <th>Country</th>
                                <th>State</th>
                                <th>City</th>
                                <th>Emails</th>
                                <th>Phone No.</th>
                                <th>Account Created Date</th>
                                <th>Property Assigned</th>
                                <th>Shift Completed</th>
                                <th>Missed Shifts</th>
                                <th>Reports</th>
                                <th>Total Leaves</th>
                                <th>Last Log In</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 1; $i <= 6; $i++)
                            <tr>
                                <td><input type="checkbox" required></td>
                                <td>{{$i}}</td>
                                <td>
                                    <div class="profile">
                                        <img src="{{asset('assets/images/guards/profile.png')}}" alt="guard">
                                        <span>Kimberly
                                            Mastrangelo</span>
                                    </div>
                                </td>
                                <td>Supervisor</td>
                                <td>Male</td>
                                <td>India</td>
                                <td>Uttar Pradesh</td>
                                <td>Lucknow</td>
                                <td>s.t.sharkey@outlook.com</td>
                                <td>(215) 424-7763</td>
                                <td>May 28, 2023</td>
                                <td style="color:#244B8A;text-decoration: underline;" >23</td>
                                <td style="color:#244B8A;text-decoration: underline;" >23</td>
                                <td style="color:#244B8A;text-decoration: underline;" >2</td>
                                <td style="color:#244B8A;text-decoration: underline;" >12</td>
                                <td style="color:#244B8A;text-decoration: underline;" >23</td>
                                <td>Jun 8, 2023 11:26 am</td>
                                <td>
                                    <div class="switch">
                                        <label>
                                          <input type="checkbox" checked="checked" required>
                                          <span class="lever"></span>
                                        </label>
                                      </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn" type="button">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="/guards/edit">Edit Guard</a></li>
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
    
        </div>
        {{-- Section Content (End) --}}
    
    </section>
    </x-default-layout>