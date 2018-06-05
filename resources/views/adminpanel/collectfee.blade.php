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
                <form class="form-group" method="POST" action="feecollection">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="student_id">Student ID</label><br>
                                <input type="number" class="form-control" name="student_id" placeholder="Enter Student ID" required autofocus value="{{old('student-id')}}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="catagory">Catagory</label><br>
                                <select class="custom-select" id="catagory-selection" name="catagory" required value="{{old('catagory')}}">
                                    <option value="" selected disabled>Select fee catagory</option>
                                    @foreach($catagories as $catagory)
                                        <option value="{{$catagory->catagory}}">{{$catagory->catagory}}</option>
                                    @endforeach
                                    <option value="add-catagory">Add Catagory</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="amount">Amount</label><br>
                                <input type="number" class="form-control" name="amount" placeholder="Enter Amount" required autofocus value="{{old('amount')}}">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label>.</label><br>
                                <input type="submit" id="submit-button" class="btn btn-primary align-bottom" value="Collect">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="new-catagory-modal" tabindex="-1" role="dialog" aria-labelledby="new-catagory-modal-title" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="new-catagory-modal-title">New Catagory</h5>
      </div>
      <form class="form-group" method="POST" action="{{route('addcatagory')}}">
        {{csrf_field()}}
          <div class="modal-body">
            <div class="form-group">
                <label for="catagory">Catagory Name</label><br>
                <input type="text" class="form-control" name="catagory" placeholder="Enter Catagory Name" required autofocus='true'>
            </div>
          </div>
          <div class="modal-footer">
            <a href="/feecollection" class="btn btn-secondary">Close</a>
            <input type="submit" class="btn btn-primary" value="Add Catagory">
          </div>
      </form>
    </div>
  </div>
</div>
@endsection