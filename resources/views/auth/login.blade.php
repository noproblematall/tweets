<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login</title>

    <!-- vendor css -->
    <link href="{{asset('css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/ionicons.min.css')}}" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{asset('css/bracket.css')}}">
    <link rel="stylesheet" href="{{asset('css/bracket.simple-white.css')}}">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-gray-200 ht-100v">
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base" style="padding-top:20px;">
                <div class="signin-logo tx-center tx-28 tx-bold tx-inverse" style="margin-bottom:15px;"><a href="{{route('welcome')}}"><img src="{{asset('img/logo.png')}}" alt="LOGO" width="60" srcset=""></a></div>
                <div class="tx-center mg-b-30">Please enter your credentials</div>

                <div class="form-group">
                    <input type="text" class="form-control" name="username" value="{{old('username')}}" placeholder="Enter your username">
                    @error('username')
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div><!-- form-group -->
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Enter your password">
                    @error('password')
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div><!-- form-group -->
                <button type="submit" class="btn btn-info btn-block">{{ __('Login') }}</button>
            </div><!-- login-wrapper -->
        </form>

    </div><!-- d-flex -->

    {{-- <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script> --}}

  </body>
</html>

