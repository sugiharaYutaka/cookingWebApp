<!DOCTYPE html>
<html lang="ja">
<head>
    <script src="https://www.academic-gihara0655.com/bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
    <link href="https://www.academic-gihara0655.com/bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link type="text/css" rel="stylesheet" href="{{ asset('index.css') }}"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head>
<body>
  <div class="header fixed-top">
    <div class="container-fluid p0">
      <div class="row border">
        <nav class="navbar navbar-expand-lg navbar-light bg-light bg-color-2">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8 d-flex justify-content-center">
                <!--<a><img class="logo" src="{{asset('image/logo.png')}}"></a>-->
                <button type="button"  style="border: none; background: transparent;" class="btn"><a href="{{ route('top') }}"><img class="logo" src="{{asset('image/logo.png')}}"></a></button>
            </div>
            <div class="col-lg-2">
                @guest
                <a href="#modalProfile" data-bs-toggle="modal"><img src="{{ asset('image/user_icon.png') }}" class="user-icon" style="width: 48px; height: 48px;"/></a>
                 @else
                <a href="#modalProfile" data-bs-toggle="modal"><img src="{{ asset('') }}" class="user-icon" style="width: 48px; height: 48px;"/></a>
                 @endguest
            </div>
        </nav>
      </div>
    </div>
  </div>

  @extends('layouts.modal')
