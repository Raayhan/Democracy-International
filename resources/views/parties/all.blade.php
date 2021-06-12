@extends('layouts.app')
@section('pagetitle', 'All Parties')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid py-4">


    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 text-center">Party Informations</h1>


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
                            <th class="small-table">Party ID</th>
                            <th class="small-table">Party Name</th>
                            <th class="small-table">Membership Cost</th>



                        </tr>
                    </thead>
                    <tbody>
                        @foreach($parties as $party)


                        <tr>
                            <td>{{ $party->created_at }}</td>
                            <td>{{ $party->id }}</td>
                            <td>{{ $party->partyName }}</td>
                            <td>{{ $party->membershipCost }}</td>

                        </tr>

                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="small-table">Registration Date</th>
                            <th class="small-table">Party ID</th>
                            <th class="small-table">Party Name</th>
                            <th class="small-table">Membership Cost</th>


                        </tr>
                    </tfoot>
                </table>

            </div>
        </div>
    </div>


</div>

@endsection