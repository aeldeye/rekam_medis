<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
    <title>Aplikasi Rekam Medis</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('adm_temp/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adm_temp/assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adm_temp/assets/vendor/linearicons/style.css') }}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('adm_temp/assets/css/main.css') }}">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="{{ asset('adm_temp/assets/css/demo.css') }}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="icon" sizes="76x76" href="{{ asset('adm_temp/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('adm_temp/assets/img/favicon.png') }}">
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle">
                <div class="auth-box ">
                    <div class="left">
                        <div class="content">
                            <div class="header">
                                <div class="logo text-lg-center"><img
                                        src="{{ asset('adm_temp/assets/img/favicon.png') }}" alt="Puskesmas-Logo">
                                </div>
                                <p class="lead">LOGIN</p>
                            </div>
                            <form class="form-auth-small" action="{{ url('login/proses') }}" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">Username</label>
                                    <input autofocus name="username" type="text"
                                        class="form-control @error('username')
                                    is-invalid
                                @enderror"
                                        id="username" value="" placeholder="Username">
                                    @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">Password</label>
                                    <input name="password" type="password"
                                        class="form-control @error('password')
                                    is-invalid
                                @enderror"
                                        id="password" value="" placeholder="Password">
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-success btn-lg btn-block">LOGIN</button>
                            </form>
                        </div>
                    </div>
                    <div class="right">
                        <div class="overlay"></div>
                        <div class="content text">
                            <h1 class="heading page-header">Aplikasi Rekam Medis</h1>
                            <h1 class="heading">Puskesmas Desa Butang Baru Kecamatan Mandiangin Timur</h1>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->
</body>

</html>
