@extends('layouts.adminlayout')

@section('title',"Student Attendence")

@section('content')

<div class="row">
    <div class="col-lg-6">
        <div class="card" style="height: 200px">
            <div class="card-title">
                Student ID
            </div>
            <div class="card-body">
                <form class="form-group" method="POST" action="">
                    {{csrf_field()}}
                    <div class="form-group">
                        <input type="number" class="form-control" name="stu_id" placeholder="Enter Student ID" required autofocus>
                    </div>
                    <input type="submit" class="btn btn-primary pull-right" value="Find Attendence">
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card"  style="height: 200px">
            <div class="card-title">
                Student Information
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">
                        <img class="member-profile-pic" src="{{asset('content/images/student.png')}}"> 
                    </div>
                    <div class="col-lg-8">
                        <h3><b>Anika Jahan</b></h3>
                        <h5><b>Class:</b> 8</h5>
                        <h5><b>Roll:</b> 13</h5>
                        <h5><b>ID:</b> 112233</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-6">
        <div class="card" style="height: 710px">
            <div class="card-title">
                Attendence of this year
            </div>
            <div class="card-body">
                <table class="table">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">Month</th>
                      <th scope="col">Work Day</th>
                      <th scope="col">Total Present</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <th scope="row">January</th>
                      <td>25</td>
                      <td>20</td>
                      <td>
                        <a href="#" class="btn btn-outline-primary btn-sm"><i class='fa fa-bars'></i> Details</a>
                      </td>
                    </tr>
                    
                    <tr>
                      <th scope="row">February</th>
                      <td>23</td>
                      <td>22</td>
                      <td>
                        <a href="#" class="btn btn-outline-primary btn-sm"><i class='fa fa-bars'></i> Details</a>
                      </td>
                    </tr>
                    
                    <tr>
                      <th scope="row">March</th>
                      <td>28</td>
                      <td>23</td>
                      <td>
                        <a href="#" class="btn btn-outline-primary btn-sm"><i class='fa fa-bars'></i> Details</a>
                      </td>
                    </tr>
                    
                    <tr>
                      <th scope="row">April</th>
                      <td>27</td>
                      <td>27</td>
                      <td>
                        <a href="#" class="btn btn-outline-primary btn-sm"><i class='fa fa-bars'></i> Details</a>
                      </td>
                    </tr>
                    
                    <tr>
                      <th scope="row">May</th>
                      <td>25</td>
                      <td>25</td>
                      <td>
                        <a href="#" class="btn btn-outline-primary btn-sm"><i class='fa fa-bars'></i> Details</a>
                      </td>
                    </tr>
                    
                    <tr>
                      <th scope="row">June</th>
                      <td>25</td>
                      <td>25</td>
                      <td>
                        <a href="#" class="btn btn-outline-primary btn-sm"><i class='fa fa-bars'></i> Details</a>
                      </td>
                    </tr>
                    
                    <tr>
                      <th scope="row">July</th>
                      <td>25</td>
                      <td>25</td>
                      <td>
                        <a href="#" class="btn btn-outline-primary btn-sm"><i class='fa fa-bars'></i> Details</a>
                      </td>
                    </tr>
                    
                    <tr>
                      <th scope="row">August</th>
                      <td>25</td>
                      <td>25</td>
                      <td>
                        <a href="#" class="btn btn-outline-primary btn-sm"><i class='fa fa-bars'></i> Details</a>
                      </td>
                    </tr>
                    
                    <tr>
                      <th scope="row">September</th>
                      <td>25</td>
                      <td>25</td>
                      <td>
                        <a href="#" class="btn btn-outline-primary btn-sm"><i class='fa fa-bars'></i> Details</a>
                      </td>
                    </tr>
                    
                    <tr>
                      <th scope="row">October</th>
                      <td>25</td>
                      <td>25</td>
                      <td>
                        <a href="#" class="btn btn-outline-primary btn-sm"><i class='fa fa-bars'></i> Details</a>
                      </td>
                    </tr>
                    
                    <tr>
                      <th scope="row">November</th>
                      <td>25</td>
                      <td>25</td>
                      <td>
                        <a href="#" class="btn btn-outline-primary btn-sm"><i class='fa fa-bars'></i> Details</a>
                      </td>
                    </tr>

                    <tr>
                      <th scope="row">December</th>
                      <td>25</td>
                      <td>25</td>
                      <td>
                        <a href="#" class="btn btn-outline-primary btn-sm"><i class='fa fa-bars'></i> Details</a>
                      </td>
                    </tr>

                  </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card"  style="height: 200px">
            <div class="card-title">
                Attendence of this month
            </div>
            <div class="card-body">
                <h4><b>Month: </b> April 2018</h4>
                <h4><b>Work Days:</b> 27</h4>
                <h4><b>Present:</b> 20</h4>
                <h4><b>Absent:</b> 07</h4>

                 <table class="table">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col" colspan="4"><center>Present Days</center></th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <th scope="row">January</th>
                      <th scope="row">January</th>
                      <th scope="row">January</th>
                      <th scope="row">January</th>
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection