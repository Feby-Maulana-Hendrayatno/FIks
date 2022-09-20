<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>JARING | Login</title>
    <link rel="stylesheet" href="{{ url('ui') }}/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="{{ url('ui') }}/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('ui') }}/assets/libs/css/style.css">
    <link rel="stylesheet" href="{{ url('ui') }}/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>
</head>

<body>
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center">
                <img src="{{ url('/gambar/logo.png') }}" alt="logo">
                <span class="splash-description">Silahkan Login Terlebih Dahulu</span>
            </div>
            <div class="card-body">
                {{ Form::open(['url' => 'admin/login']) }}
                <div class="form-group">
                    {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'E - Mail']) }}
                </div>
                <div class="form-group">
                    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
                </div>
                {{ Form::submit('Sign In', ['class' => 'btn btn-primary btn-sm btn-block']) }}
                {{ Form::close() }}
            </div>
        </div>
    </div>
    <script src="{{ url('ui') }}/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="{{ url('ui') }}/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>
