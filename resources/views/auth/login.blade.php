<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/assets/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/assets/css/core.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/assets/css/components.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/assets/css/colors.css') }}" rel="stylesheet" type="text/css">


        <!-- Core JS files -->
    <script type="text/javascript" src="{{ asset('public/assets/js/plugins/loaders/pace.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/js/core/libraries/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/js/core/libraries/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/js/plugins/loaders/blockui.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="{{ asset('public/assets/js/plugins/forms/validation/validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/js/plugins/forms/styling/uniform.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('public/assets/js/core/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/js/pages/login_validation.js') }}"></script>

    <script type="text/javascript" src="{{ asset('public/assets/js/plugins/ui/ripple.min.js') }}"></script>
    <!-- /theme JS files -->

</head>

<body class="login-container login-cover">

    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Content area -->
                <div class="content pb-20">

                    <!-- Form with validation -->
                    <form method="POST" action="{{ url('dologin') }}">
                         @csrf
                        <div class="panel panel-body login-form">
                            <div class="text-center">
                                <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
                                <h5 class="content-group">Login to your account <small class="display-block">Your credentials</small></h5>
                                @if (session('msg'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: #f32828;"> {{ session('msg') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group has-feedback has-feedback-left">
                                <input type="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Enter Email" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <div class="form-control-feedback">
                                    <i class="icon-user text-muted"></i>
                                </div>
                            </div>

                            <div class="form-group has-feedback has-feedback-left">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <div class="form-control-feedback">
                                    <i class="icon-lock2 text-muted"></i>
                                </div>
                            </div>

                            <div class="form-group login-options">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" class="styled" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            Remember
                                        </label>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <a href="{{ route('password.request') }}">Forgot password?</a>
                                    </div>
                                   
                                </div>
                            </div>

                            <div class="form-group">
                                 <button type="submit" class="btn bg-pink-400 btn-block">Login <i class="icon-arrow-right14 position-right"></i></button>
                            </div>
                        </div>
                    </form>
                    <!-- /form with validation -->

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

</body>
</html>
