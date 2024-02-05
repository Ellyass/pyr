<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MorePayroll CRM</title>
    <link rel="shortcut icon" href="/img/small.png"/>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="/backend/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/backend/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/backend/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/backend/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/backend/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style type="text/css">
        .login-page
        {
            background: url('img/arkaplan2.png') no-repeat center center fixed;
            background-size:cover;
            height: 50px;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;


        }
        body
        {
            overflow: hidden;
        }



    </style>
</head>


<body class="hold-transition ">
<img src="/img/more-payroll-bordrolama-tesvik-danismanligi.png" alt="" height="150px;" width="375px;">

<div>
<div class="login-box">

    <div class="login-logo">
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">


        <form action="{{route('login.authenticate')}}" method="POST">
            @csrf

            @if(Session::has('status'))
                <div class="alert alert-success">
                    <p style="text-align: center;font-size: 15px;"> {{session('status')}}</p>
                </div>
            @endif
            @if(Session::has('error'))
                <div class="alert alert-danger">
                    {{session('error')}}
                </div>
                @endif
            <p align="center">Müşteri İlişkiler Yönetimi</p>
            <div class="form-group has-feedback">
                <input type="email" name="email" class="form-control" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="1"> Beni Hatırla
                        </label>
                    </div>
                </div>
                <!-- /.col -->

                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Giriş Yap</button>
                </div>
                <!-- /.col -->
                <br>

            </div>

        </form>
        <div>
            <a href="/register"><button class="btn btn-primary">Üye Olunuz</button></a>

        </div>


        <!-- /.social-auth-links -->



    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


<!-- jQuery 3 -->
<script src="/backend/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/backend/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="/backend/plugins/iCheck/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
</script>
</div>
</body>
</html>
