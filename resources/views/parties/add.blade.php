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
                            @if(session('status'))
                            <div class="alert alert-success alert-dismissible fade show text-center font-weight-bold small" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif

                            {{-- Error Alert --}}
                            @if(session('error'))
                            <div class="alert alert-danger alert-dismissible fade show text-center font-weight-bold small" role="alert">
                                {{ session('error') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif


                            <div class="row justify-content-center">
                                <h4 class="mdb-color-text">Party Registration Form</h4>
                            </div>
                            <div style="margin-bottom:7%;">
                                <hr>
                            </div>

                            <form method="POST" action="\parties\add">
                                @csrf

                                <div class="form-group row">
                                    <label for="partyName" class="col-md-4 col-form-label text-md-right">{{ __('Party Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="partyName" type="text" class="form-control @error('name') is-invalid @enderror" name="partyName" value="{{ old('partyName') }}" autocomplete="partyName" autofocus>

                                        @error('partyName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="membershipCost" class="col-md-4 col-form-label text-md-right">{{ __('Membership Cost') }}</label>

                                    <div class="col-md-6">
                                        <input id="reg_no" type="number" class="form-control @error('membershipCost') is-invalid @enderror" name="membershipCost" value="{{ old('reg_no') }}" autocomplete="membershipCost">

                                        @error('membershipCost')
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