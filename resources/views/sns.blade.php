@extends('layouts.header-' . (Agent::isMobile() ? 'phone' : 'pc'))

<<<<<<< HEAD <!DOCTYPE html>
    <html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <style>
        /* 追加のCSS */
        html,

        .full-height {
            height: 100%;
        }

        .card {
            min-height: 80vh;
            padding: 20px;
            margin: 0;

        }

        #userInput {
            width: 100%;
            height: 400px;
            /* 適切な高さに調整してください */
            resize: none;
            border: 2px solid #ccc;
            border-radius: 8px;
            padding: 8px;
            box-sizing: border-box;
        }
    </style>

    @section('content')
    <div class="container-fluid h-100 pt-4"> <!-- 画面いっぱいに広がるコンテナ -->
        <div class="row h-100 justify-content-center align-items-center"> <!-- コンテンツを中央に配置 -->
            <div class="col-md-12 h-100">
                <div class="card w-100 h-100 mt-5"> <!-- カードを画面いっぱいに広げる -->
                    <div class="card-header">Create Image Post</div>

                    <div class="card-body h-100 d-flex flex-column "> <!-- カード内コンテンツを垂直方向に配置 -->
                        <!-- ここにフォームやコンテンツを追加 -->
                        <!-- Image Upload Form -->
                        <button type="button" style="border: none; background: none;">テキストを入力</button>
                        <form method="POST" action="process.php">
                            <textarea id="userInput" name="userInput"></textarea>
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
    =======
    >>>>>>> 569f3d296303ec2c9107b3c64a29c7a8731cbe23


    @extends('layouts.footer')