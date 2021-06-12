@extends('layouts.app')
@section('pagetitle', 'Edit Member')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid py-4">


    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 text-center">Edit Member</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="row justify-content-center">
                <h4 class="mdb-color-text">Edit Member Informations</h4>
            </div>
            <div style="margin-bottom:7%;">
                <hr>
            </div>

            <form method="POST" action="\members\edit">
                @csrf
                @foreach($members as $member)
                <div class="form-group row">
                    <label for="memberName" class="col-md-4 col-form-label text-md-right">{{ __('Member Name') }}</label>

                    <div class="col-md-6">
                        <input id="memberName" type="text" class="form-control @error('name') is-invalid @enderror" name="memberName" value="{{$member->memberName}}" autofocus>

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
                        <input id="memberAge" type="number" class="form-control @error('memberAge') is-invalid @enderror" name="memberAge" value="{{$member->memberAge }}" autocomplete="memberAge">

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
                @endforeach
                <input type="hidden" name="memberId" value="{{ $member->id }}">
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-green">
                            {{ __('Update') }}
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>


</div>

@endsection