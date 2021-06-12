@extends('layouts.app')
@section('pagetitle', 'All Members')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid py-4">


    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 text-center">Members Informations</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">

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
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%;text-align:center!important;">
                    <thead class="small text-white" style="background:#4285F4 !important;">
                        <tr>
                            <th class="small-table">Registration Date</th>
                            <th class="small-table">Member ID</th>
                            <th class="small-table">Member Name</th>
                            <th class="small-table">Age</th>
                            <th class="small-table">Party</th>
                            <th class="small-table">Action</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach($members as $member)


                        <tr>
                            <td>{{ $member->created_at }}</td>
                            <td>{{ $member->id }}</td>
                            <td>{{ $member->memberName }}</td>
                            <td>{{ $member->memberAge }}</td>
                            <td>{{ $member->memberParty }}</td>
                            <td>
                                <div class="row justify-content-center">
                                    <div class="col-md-2">
                                        <form action="/members/edit" method="GET">

                                            <input type="hidden" name="memberId" value="{{ $member->id }}">
                                            <button type="submit" class="btn-sm small"><i class="fas fa-edit"></i> </button>
                                        </form>
                                    </div>
                                    <div class="col-md-2">

                                        <button data-toggle="modal" data-target="#exampleModalCenter" class="small btn-sm" type="submit"><i class="fas fa-trash-alt"></i> </button>

                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Attention</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body font-weight-bold">
                                                Do you want to Remove this Member from the system?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                                <form action="/members/delete" method="GET">

                                                    <input type="hidden" name="memberId" value="{{ $member->id }}">
                                                    <button type="submit" class="btn btn-danger">Remove</button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </td>



                        </tr>

                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="small-table">Registration Date</th>
                            <th class="small-table">Member ID</th>
                            <th class="small-table">Member Name</th>
                            <th class="small-table">Age</th>
                            <th class="small-table">Party</th>
                            <th class="small-table">Action</th>


                        </tr>
                    </tfoot>
                </table>

            </div>
        </div>
    </div>


</div>

@endsection