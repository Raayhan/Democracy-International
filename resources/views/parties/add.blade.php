@extends('layouts.app')
@section('pagetitle', 'Add a Party')
@section('content')
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="jumbotron">


                        <div class="card-body">


                            <div class="row justify-content-center">
                                <h4 class="mdb-color-text">Party Registration Form</h4>
                            </div>
                            <div style="margin-bottom:7%;">
                                <hr>
                            </div>

                            <form method="POST" action="">
                                @csrf

                                <div class="form-group row">
                                    <label for="partyName"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Party Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="partyName"
                                            value="{{ old('partyName') }}" autocomplete="partyName"
                                            autofocus>

                                        @error('partyName')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="membership_cost"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Membership Cost') }}</label>

                                    <div class="col-md-6">
                                        <input id="reg_no" type="number"
                                            class="form-control @error('membership_cost') is-invalid @enderror"
                                            name="reg_no" value="{{ old('reg_no') }}"
                                            autocomplete="membership_cost">

                                        @error('membership_cost')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                               

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-unique">
                                            {{ __('Create') }}
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection