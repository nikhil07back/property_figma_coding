<x-default-layout>
    
    <section class="property-section">

        {{-- Breadcrumbs (Start) --}}
        <div class="py-3 px-7">
            <ul class="breadcrumb">
                <li><a href="/shift/all">Shifts</a></li>
                <li><i class="fas fa-chevron-right"></i></li>
                <li><a href="/shift/edit">Edit Shift</a></li>
                <li><i class="fas fa-chevron-right"></i></li>
                <li><a href="/shift/checkpoint">Edit Checkpoints & Tasks</a></li>
                <li><i class="fas fa-chevron-right"></i></li>
                <li class="active"><a href="/shift/routes">Edit Routes</a></li>
                
            </ul>
        </div>
        {{-- Breadcrumbs (End) --}}
    
        {{-- Top Header (Start) --}}
        <div class="guard-header card rounded-0">
            <div class="card-body p-5 pb-3">
                <div class="row">
                    <div class="col-lg-10 col-12">
                        <h1 class="title">Rivi Properties - Shift 4</h1>
                        <p class="description mb-5">2118 Thornridge Cir. Syracuse, Connecticut 35624</p>
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
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 text-lg-end">
                            <button class="d-inline-block btn btn-primary inverse text-uppercase"><svg width="19" class="me-2" height="19" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                <p class="text-black-50">Minimum 2 checkpoints need to be selected to create a route.  <a href="javascript:void(0);" onclick="handleAddRoute(event)" class="link">+ Add more Checkpoint</a></p>
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
                    <button onclick="$('#next-button').html('Save')" class="btn btn-primary inverse me-3">Edit</button>
                    <a href="/shift/assign-guards"><button class="btn btn-primary" id="next-button">Next</button></a>
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