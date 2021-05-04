@extends('layouts.app')
@section('title')
    Invoicer - Audit Log
@endsection
@section('header')
    Audit Log
@endsection
@section('content')
    <div class="row">
        @if(session('success'))
            <div class="col-12 p-2">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class=" fa fa-heart-broken" aria-hidden="true"></i>
                    Success! {{session('success')}}
                    <button type="button" class="close" data-dismiss="alert"
                            aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        @endif
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-1">Audit Log</h4>

                    <table id="table" class="table dt-responsive nowrap">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Action</th>
                            <th>User</th>
                            <th>Created date/time</th>
                            <th>Update date/time</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($logs as $c)
                            <tr>
                                <td>{{$c->id}}</td>
                                <td>{{$c->action}}</td>
                                <td>{{$c->user}}</td>
                                <td>{{date('D, M d, Y H:i',strtotime($c->created_at))}}</td>
                                <td>{{date('D, M d, Y H:i',strtotime($c->updated_at))}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>

@endsection

@section('css')
    <link href="assets/libs/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('js')
    <script src="assets/libs/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/libs/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="assets/libs/datatables/dataTables.responsive.min.js"></script>
    <script src="assets/libs/datatables/responsive.bootstrap4.min.js"></script>

    <script src="assets/libs/datatables/dataTables.buttons.min.js"></script>
    <script src="assets/libs/datatables/buttons.bootstrap4.min.js"></script>
    <script src="assets/libs/datatables/buttons.html5.min.js"></script>
    <script src="assets/libs/datatables/buttons.flash.min.js"></script>
    <script src="assets/libs/datatables/buttons.print.min.js"></script>

    <script src="assets/libs/datatables/dataTables.keyTable.min.js"></script>
    <script src="assets/libs/datatables/dataTables.select.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>

@endsection

