@extends('layouts.app')
@section('pagetitle', 'Dashboard')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Dashboard') }}</div>

                <div class="card-body">
                  <h2 class="text-center mb-5">Welcome</h2>
                  <div class="row">
                      <div class="col md-6">
                        <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Add Party</h5>
                              <p class="card-text">
                                Add a new party to the system.
                              </p>
                              <button type="button" class="btn btn-unique btn-sm">Go</button>
                            </div>
                          </div>
                      </div>
                      <div class="col md-6">
                        <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Create Memeber</h5>
                              <p class="card-text">
                                Add a new member to a party.
                              </p>
                              <button type="button" class="btn btn-unique btn-sm">Go</button>
                            </div>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
