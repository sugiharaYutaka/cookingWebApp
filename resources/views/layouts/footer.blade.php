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
    <footer class="footer fixed-bottom">
        <div class="container">
            <div class="row text-center my-1">
                <div class="btn-group" role="group" aria-label="Button group">
                    <button type="button" href="{{ route('study') }}" class="btn text-dark text-decoration-none"><img src="{{ asset('image/study.png') }}" style="width: 48px; height: 48px;"><br>勉強</button>
                    <button type="button" href="{{ route('study') }}" class="btn text-dark text-decoration-none"><img src="{{ asset('image/recipe.png') }}" style="width: 48px; height: 48px;"><br>献立</button>
                    <button type="button" href="{{ route('study') }}" class="btn text-dark text-decoration-none"><img src="{{ asset('image/SNS.png') }}" style="width: 48px; height: 48px;"><br>SNS</button>
                    <button type="button" href="{{ route('study') }}" class="btn text-dark text-decoration-none"><img src="{{ asset('image/dictionary.png') }}" style="width: 48px; height: 48px;"><br>知識箱</button>
                </div>
            </div>
        </div>
    </footer>

    <style>
        .footer {
            background-color: #e3d7a3;
        }
    </style>

</body>

</html>