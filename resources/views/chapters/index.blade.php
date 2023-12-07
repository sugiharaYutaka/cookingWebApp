<!DOCTYPE html>
<html>
<head>
<<<<<<< HEAD

=======
>>>>>>> f7dd0b89631bbfbbdf2f8bd66bd7a3c6421395ad
    <title>チャプター選択</title>
    <!-- Bootstrap CDNを読み込む -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
<<<<<<< HEAD

body {
        font-family: 'Arial', メイリオ; /* ここでフォントを変更します */
        /* 他のフォントを指定する場合は適切なフォント名を使用してください */
    }
=======
        body {
            font-family: sans-serif;
        }

>>>>>>> f7dd0b89631bbfbbdf2f8bd66bd7a3c6421395ad

        .btn-chapter {
            width: 200px;
            height: 60px;
            margin-bottom: 10px;
            display: block;
<<<<<<< HEAD
            
=======
>>>>>>> f7dd0b89631bbfbbdf2f8bd66bd7a3c6421395ad
        }
        .centered {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
<<<<<<< HEAD
        }
        .details {
            opacity: 0;
=======
            transition: opacity 0.5s ease-in-out;
        }
        .details {
            display: none;
>>>>>>> f7dd0b89631bbfbbdf2f8bd66bd7a3c6421395ad
            border: 2px solid black;
            padding: 10px;
            position: relative;
            width: 200px; /* ボタンと同じ幅に設定 */
<<<<<<< HEAD
            transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out; /* フェードインとずれるアニメーション */
            transform: translateY(-20px); /* 最初は上にずらして非表示 */
        }
        .close-btn {
            display: none; /* バツボタンを非表示 */
=======
            transition: opacity 0.5s ease-in-out;
        }
        .close-btn {
            display: none;
>>>>>>> f7dd0b89631bbfbbdf2f8bd66bd7a3c6421395ad
            position: absolute;
            top: -10px;
            right: -10px;
        }
        .btn-wrapper {
            position: relative;
<<<<<<< HEAD
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px; /* ボタン間の余分な空白を除去 */
        }
 

    /* 他のカスタムスタイルがある場合は適宜追加してください */
=======
            transition: transform 0.3s ease-in-out;
        }
>>>>>>> f7dd0b89631bbfbbdf2f8bd66bd7a3c6421395ad
    </style>
</head>
<body>
    <div class="container centered">
        <div class="row mx-2">
            <div class="col-md-12">
                <div class="btn-wrapper" style="transition: transform 0.3s ease-in-out;">
<<<<<<< HEAD
                    <button class="btn btn-primary btn-chapter mb-2" onclick="showDetails('chapter1')">チャプター1</button>
=======
                    <button class="btn btn-primary btn-chapter mb-3" onclick="showDetails('chapter1')">チャプター1</button>
>>>>>>> f7dd0b89631bbfbbdf2f8bd66bd7a3c6421395ad
                    <div id="chapter1" class="details">
                        <button class="btn-close close-btn" onclick="hideDetails('chapter1')"></button>
                        <p>チャプター1の詳細な内容がここに表示されます。</p>
                        <button onclick="nextChapter()">次のチャプターに移動</button>
                    </div>
                </div>
                <div class="btn-wrapper" style="transition: transform 0.3s ease-in-out;">
<<<<<<< HEAD
                    <button class="btn btn-primary btn-chapter mb-2" onclick="showDetails('chapter2')">チャプター2</button>
=======
                    <button class="btn btn-primary btn-chapter mb-3" onclick="showDetails('chapter2')">チャプター2</button>
>>>>>>> f7dd0b89631bbfbbdf2f8bd66bd7a3c6421395ad
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
<<<<<<< HEAD
                    item.style.opacity = '0'; // すべての詳細画面を非表示
                    item.style.transform = 'translateY(-20px)'; // すべての詳細画面を上にずらす
                }
            });
            if (details.style.opacity === "0") {
                details.style.opacity = "1"; // 選択された詳細画面を表示
                details.style.transform = "translateY(0)"; // 選択された詳細画面を元の位置に移動
            } else {
                details.style.opacity = "0"; // 再度押された場合は非表示に
                details.style.transform = "translateY(-20px)"; // 再度押された場合は上にずらす
=======
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
>>>>>>> f7dd0b89631bbfbbdf2f8bd66bd7a3c6421395ad
            }
        }

        function hideDetails(chapterId) {
            var details = document.getElementById(chapterId);
<<<<<<< HEAD
            details.style.opacity = "0"; // 詳細画面を非表示
            details.style.transform = "translateY(-20px)"; // 詳細画面を上にずらす
=======
            details.style.display = "none";
            var nextChapterButtons = document.querySelectorAll('.btn-wrapper');
            for (var i = 0; i < nextChapterButtons.length; i++) {
                nextChapterButtons[i].style.transform = '';
            }
>>>>>>> f7dd0b89631bbfbbdf2f8bd66bd7a3c6421395ad
        }

        function nextChapter() {
            // 次の画面に移動する処理を記述する（例えば、ページ遷移など）
            alert('次のチャプターに移動します。');
            // この部分に次の画面に遷移するコードを追加する
        }
    </script>
</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> f7dd0b89631bbfbbdf2f8bd66bd7a3c6421395ad
