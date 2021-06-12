@extends('layouts.app')
@section('pagetitle', 'Welcome')
@section('content')
<div class="container front-panel py-5">
    <div class="row justify-content-center">
        <div class="col-md animated zoomIn text-center text-secondary" style="margin-top:5%">
            <h6>Welcome to</h6>
            <div class="row justify-content-center">
                <h1 class="brown-text">Democracy International</h1>
            </div>

            <p style="margin-top:5%">Bangladesh Democratic Participation and Reform Program</p>
            <div class="row justify-content-center mb-5">
                <button onclick="window.location.href='/login'" class="btn btn-primary">GET STARTED</button>

            </div>
        </div>

    </div>
</div>

@endsection