<x-default-layout>

<section class="property-section">

    {{-- Top Header (Start) --}}
    <div class="py-5 px-7 border-top" style="background: #fff;">
        <div class="row justify-content-between">
            <div class="col-lg-5 col-md-6 col-12">
                <div class="property-search">
                    <div class="form-control">
                    <i class="fas fa-search me-2"></i>
                    <input type="search" placeholder="Search property" required>
                    </div>
                    <button class="btn btn-primary ms-2">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 col-12 text-end">
                <div>
                    <a href="/properties/create" class="btn btn-primary inverse ">+ ADD NEW PROPERTY</a>
                </div>
            </div>
        </div>
    </div>
    {{-- Top Header (End) --}}

    {{-- Section Content (Start) --}}
    <div class="p-7">

        <div class="card property-row-card mb-7">
            <div class="card-body p-5 pb-0">
                <h3 class="mb-6 mt-2 title">RECENTLY CREATED PROPERTIES</h3>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        @include('components.property-card-home')
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        @include('components.property-card-apartment')
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        @include('components.property-card-hospital')
                    </div>
                </div>
            </div>
        </div>

        <div class="card property-row-card mb-7">
            <div class="card-body p-5 pb-0">
                <h3 class="mb-6 mt-2 title">All Properties</h3>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        @include('components.property-card-school')
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        @include('components.property-card-office')
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        @include('components.property-card-hotel')
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        @include('components.property-card-government')
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        @include('components.property-card-bank')
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        @include('components.property-card-society')
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        @include('components.property-card-office')
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        @include('components.property-card-office')
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        @include('components.property-card-office')
                    </div>
                </div>
            </div>
        </div>

        <div class="card property-pagination-card">
            <div class="card-body p-5">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-12">
                        <h6 class="title">Showing 1 to 9 of 250 entries</h6>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 text-end">
                        <div>
                            <ul class="mb-0">
                                <li class="d-inline-block"><a href="#" class="pagination-link">Previous</a></li>
                                <li class="d-inline-block mx-2">
                                    <a href="#" class="pagination-link active">1</a>
                                </li>
                                <li class="d-inline-block"><a href="#" class="pagination-link">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    {{-- Section Content (End) --}}

</section>
</x-default-layout>
