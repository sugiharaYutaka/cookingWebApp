<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>SNS - 投稿一覧</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* ...（前回のスタイル） ... */

        .interaction-icons {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
        }

        .interaction-icons button {
            padding: 5px 15px;
            border-radius: 20px;
            cursor: pointer;
        }

        .like-btn {
            background-color: #e0245e;
            color: #fff;
            border: none;
        }

        .reply-btn {
            background-color: #1da1f2;
            color: #fff;
            border: none;
        }

        .comment-input {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <!-- ナビゲーションバー -->
    <!-- ...（前回のナビゲーションバー） ... -->

    <!-- コンテンツ -->
    <div class="container post-container">
        <h1>投稿一覧</h1>
        <!-- 投稿を表示するカード -->
        <div class="row">
            <div class="col-md-8 offset-md-2">
                 <!-- データベースからランダムに取得した投稿を表示する -->
                 @foreach($randomPosts as $post)
                    <div class="card post mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ $post->content }}</p>
                        <!-- いいねとリプライ（コメント）フォーム -->
                        <div class="interaction-icons">
                            <button class="like-btn">いいね</button>
                            <button class="reply-btn">リプライ</button>
                        </div>
                        <!-- コメント入力フォーム -->
                        <form class="comment-input" style="display: none;">
                            <div class="mb-3">
                                <label for="commentInput" class="form-label">コメントを入力</label>
                                <textarea class="form-control" id="commentInput" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">投稿</button>
                        </form>
                    </div>
                </div>
                <!-- 他の投稿を表示する場合は同様の構造を追加 -->
                <!-- <div class="card post">
                    <div class="card-body">
                        <h5 class="card-title">投稿タイトル2</h5>
                        <p class="card-text">投稿内容がここに表示されます。</p>
                        <div class="interaction-icons">
                            <button class="like-btn">いいね</button>
                            <button class="reply-btn">リプライ</button>
                        </div>
                        <form class="comment-input" style="display: none;">
                            <div class="mb-3">
                                <label for="commentInput" class="form-label">コメントを入力</label>
                                <textarea class="form-control" id="commentInput" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">投稿</button>
                        </form>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const replyButtons = document.querySelectorAll('.reply-btn');
        replyButtons.forEach(button => {
            button.addEventListener('click', function () {
                const commentInput = this.parentElement.nextElementSibling;
                if (commentInput.style.display === 'none') {
                    commentInput.style.display = 'block';
                } else {
                    commentInput.style.display = 'none';
                }
            });
        });
    </script>
</body>

</html>