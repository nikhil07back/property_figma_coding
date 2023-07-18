@extends('layout.master')

@section('content')
<section class="auth-section">
    <div class="d-flex align-items-center justify-content-start p-5">
        <img src="{{asset('assets/images/logo.png')}}" alt="logo" class="logo p-3">
    </div>
    <div class="d-flex align-items-center justify-content-center content-div">
        <div class="container">

            {{ $slot }}
    
        </div>
    </div>
</section>
@endsection