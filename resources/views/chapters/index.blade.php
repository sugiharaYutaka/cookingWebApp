<!DOCTYPE html>
<html>
<head>
    <title>チャプター選択</title>
    <!-- Bootstrap CDNを読み込む -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: sans-serif;
        }


        .btn-chapter {
            width: 200px;
            height: 60px;
            margin-bottom: 10px;
            display: block;
        }
        .centered {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            transition: opacity 0.5s ease-in-out;
        }
        .details {
            display: none;
            border: 2px solid black;
            padding: 10px;
            position: relative;
            width: 200px; /* ボタンと同じ幅に設定 */
            transition: opacity 0.5s ease-in-out;
        }
        .close-btn {
            display: none;
            position: absolute;
            top: -10px;
            right: -10px;
        }
        .btn-wrapper {
            position: relative;
            transition: transform 0.3s ease-in-out;
        }
    </style>
</head>
<body>
    <div class="container centered">
        <div class="row mx-2">
            <div class="col-md-12">
                <div class="btn-wrapper" style="transition: transform 0.3s ease-in-out;">
                    <button class="btn btn-primary btn-chapter mb-3" onclick="showDetails('chapter1')">チャプター1</button>
                    <div id="chapter1" class="details">
                        <button class="btn-close close-btn" onclick="hideDetails('chapter1')"></button>
                        <p>チャプター1の詳細な内容がここに表示されます。</p>
                        <button onclick="nextChapter()">次のチャプターに移動</button>
                    </div>
                </div>
                <div class="btn-wrapper" style="transition: transform 0.3s ease-in-out;">
                    <button class="btn btn-primary btn-chapter mb-3" onclick="showDetails('chapter2')">チャプター2</button>
                    <div id="chapter2" class="details">
                        <button class="btn-close close-btn" onclick="hideDetails('chapter2')"></button>
                        <p>チャプター2の詳細な内容がここに表示されます。</p>
                        <button onclick="nextChapter()">次のチャプターに移動</button>
                    </div>
                </div>
                <!-- 必要なチャプターボタンと詳細内容を追加 -->
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScriptと独自のJavaScriptを読み込む -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function showDetails(chapterId) {
            var details = document.getElementById(chapterId);
            var allDetails = document.querySelectorAll('.details');
            allDetails.forEach(function(item) {
                if (item.id !== chapterId) {
                    item.style.display = 'none';
                }
            });
            if (details.style.display === "none") {
                details.style.display = "block";
                var nextChapterButtons = document.querySelectorAll('.btn-wrapper');
                var offset = 0;
                var found = false;
                for (var i = 0; i < nextChapterButtons.length; i++) {
                    if (found) {
                        nextChapterButtons[i].style.transform = `translateY(${60}px)`;
                    }
                    if (nextChapterButtons[i].querySelector('button').id === chapterId) {
                        found = true;
                    }
                }
            } else {
                details.style.display = "none";
                var nextChapterButtons = document.querySelectorAll('.btn-wrapper');
                for (var i = 0; i < nextChapterButtons.length; i++) {
                    nextChapterButtons[i].style.transform = '';
                }
            }
        }

        function hideDetails(chapterId) {
            var details = document.getElementById(chapterId);
            details.style.display = "none";
            var nextChapterButtons = document.querySelectorAll('.btn-wrapper');
            for (var i = 0; i < nextChapterButtons.length; i++) {
                nextChapterButtons[i].style.transform = '';
            }
        }

        function nextChapter() {
            // 次の画面に移動する処理を記述する（例えば、ページ遷移など）
            alert('次のチャプターに移動します。');
            // この部分に次の画面に遷移するコードを追加する
        }
    </script>
</body>
</html>