@extends('layouts.adminlayout')

@section('title',"Dashboard")

@section('content')

@if($current_notice)
    <!-- Notice for pc version -->
    <div class="row hidden-sm-down">
    	<div class="col-lg-1 bg-danger"><b>Notice</b></div>
    	<div class="hidden-sm-down col-lg-11 scroll-left bg-primary">
    		<p>{{$current_notice->notice}}</p>
    	</div>
    </div> 
    
    <!-- Notice for mobile version -->
    <div class="hidden-md-up bg-primary">
    	<p class="bg-danger">Notice</p>
    	<p class="text-white">{{$current_notice->notice}}</p>
    </div>
@endif

<div class="row">
    <div class="col-md-3">
        <div class="card bg-primary p-20">
            <div class="media widget-ten">
                <div class="media-left meida media-middle">
                    <span><i class="fa fa-group fa-3x"></i></span>
                </div>
                <div class="media-body media-text-right">
                    <h2 class="color-white count">1200</h2>
                    <b class="m-b-0">Total Students</b>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-pink p-20">
            <div class="media widget-ten">
                <div class="media-left meida media-middle">
                    <span><i class="fa fa-bell fa-3x"></i></span>
                </div>
                <div class="media-body media-text-right">
                    <h2 class="color-white count">278</h2>
                    <b class="m-b-0">Workday</b>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-success p-20">
            <div class="media widget-ten">
                <div class="media-left meida media-middle">
                    <span><i class="fa fa-smile-o fa-3x"></i></span>
                </div>
                <div class="media-body media-text-right">
                    <h2 class="color-white count">135</h2>
                    <b class="m-b-0">Holiday</b>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card bg-danger p-20">
            <div class="media widget-ten">
                <div class="media-left meida media-middle">
                    <span><i class="fa fa-users fa-3x"></i></span>
                </div>
                <div class="media-body media-text-right">
                    <h2 class="color-white count">100</h2>
                    <b class="m-b-0">Total Employee</b>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-title">
                <h4>Today's Student Attendence</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Present</td>
                                <td><span class="count">950</span></td>
                            </tr>
                            <tr>
                                <td>Absent</td>
                                <td><span class="count">200</span></td>
                            </tr>
                            <tr>
                                <td>Leave</td>
                                <td><span>50</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-title">
                <h4>Today's Employee Attendence</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table ">
                        <tbody>
                            <tr>
                                <td>Present</td>
                                <td><span class="count">80</span></td>
                            </tr>
                            <tr>
                                <td>Absent</td>
                                <td><span class="count">15</span></td>
                            </tr>
                            <tr>
                                <td>Leave</td>
                                <td><span>5</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-title">
                <h4>Fee Collection of this Month</h4> 
                <span class="pull-right">৳ <b class='count'>20000</b></span>
            </div>
            <div class="sales-chart">
                <canvas id="team-chart"></canvas>
            </div>
        </div>
    </div>
     <div class="col-lg-6">
        <div class="card">
            <div class="card-title">
                <h4>Fee Collection of this Year</h4>
                <span class="pull-right">৳ <b class='count'>150000</b></span>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                    	<thead>
                    		<th>Month</th>
                    		<th>Amount</th>
                    		<th>Month</th>
                    		<th>Amount</th>
                    	</thead>
                        <tbody>
                            <tr>
                                <td>January</td>
                                <td><span class="count">8500</span></td>
                                <td>February</td>
                                <td><span class="count">8500</span></td>
                            </tr>
                            <tr>
                                <td>March</td>
                                <td><span class="count">200</span></td>
                                <td>April</td>
                                <td><span class="count">200</span></td>
                            </tr>
                            <tr>
                                <td>May</td>
                                <td><span>50</span></td>
                                <td>June</td>
                                <td><span>50</span></td>
                            </tr>
                            <tr>
                                <td>July</td>
                                <td><span class="count">1200</span></td>
                                <td>August</td>
                                <td><span class="count">1200</span></td>
                            </tr>
                            <tr>
                                <td>September</td>
                                <td><span class="count">1200</span></td>
                                <td>October</td>
                                <td><span class="count">1200</span></td>
                            </tr>
                            <tr>
                                <td>November</td>
                                <td><span class="count">1200</span></td>
                                <td>December</td>
                                <td><span class="count">1200</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection