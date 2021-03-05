<!DOCTYPE html>
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Careefer Job Portal</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for " name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{asset('assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{asset('assets/global/css/components.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{asset('assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="{{asset('assets/pages/css/login-4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />

        <style>
            .error-msg{color:red!important;}
        </style>
    </head>
    <!-- END HEAD -->

    <body class=" login">
        <!-- BEGIN LOGO -->
        <div class="logo">
            <!-- <a href="index.html">
                <img src="{{asset('assets/pages/img/logo-big.png')}}" alt="" /> </a> -->
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/password/reset') }}">
            
            {{ csrf_field() }}

            <input type="hidden" name="token" value="{{ $token }}">

                <h4 class="form-title text-center" style="color:black; font-weight: bold;"> Careefer Job Portal<br><br>Admin Login</h4>
                
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label">E-mail address</label>
                    <div class="input-icon">
                        <i class="fa fa-user"></i>
                        
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus >

                        @if($errors->has('email'))
                            <p style="background-color: white!important;" class="error-msg">
                                {{ $errors->first('email') }}
                            </p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Password</label>
                    <div class="input-icon">
                        <i class="fa fa-lock"></i>
                        <input id="password" type="password" class="form-control" name="password">

                        @if($errors->has('password'))                  
                            <p style="background-color: white!important;" class="error-msg">
                                {{ $errors->first('password') }}
                            </p>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label">
                        Confirm Password
                    </label>
                    <div class="input-icon">
                        <i class="fa fa-lock"></i>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                        @if($errors->has('password_confirmation'))
                            <span>
                                <p style="background-color: white!important;" class="error-msg">{{ $errors->first('password_confirmation') }}</p>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn green pull-right"> Login </button>
                    <div class="forget-password">
                        <h4>
                            <a href="{{url('admin/password/reset')}}" style="color: white;">
                                <button type="button" class="btn red">
                                    Login
                                </button>
                            </a>
                        </h4>
                    </div>
                </div>
            </form>
            <!-- END LOGIN FORM -->
        </div>
        <!-- END LOGIN -->
        <!-- BEGIN COPYRIGHT -->
        <div class="copyright"> {{date('Y')}} &copy; Careefer Job Portal </div>
        <!-- END COPYRIGHT -->
        <!--[if lt IE 9]>
<script src="{{asset('assets/global/plugins/respond.min.js')}}"></script>
<script src="{{asset('assets/global/plugins/excanvas.min.js')}}"></script> 
<script src="{{asset('assets/global/plugins/ie8.fix.min.js')}}"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="{{asset('assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/global/plugins/backstretch/jquery.backstretch.min.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{asset('assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{asset('assets/pages/scripts/login-4.min.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>