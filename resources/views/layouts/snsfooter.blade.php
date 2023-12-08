<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <!-- Bootstrap CSS JS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>


<body>

    <!-- コンテンツ -->
    <div class="content">
        <!-- ここにページのコンテンツが入ります -->
    </div>

    <!-- フッター -->
    <footer class="footer fixed-bottom bg-color-2">
        <div class="container">
            <div class="row text-center my-1">
                <div class="btn-group" role="group" aria-label="Button group">
                    <button type="button" class="btn"><a href="{{ route('top') }}" class="no-underline text-dark"><img src="{{ asset('image/cooking.png') }}" class="footericon"><br>通常モード</a></button>
                    <button type="button" class="btn"><a href="{{ route('home') }}" class="no-underline text-dark"><img src="{{ asset('image/home.png') }}" class="footericon"><br>ホーム</a></button>
                    <button type="button" class="btn"><a href="{{ route('post') }}" class="no-underline text-dark"><img src="{{ asset('image/post.png') }}" class="footericon"><br>投稿</a></button>
                    <button type="button" class="btn"><a href="{{ route('profile') }}" class="no-underline text-dark"><img src="{{ asset('image/profile.png') }}" class="footericon"><br>プロフィール</a></button>
                </div>
            </div>
        </div>
    </footer>

    <style>
        /* クラス適用したので必要なくなった
        .footer {
            background-color: #EBE3D5;
        }
        */

        @media(max-width:750px) {
            .footericon {

                width: 32px;
                height: 32px;
            }
        }

        @media(min-width:751px) {
            .footericon {

                width: 40px;
                height: 40px;
            }
        }
    </style>

</body>

</html>