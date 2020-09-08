{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">--}}
{{--    <title>Document</title>--}}
{{--    <style>--}}
{{--        body {--}}
{{--            margin: 0;--}}
{{--            padding: 0;--}}
{{--            background-color: #17a2b8;--}}
{{--            height: 100vh;--}}
{{--        }--}}
{{--        #login .container #login-row #login-column #login-box {--}}
{{--            margin-top: 120px;--}}
{{--            max-width: 600px;--}}
{{--            height: 320px;--}}
{{--            border: 1px solid #9C9C9C;--}}
{{--            background-color: #EAEAEA;--}}
{{--        }--}}
{{--        #login .container #login-row #login-column #login-box #login-form {--}}
{{--            padding: 20px;--}}
{{--        }--}}
{{--        #login .container #login-row #login-column #login-box #login-form #register-link {--}}
{{--            margin-top: -85px;--}}
{{--        }--}}
{{--    </style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div id="login">--}}
{{--    <h3 class="text-center text-white pt-5">Login form</h3>--}}
{{--    <div class="container">--}}
{{--        <div id="login-row" class="row justify-content-center align-items-center">--}}
{{--            <div id="login-column" class="col-md-6">--}}
{{--                <div id="login-box" class="col-md-12">--}}
{{--                    <form id="login-form" class="form" action="" method="post">--}}
{{--                        @csrf--}}
{{--                        <h3 class="text-center text-info">Login</h3>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="username" class="text-info">Username:</label><br>--}}
{{--                            <input type="text" name="email" id="username" class="form-control">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="password" class="text-info">Password:</label><br>--}}
{{--                            <input type="text" name="password" id="password" class="form-control">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="remember-me"--}}
{{--                                   class="text-info"><span>Remember me</span> <span>--}}
{{--                                    <input id="remember-me" name="remember-me" type="checkbox"></span></label><br>--}}
{{--                            <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">--}}
{{--                        </div>--}}
{{--                        <div id="register-link" class="text-right">--}}
{{--                            <a href="#" class="text-info">Register here</a>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--</body>--}}
{{--<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>--}}
{{--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
{{--</html>--}}


{{--<!------ Include the above in your HEAD tag ---------->--}}


    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href=""><b>Login Hệ Thống ADMIN</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form id="login-form" class="form" action="" method="post">
            @csrf
            <div class="form-group has-feedback">
                <input type="text" name="email" id="username" class="form-control">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="text" name="password" id="password" class="form-control">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> Remember Me
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" href="" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
</script>
</body>
</html>
