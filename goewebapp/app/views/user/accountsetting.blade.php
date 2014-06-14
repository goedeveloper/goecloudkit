@extends('layouts.default')

@section('pageheader')
  <h2><i class="fa fa-home"></i> Account Setting <span>Subtitle goes here...</span></h2>
  <div class="breadcrumb-wrapper">
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="index.html">Bracket</a></li>
      <li class="active">Blank</li>
    </ol>
  </div>
@stop


@section('content')
<div class="span12 dcontent">
  <div class="tabbable">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#tab1" data-toggle="tab">My Profile</a></li>
      <li><a href="#tab2" data-toggle="tab">Change Password</a></li>
    </ul>

    <div class="tab-content">
      <!-- My account tab start -->
      <div class="tab-pane active" id="tab1">

          {{ Form::open( array( 'url' => 'myaccount/profile', ) ); }}
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-btns">
                  <a href="" class="panel-close">×</a>
                  <a href="" class="minimize">−</a>
                </div>
                <h4 class="panel-title">Horizontal Form</h4>
                <p>Basic form with a class name of <code>.form-horizontal</code>.</p>
              </div>
              <div class="panel-body">
              
                <div class="form-group">
                  <label class="col-sm-4 control-label">First Name:</label>
                  <div class="col-sm-8">
                  <input type="text" name="first_name" class="form-control" id="first_name" value="{{ $user->first_name }}" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">Last Name:</label>
                  <div class="col-sm-8">
                  <input type="text" name="last_name" class="form-control" id="last_name" value="{{ $user->last_name }}" placeholder="">
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-4 control-label">Email:</label>
                  <div class="col-sm-8">
                    <input type="email" name="email" class="form-control" id="email" value="{{ $user['email'] }}" placeholder="">
                  </div>
                </div>

              </div><!-- panel-body -->
              <div class="panel-footer">
                <button class="btn btn-primary">Save</button>
              </div><!-- panel-footer -->
            </div><!-- panel-default -->
          {{ Form::close() }}

      </div>


      <!-- My account tab close -->

    <!-- Change Password start -->
    <div class="tab-pane" id="tab2">

          {{ Form::open( array( 'url' => 'myaccount/changepassword', ) ); }}
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-btns">
                  <a href="" class="panel-close">×</a>
                  <a href="" class="minimize">−</a>
                </div>
                <h4 class="panel-title">Horizontal Form</h4>
                <p>Basic form with a class name of <code>.form-horizontal</code>.</p>
              </div>
              <div class="panel-body">
              
                <div class="form-group">
                  <label class="col-sm-4 control-label">Old Password:</label>
                  <div class="col-sm-8">
                  <input type="password" name="old_password" class="form-control" id="old_password" value="" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label">New Password:</label>
                  <div class="col-sm-8">
                  <input type="password" name="password" class="form-control" id="password" value="{{ Input::old('password') }}" placeholder="">
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-4 control-label">Confirm New Password:</label>
                  <div class="col-sm-8">
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" value="{{ Input::old('password_confirmation') }}" placeholder="">
                 </div>
                </div>

              </div><!-- panel-body -->
              <div class="panel-footer">
                <button class="btn btn-primary">Save</button>
                <button type="reset" class="btn btn-default">Reset</button>
              </div><!-- panel-footer -->
            </div><!-- panel-default -->
          {{ Form::close() }}


    </div>
    <!-- Change Password close -->
  </div>

</div>

@stop
