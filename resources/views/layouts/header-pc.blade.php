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
            <!--<div class="col-lg-2">
            </div>-->
            <div class="col-2 d-flex">
                <!--<a><img class="logo" src="{{asset('image/logo.png')}}"></a>-->
                <button type="button"  style="border: none; background: transparent;" class="btn"><a href="{{ route('top') }}"><img class="logo" src="{{asset('image/logo.png')}}"></a></button>
            </div>
            <div class="col-lg-1">
            </div>
            <div class="col-lg-1">
            <button type="button" class="btn"><a href="{{ route('top') }}" class="no-underline text-dark"><img src="{{ asset('image/cooking.png') }}" class="headerbotton"><br>通常モード</a></button>
            </div>
            <div class="col-lg-1">
            <button type="button" class="btn"><a href="{{ route('home') }}" class="no-underline text-dark"><img src="{{ asset('image/home.png') }}" class="headerbotton"><br>ホーム</a></button>
            </div>
            <div class="col-lg-1">
            <button type="button" class="btn"><a href="{{ route('post') }}" class="no-underline text-dark"><img src="{{ asset('image/post.png') }}" class="headerbotton"><br>投稿</a></button>
            </div>
            <div class="col-lg-1">
            <button type="button" class="btn"><a href="{{ route('profile') }}" class="no-underline text-dark"><img src="{{ asset('image/profile.png') }}" class="headerbotton"><br>プロフィール</a></button>
            </div>
            <div class="col-lg-4">
            </div>
            <div class="col-1">
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
  <style>

        @media(max-width:750px) {
            .headerbotton {

                width: 32px;
                height: 32px;
            }
        }

        @media(min-width:751px) {
            .headerbotton {

                width: 32px;
                height: 32px;
            }
        }
    </style>
</body>

  @extends('layouts.modal')
