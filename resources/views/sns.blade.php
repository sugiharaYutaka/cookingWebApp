@extends('layouts.header-' . (Agent::isMobile() ? 'phone' : 'pc'))

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style>
    /* 追加のCSS */
    .full-height {
        height: 100%;
    }

    .card {
        min-height: 80vh;
    }

    .full-width {
        width: 100%;
    }

    .full-height-textarea {
        height: 100%;
        /* カードの高さいっぱいにテキストエリアを広げる */
        resize: none;
        /* ユーザーがリサイズできないようにする */
    }
</style>

@section('content')
<div class="container-fluid pt-4"> <!-- 画面いっぱいに広がるコンテナ -->
    <div class="row justify-content-center align-items-center"> <!-- コンテンツを中央に配置 -->
        <div class="col-md-12">
            <div class="card mt-5"> <!-- カードを画面いっぱいに広げる -->
                <div class="card-header">Create Image Post</div>

                <div class="card-body d-flex flex-column justify-content-between"> <!-- カード内コンテンツを垂直方向に配置 -->
                    <!-- ここにフォームやコンテンツを追加 -->

                    <!-- Image Upload Form -->
                    <button type="button" style="border: none; background: none;">テキストを入力</button>
                    <form method="POST" action="process.php">
                        <textarea id="userInput" name="userInput" class="form-control full-width full-height-textarea"></textarea>
                    </form>

                    <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="image" class="form-label">Select Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                    </form>

                    <button type="submit" class="btn btn-primary">送信</button>
                </div>
            </div>
        </div>
    </div>
</div>

@extends('layouts.footer')