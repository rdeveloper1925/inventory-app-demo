@extends('layouts.app')
@section('title')
    Invoicer - Customers
@endsection
@section('header')
    Customers
@endsection
@section('content')
    <div class="row">
        <div class="col-12 p-2">
            <a href="/customers/create" class="btn btn-sm btn-success"><i data-feather="user-plus"></i> Create New Customer</a>
            <!-- Large modal
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#bs-example-modal-lg"><i data-feather="user-plus"></i> Large modal</button>
-->
        </div>
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
                    <h4 class="header-title mt-0 mb-1">Customers</h4>

                    <table id="table" class="table dt-responsive nowrap">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Contact Person</th>
                            <th>phone</th>
                            <th>Email</th>
                            <th>Lead Generator</th>
                            <th>Tin</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($customers as $c)
                            <tr>
                                <td>{{$c->customerName}}</td>
                                <td>{{$c->contactPerson}}</td>
                                <td>{{$c->phone}}</td>
                                <td>{{$c->email}}</td>
                                <td>{{$c->user}}</td>
                                <td>{{$c->tinNo}}</td>
                                <td>{{$c->address}}</td>
                                <td>

                                    <form id="form-{{$c->id}}" action="/customers/{{$c->id}}" method="post">@csrf
                                        <a class="btn btn-sm btn-soft-info" href="#" onclick="fetchData({{$c->id}})">View</a>
                                        <a href="/customers/{{$c->id}}/edit" class="btn btn-sm btn-soft-warning">Edit</a>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <a href="#" class="btn btn-sm btn-soft-danger" onclick="areYou({{$c->id}})">Delete</a>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>

    <!--  Modal content for the above example -->
    <div class="modal fade" id="displayModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <strong>Contact Person:<br></strong><span id="contactPerson"></span><br><br>
                            <strong>Address:<br></strong><span id="address"></span><br><br>
                            <strong>Email:<br></strong><span id="email"></span><br><br>
                            <strong>Tin Number:<br> </strong><span id="tinNo"></span><br><br>
                            <strong>Phone:<br> </strong><span id="phone"></span><br><br>
                        </div>
                        <div class="col-6">
                            <strong>Enrollment date:<br> </strong><span id="enrollment"></span><br><br>
                            <strong>Lead Generator:<br> </strong><span id="leadGenerator"></span><br><br>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <script>
        function fetchData(id) {
            $.ajax({
                type:"get",
                url:"/customers/fetch/"+id,
                dataType:"JSON",
                success:function(data, textStatus, jqXHR){
                    $('#myLargeModalLabel').html(data.customerName);
                    $('#contactPerson').html(data.contactPerson);
                    $('#address').html(data.address);
                    $('#email').html(data.email);
                    $('#phone').html(data.phone);
                    $('#tinNo').html(data.tinNo);
                    $('#enrollment').html(data.created_at);
                    $('#leadGenerator').html(data.users.firstName+" "+data.users.lastName);
                    console.log(data);
                    $('#displayModal').modal('show');
                }
            });

        }
        function areYou(id){
            var answer=confirm("Are you sure you want to delete this customer?");
            if(answer){
                $("#form-"+id).submit();
            }
        }
    </script>
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

