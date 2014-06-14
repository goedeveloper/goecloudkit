<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="images/favicon.png" type="image/png">

  <title>Bracket Responsive Bootstrap3 Admin</title>

  {{ HTML::style('braket/css/style.default.css') }}

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="signin">

<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>

  
    <div class="signuppanel">
        
        <div class="row">
            
            <div class="col-md-6">
                
                <div class="signup-info">
                    <div class="logopanel">
                        <h1><span>[</span> bracket <span>]</span></h1>
                    </div><!-- logopanel -->
                
                    <div class="mb20"></div>
                
                    <h5><strong>Bootstrap 3 Admin Template!</strong></h5>
                    <p>Bracket is a theme that is perfect if you want to create your own content management, monitoring or any other system for your project.</p>
                    <p>Below are some of the benefits you can have when purchasing this template.</p>
                    <div class="mb20"></div>
                    
                    <div class="feat-list">
                        <i class="fa fa-wrench"></i>
                        <h4 class="text-success">Easy to Customize</h4>
                        <p>Bracket is made using Bootstrap 3 so you can easily customize any element of this template following the structure of Bootstrap 3.</p>
                    </div>
                    
                    <div class="feat-list">
                        <i class="fa fa-compress"></i>
                        <h4 class="text-success">Fully Responsive Layout</h4>
                        <p>Bracket is design to fit on all browser widths and all resolutions on all mobile devices. Try to scale your browser and see the results.</p>
                    </div>
                    
                    <div class="feat-list mb20">
                        <i class="fa fa-search-plus"></i>
                        <h4 class="text-success">Retina Ready</h4>
                        <p>When a user load a page, a script checks each image on the page to see if there's a high-res version of that image. If a high-res exists, the script will swap that image in place.</p>
                    </div>
                    
                    <h4 class="mb20">and much more...</h4>
                
                </div><!-- signup-info -->
            
            </div><!-- col-sm-6 -->
            
            <div class="col-md-6">
                
                {{ Form::open( array('url'=>'register') ) }}

                    <h3 class="nomargin">Sign Up</h3>
                    <p class="mt5 mb20">Already a member? <a href="login"><strong>Sign In</strong></a></p>
                
                    <label class="control-label">Name</label>
                    <div class="row mb10">
                        <div class="col-sm-6">
                            <input type="text" name="first_name" class="form-control"  id="first_name" value="{{ Input::old('first_name') }}" placeholder="Firstname" />
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="last_name" class="form-control"  id="last_name" value="{{ Input::old('last_name') }}" placeholder="Lastname" />
                        </div>
                    </div>
                    
                    <div class="mb10">
                        <label class="control-label">Email Address</label>
                        <input type="text"  name="email" class="form-control" id="email" value="{{ Input::old('email') }}" />
                    </div>

                    <div class="mb10">
                        <label class="control-label">Password</label>
                        <input type="password"  name="password" class="form-control"  id="password" value="{{ Input::old('password') }}" />
                    </div>
                    
                    <div class="mb10">
                        <label class="control-label">Retype Password</label>
                        <input type="password" name="password_confirmation" class="form-control"   id="password_confirmation" value="{{ Input::old('password_confirmation') }}" />
                    </div>
 
 <!--                   
                    <label class="control-label">Birthday</label>
                    <div class="row mb10">
                        <div class="col-sm-5">
                            <select class="form-control chosen-select" data-placeholder="Month">
                                <option value=""></option>
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" placeholder="Day" />
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder="Year" />
                        </div>
                    </div>
                    
                    <div class="mb10">
                        <label class="control-label">Location</label>
                        <select class="form-control chosen-select" data-placeholder="Choose a Country...">
                          <option value=""></option>
                          <option value="United States">United States</option>
                          <option value="United Kingdom">United Kingdom</option>
                          <option value="China">China</option>
                          <option value="Hong Kong">Hong Kong</option>
                          <option value="India">India</option>
                          <option value="Indonesia">Indonesia</option>
                          <option value="Italy">Italy</option>
                          <option value="Japan">Japan</option>
                          <option value="Korea, Republic of">Korea, Republic of</option>
                          <option value="Spain">Spain</option>
                          <option value="Sri Lanka">Sri Lanka</option>
                          <option value="Swaziland">Swaziland</option>
                          <option value="Sweden">Sweden</option>
                          <option value="United Kingdom">United Kingdom</option>
                          <option value="United States">United States</option>
                          <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                          <option value="Viet Nam">Viet Nam</option>
                        </select>
                    </div>
-->
                    @if (Session::has('success') )
                      <div class="span6 alert alert-success">
                      {{ Session::get('success') }}
                      </div>
                    @endif
                    @if (Session::has('error') )
                      <div class="span6 alert alert-error">
                      {{ Session::get('error') }}
                      </div>
                    @endif

                    @if ($errors->any())
                    <div class="span6 alert alert-error">
                        <ul>
                            {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                        </ul>
                    </div>
                    @endif

                    <br />
                    <button type="submit" class="btn btn-success btn-block">Sign Up</button>     
                    <br />
                {{ Form::close() }}
            </div><!-- col-sm-6 -->
            
        </div><!-- row -->
        
        <div class="signup-footer">
            <div class="pull-left">
                &copy; 2014. All Rights Reserved. Bracket Bootstrap 3 Admin Template
            </div>
            <div class="pull-right">
                Created By: <a href="http://themepixels.com/" target="_blank">ThemePixels</a>
            </div>
        </div>
        
    </div><!-- signuppanel -->
  
</section>


{{ HTML::script('braket/js/jquery-1.10.2.min.js') }}
{{ HTML::script('braket/js/jquery-migrate-1.2.1.min.js') }}
{{ HTML::script('braket/js/bootstrap.min.js') }}
{{ HTML::script('braket/js/modernizr.min.js') }}
{{ HTML::script('braket/js/jquery.sparkline.min.js') }}
{{ HTML::script('braket/js/jquery.cookies.js') }}
{{ HTML::script('braket/js/toggles.min.js') }}
{{ HTML::script('braket/js/retina.min.js') }}

{{ HTML::script('braket/js/chosen.jquery.min.js') }}

{{ HTML::script('braket/js/custom.js') }}
<script>
    jQuery(document).ready(function(){
        
        // Chosen Select
        jQuery(".chosen-select").chosen({
            'width':'100%',
            'white-space':'nowrap',
            disable_search: true
        });
        
    });
</script>

</body>
</html>
