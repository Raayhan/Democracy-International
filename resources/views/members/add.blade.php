@extends('layouts.app')
@section('pagetitle', 'Add a Member')
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
                                <h4 class="mdb-color-text">Member Registration Form</h4>
                            </div>
                            <div style="margin-bottom:7%;">
                                <hr>
                            </div>

                            <form method="POST" action="\members\add">
                                @csrf

                                <div class="form-group row">
                                    <label for="memberName" class="col-md-4 col-form-label text-md-right">{{ __('Member Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="memberName" type="text" class="form-control @error('name') is-invalid @enderror" name="memberName" value="{{ old('memberName') }}" autocomplete="memberName" autofocus>

                                        @error('memberName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="memberAge" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

                                    <div class="col-md-6">
                                        <input id="memberAge" type="number" class="form-control @error('memberAge') is-invalid @enderror" name="memberAge" value="{{ old('age') }}" autocomplete="memberAge">

                                        @error('memberAge')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="memberParty" class="col-md-4 col-form-label text-md-right">{{ __('Party') }}</label>

                                    <div class="col-md-6">
                                        <select name="memberParty" class="form-control  @error('party') is-invalid @enderror" id="partyName">
                                            <option value="" disabled selected>Select Party</option>
                                            @foreach($parties as $party)
                                            <option value="{{ $party->partyName }}">
                                                {{ $party->partyName }}
                                            </option>
                                            @endforeach


                                        </select>

                                        @error('memberParty')
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