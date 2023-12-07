@extends('layouts.header-' . (Agent::isMobile() ? 'phone' : 'pc'))
<html>
<head>
    <title>チャプター選択</title>
    <!-- Bootstrap CDNを読み込む -->
    <style>
        .btn-chapter {
            width: 400px;
            height: 60px;
            margin-bottom: 10px;
            display: block;
            font-family: 'Roboto', sans-serif;
        }
        .centered {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .details {
            opacity: 0;
            border: 2px solid black;
            padding: 10px;
            position: relative;
            width: 400px; /* ボタンと同じ幅に設定 */
            transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out; /* フェードインとずれるアニメーション */
            transform: translateY(-20px); /* 最初は上にずらして非表示 */
            background-color: #FFFF;
            color: black;
        }
        .close-btn {
            display: none; /* バツボタンを非表示 */
            position: absolute;
            top: -10px;
            right: -10px;
        }
        .btn-wrapper {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px; /* ボタン間の余分な空白を除去 */
        }
    </style>
</head>
<body style="margin-top: 150px; margin-bottom: 150px;  background-color:#F3EEEA;">
    <div class="container centered">
        <div class="row mx-2">
            <div class="col-md-12">
                <div class="btn-wrapper" style="transition: transform 0.3s ease-in-out;">
                    <button class="btn btn-secondary  mx-5 btn-chapter mb-2" onclick="showDetails('chapter1')">チャプター1</button>
                    <div id="chapter1" class="details">
                        <button class="btn-close close-btn" onclick="hideDetails('chapter1')"></button>
                        <p>親子丼</p>
                        <button onclick="location.href='chapter1.blade.php'">作り方説明へ</button>
                    </div>
                </div>
                <div class="btn-wrapper" style="transition: transform 0.3s ease-in-out;">
                    <button class="btn btn-secondary btn-chapter mb-2" onclick="showDetails('chapter2')">チャプター2</button>
                    <div id="chapter2" class="details">
                        <button class="btn-close close-btn" onclick="hideDetails('chapter2')"></button>
                        <p>チャプター2の詳細な内容がここに表示されます。</p>
                        <button onclick="nextChapter()">作り方説明</button>
                    </div>
                </div>
                <div class="btn-wrapper" style="transition: transform 0.3s ease-in-out;">
                    <button class="btn btn-secondary btn-chapter mb-2" onclick="showDetails('chapter3')">チャプター3</button>
                    <div id="chapter3" class="details">
                        <button class="btn-close close-btn" onclick="hideDetails('chapter3')"></button>
                        <p>チャプター3の詳細な内容がここに表示されます。</p>
                        <button onclick="nextChapter()">作り方説明</button>
                    </div>
                </div>
                <div class="btn-wrapper" style="transition: transform 0.3s ease-in-out;">
                    <button class="btn btn-secondary btn-chapter mb-2" onclick="showDetails('chapter4')">チャプター4</button>
                    <div id="chapter4" class="details">
                        <button class="btn-close close-btn" onclick="hideDetails('chapter4')"></button>
                        <p>チャプター4の詳細な内容がここに表示されます。</p>
                        <button onclick="nextChapter()">作り方説明</button>
                    </div>
                </div>
                <div class="btn-wrapper" style="transition: transform 0.3s ease-in-out;">
                    <button class="btn btn-secondary btn-chapter mb-2" onclick="showDetails('chapter5')">チャプター5</button>
                    <div id="chapter5" class="details">
                        <button class="btn-close close-btn" onclick="hideDetails('chapter5')"></button>
                        <p>チャプター5の詳細な内容がここに表示されます。</p>
                        <button onclick="nextChapter()">作りかた説明</button>
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
                    item.style.opacity = '0'; // すべての詳細画面を非表示
                    item.style.transform = 'translateY(-20px)'; // すべての詳細画面を上にずらす
                }
            });
            if (details.style.opacity === "0") {
                details.style.opacity = "1";
                details.style.opacity = "1"; // 選択された詳細画面を表示
                details.style.transform = "translateY(0)"; // 選択された詳細画面を元の位置に移動
            } else {
                details.style.opacity = "0"; // 再度押された場合は非表示に
                details.style.transform = "translateY(-20px)"; // 再度押された場合は上にずらす
            }
        }

        function hideDetails(chapterId) {
            var details = document.getElementById(chapterId);
            details.style.opacity = "0"; // 詳細画面を非表示
            details.style.transform = "translateY(-20px)"; // 詳細画面を上にずらす
        }

        function nextChapter() {
            // 次の画面に移動する処理を記述する（例えば、ページ遷移など）
            alert('次のチャプターに移動します。');
            // この部分に次の画面に遷移するコードを追加する
        }
    </script>
</body>
</html>

@extends('layouts.footer')