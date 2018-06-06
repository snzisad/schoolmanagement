@extends('layouts.adminlayout')

@section('title',"Notice")

@section('content')

<div class="row">
    <div class="col-lg-6">
        <div class="card" style="height: 300px;">
            <div class="card-title">
                New Notice
            </div>
            <div class="card-body ">
                <form class="form-group" method="POST" action="addnotice">
                    {{csrf_field()}}
                    <div class="form-group">
                        <textarea name="notice" placeholder="Enter Notice"></textarea>
                        <input type="hidden" name="display" value="1">
                    </div>
                    <input type="submit" class="btn btn-primary pull-right" value="Add Notice">
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card" style="height: 300px;">
            <div class="card-title">
                Current Notice <a class="pull-right edit-current-notice-button" href="#" data-toggle="modal" data-target="#edit-notice-modal"><i class='fa fa-pencil'></i> Edit</a>
            </div>
            <div class="card-body ">
                @if($current_notice)
                <span class="current-notice-text">{{$current_notice->notice}} </span>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title">
                Previous Notice
            </div>
            @foreach($prev_notices as $notice)
                <div class="card-body">
                    <div class='card-footer'> 
                        <b style="margin-left: -18px;">Date & Time:</b> {{$notice->created_at}} 
                        <span class="pull-right"> 
                            <a href="{{asset('/noticelist/makecurrent/'.$notice->id)}}"><i class='fa fa-check-circle'></i> Make Current Notice</a>
                            <a href="#" class="edit-notice-button" data-toggle="modal" data-target="#edit-notice-modal"><i class='fa fa-pencil'></i> Edit</a>
                            <a href="{{asset('/noticelist/remove/'.$notice->id)}}"><i class='fa fa-trash'></i> Delete</a>
                         </span>
                    </div>
                    <p class="card-body notice-text" $(".notice-text").attr('notice-id')="{{$notice->id}}"> {{$notice->notice}} </p>
                    <br>
                </div>
            @endforeach
        </div>
    </div>
</div>

<div class="modal fade" id="edit-notice-modal" tabindex="-1" role="dialog" aria-labelledby="edit-notice-modal-title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="edit-notice-modal-title">Edit Notice</h5>
      </div>
         <form class="form-group" method="POST" action="editnotice">
            <div class="modal-body">
                {{csrf_field()}}
                <div class="form-group">
                    <textarea id="notice-text-textarea" name="notice" placeholder="Enter Notice" required autofocus></textarea>
                    <input type="hidden" id="display-field" name="display" value="">
                    <input type="hidden" id="id-field" name="id" value="">
                </div>
            </div>
              <div class="modal-footer">
                <a href="{{asset('/noticelist')}}" class="btn btn-secondary">Close</a>
                <input type="submit" class="btn btn-primary" value="Save Changes">
              </div>
        </form>
    </div>
  </div>
</div>
@endsection