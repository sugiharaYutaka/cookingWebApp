<!DOCTYPE html>
<html lang="ja">
<head>
    <script src="https://yu.academic-gihara0655.com/bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
    <link href="https://yu.academic-gihara0655.com/bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link type="text/css" rel="stylesheet" href="{{ asset('index.css') }}"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head>

<body class="mx-5">
    <a href="http://localhost/phpmyadmin/">http://localhost/phpmyadmin/</a>

    <form action="{{ route('debugRegister') }}" method="post">
        @csrf
        <span>usersテーブルにINSERTする</span><br>
        <input type="text" name="name" placeholder="ユーザネーム" required><br>
        <input type="text" name="email" placeholder="メールアドレス" required><br>
        <input type="text" name="password" placeholder="パスわーど" required><br>
        <input type="submit" value="登録"><br>
    </form>

    <form action="{{ route('debugPost') }}" method="POST">
        @csrf
        <span>sns_postsテーブルにINSERTする</span><br>
        <input type="text" name="text" placeholder="投稿内容" required><br>
        <input type="text" name="email" placeholder="投稿したユーザのメールアドレス" required><br>
        <input type="submit" value="登録"><br>
    </form>

    <form action="{{ route('debugReply') }}" method="POST">
        @csrf
        <span>sns_repliesテーブルにINSERTする</span><br>
        <input type="text" name="email" placeholder="リプライした人のemail" required><br>
        <input type="text" name="text" placeholder="リプライの内容" required><br>
        <input type="submit" value="登録"><br>
    </form>

    <form action="{{ route('debugProfile') }}" method="POST">
        @csrf
        <span>sns_profilesテーブルにINSERTする</span><br>
        <input type="text" name="email" placeholder="snsのプロフィールのemail" required><br>
        <input type="text" name="history" placeholder="料理歴(int)" required><br>
        <input type="text" name="text" placeholder="自己紹介" required><br>
        <input type="submit" value="登録"><br>
    </form>

    <form action="{{ route('debugFollow') }}" method="POST">
        @csrf
        <span>sns_followersテーブルにINSERTする</span><br>
        <input type="text" name="follower_email" placeholder="フォローした人のemail" required><br>
        <input type="text" name="following_email" placeholder="フォローされた人のemail" required><br>
        <input type="submit" value="登録"><br>
    </form>

    <form action="{{ route('debugChapter') }}" method="POST">
        @csrf
        <span>chapterテーブルにINSERTする</span><br>
        <input type="text" name="email" placeholder="email" required><br>
        <input type="text" name="progress" placeholder="チャプターの進捗状況(int)" required><br>
        <input type="submit" value="登録"><br>
    </form>
</body>
</html>
