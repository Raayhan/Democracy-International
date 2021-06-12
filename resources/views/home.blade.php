@extends('layouts.app')
@section('pagetitle', 'Dashboard')
@section('content')

<div class="container">
    <div class="jumbotron jumbotron-fluid" style="padding-top:20px!important;padding-bottom:20px!important;">
        <div class="container">
            <h1 class="text-center pt-5">Welcome Back</h1>
            <p class="lead text-center small">Manage your dashboard</p>
            <div class="row">
                <div class="col-md-6 p-3">
                    <!-- Card -->
                    <div class="card">

                        <div class="card-image">

                            <!-- Content -->
                            <a href="/parties/add">
                                <div class="text-white rounded d-flex h-100 mask  indigo darken-3">
                                    <div class="first-content align-self-center p-3">
                                        <h4 class="card-title">Create Party</h4>
                                        <p class="">Add a new party to the system</p>
                                    </div>
                                    <div class="second-content align-self-center mx-auto text-center">
                                        <i class="fas fa-book-reader fa-3x"></i>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <div class="col-md-6 p-3">
                    <!-- Card -->
                    <div class="card">

                        <div class="card-image">

                            <!-- Content -->
                            <a href="/parties/all">
                                <div class="text-white d-flex rounded h-100 mask  green darken-4">
                                    <div class="first-content align-self-center p-3">
                                        <h4 class="card-title">View Parties</h4>
                                        <p class="">View all parties in the system</p>
                                    </div>
                                    <div class="second-content align-self-center mx-auto text-center">
                                        <i class="fas fa-award fa-3x"></i>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                    <!-- Card -->
                </div>


            </div>
            <div class="row">
                <div class="col-md-6 p-3">
                    <!-- Card -->
                    <div class="card">

                        <div class="card-image">

                            <!-- Content -->
                            <a href="/members/add">
                                <div class="text-white rounded d-flex h-100 mask  red darken-3">
                                    <div class="first-content align-self-center p-3">
                                        <h4 class="card-title">Create Member</h4>
                                        <p class="">Add a new member to the system</p>
                                    </div>
                                    <div class="second-content align-self-center mx-auto text-center">
                                        <i class="fas fa-user-plus fa-3x"></i>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <div class="col-md-6 p-3">
                    <!-- Card -->
                    <div class="card">

                        <div class="card-image">

                            <!-- Content -->
                            <a href="/members/view">
                                <div class="text-white d-flex rounded h-100 mask  yellow darken-4">
                                    <div class="first-content align-self-center p-3">
                                        <h4 class="card-title">View Members</h4>
                                        <p class="">View all members in the system</p>
                                    </div>
                                    <div class="second-content align-self-center mx-auto text-center">
                                        <i class="fas fa-users fa-3x"></i>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                    <!-- Card -->
                </div>


            </div>
        </div>
    </div>
</div>

@endsection