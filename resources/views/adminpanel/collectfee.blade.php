@extends('layouts.adminlayout')

@section('title',"Collect Fee")

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title">
                Fee Collection
            </div>
            <div class="card-body">
                <form class="form-group" id="fee-collection-form" method="POST" action="feecollection">
                    <div id="token_field" data-token='{{ csrf_token() }}'></div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="student_id">Student ID</label><br>
                                <input type="number" class="form-control" id="student_id" name="student_id" placeholder="Enter Student ID" required autofocus value="{{old('student-id')}}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="catagory">Catagory</label><br>
                                @include('catagory.feecatagory')
                                <h6 id="catagory_error" class="text-danger" style="margin-top: 5px; display: none;">Select a valid catagory</h6>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="amount">Amount</label><br>
                                <input type="number" class="form-control" id="fee_amount" name="amount" placeholder="Enter Amount" required autofocus value="{{old('amount')}}">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label>.</label><br>
                                <input type="submit" id="collect-fee-button" class="btn btn-primary align-bottom" value="Collect">
                                <i id="loading-spinner" class="fa fa-spinner fa-pulse fa-2x fa-fw text-warning" style="display: none;"></i>
                                <h4 id="success-text" class="text-success" style="display: none;"><i class="fa fa-check"></i> Success </h4>
                                <h4 id="error-text" class="text-danger" style="display: none;"><i class="fa fa-close"></i> Error </h4>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection