<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login Admin Wakluang</title>

    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="{{ asset('assetsadmin/css/lib/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsadmin/css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsadmin/css/lib/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsadmin/css/lib/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsadmin/css/style.css') }}" rel="stylesheet">
</head>

<body class="bg-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="login-content">
                    <div class="login-form">
                        <h5 class="text-center">Login Admin</h5>
                        @if(Session::has('alert'))
                            <div class="alert alert-{{ Session::get('alert.type') }} alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                {{ Session::get('alert.message') }}
                            </div>
                        @endif
                        <form action="/login" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assetsadmin/js/lib/jquery.min.js') }}"></script>
    <script src="{{ asset('assetsadmin/js/lib/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assetsadmin/js/scripts.js') }}"></script>

</body>

</html>