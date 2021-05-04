@extends('layouts.app')
@section('title')
    Invoicer - Create Customer
@endsection
@section('content')
    <div class="row container">
        <div class="col-xl-10">
            <div class="card">
                <div class="card-body">
                    <div>
                        <h5 class="header-title mb-1 mt-0">Create Customer</h5>
                        <hr>
                    </div>
                    <form action="/customers" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="customerName">Customer Name:</label>
                                    <input type="text" class="form-control" name="customerName" required/>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="contactPerson">Contact Person:</label>
                                    <input type="text" class="form-control" name="contactPerson" required/>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="address">Address:</label>
                                    <input type="text" class="form-control" name="address" required/>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="phone">Phone:</label>
                                    <input type="text" class="form-control" name="phone" required/>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" name="email" required/>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="tinNo">Tin Number:</label>
                                    <input type="number" class="form-control" name="tinNo" required/>
                                </div>
                            </div>
                            <div class="col-12">
                                <input type="submit" class="btn btn-outline-success"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
