<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/customize.css') }}"> -->
</head>

<body>
    <div class="container">
        <form method="post" class="m-t" role="form" action="{{ route('auth.login')}}">
            @csrf
            <h2>Login</h2>
            <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Email">
                @if ($errors -> has('email'))
                <span class="error-message">* {{
                        $errors->first('email')
                    }}
                </span>
                @endif
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password">
                @if ($errors -> has('password'))
                <span class="error-message">* {{
                        $errors->first('password')
                    }}
                </span>
                @endif
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

            <a href="#">
                <small>Forgot password</small>
            </a>
        </form>
        <div id="message"></div>
    </div>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>