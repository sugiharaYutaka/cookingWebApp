@extends('layouts.header-' . (Agent::isMobile() ? 'phone' : 'pc'))

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>プロフィール - CookingWeb</title>

    <style>
        body {
            padding-top: 75px;
            padding-bottom: 80px;
        }

        .center {
            text-align: center;
        }

        .center img {
            height: 120px;
        }



        .flex-name,
        .flex-comment,
        .flex-history {
            display: flex;
            flex-direction: row;
        }

        .forminput p {
            margin-left: 20px;
            font-size: 18px;
            width: 90px;
        }

        .forminput input {
            height: 30px;
            width: 240px;
            font-size: 18px;
        }

        .forminput textarea {
            width: 240px;
            font-size: 14px;
            resize: none;
        }

        .forminput .input {
            border-radius: 3px;
            /*ボックス角の丸み*/
            border: 2px solid #ddd;
            /*枠線*/
            box-sizing: border-box;
            /*横幅の解釈をpadding, borderまでとする*/
        }

        .forminput .input:focus {
            box-shadow: 0 0 5px 0 rgba(255, 153, 0, 1);
            border: 2px solid #FFF !important;
            outline: 0;
        }




        .forminput input.submit-button {
            display: block;
            text-decoration: none;
            height: 40px;
            width: 140px;
            margin: auto;
            font-weight: bold;
            border: 2px solid #111;
            color: #228b22;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="center">
        <h1>プロフィール</h1>
        <img src="https://t3.ftcdn.net/jpg/05/05/44/78/360_F_505447855_pI5F0LDCyNfZ2rzNowBoBuQ9IgT3EQQ7.jpg">
    </div>

    <hr>

    <form action="/profile" method="post" class="forminput">

        @foreach($data as $userData)
        @endforeach

        {{ $data }}

        <div class="flex-name">
            <p>名前</p>

            <input type="text" class="input" name="name" value="{{ $userData->name }}">
        </div>
        <hr>

        <div class="flex-comment">
            <p>自己紹介</p>
            <textarea class="input" id="comment" cols="35" rows="5">{{ $userData->text }}</textarea>
        </div>

        <hr>

        <div class="flex-history">
            <p>料理歴</p>
            <input type="text" class="input" name="history" value="{{ $userData->history }}">
        </div>

        <input class="submit-button" type="submit" value="変更">

    </form>
</body>

</html>

@extends('layouts.snsfooter')