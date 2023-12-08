@extends('layouts.header-' . (Agent::isMobile() ? 'phone' : 'pc'))

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>トップページ - CookingWeb</title>

    <style>
        body {
            padding-top: 145px;
        }

        .Container {
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        .Box-Container {
            display: flex;
            width: fit-content;
            transition: transform 0.3s ease;
            transform: translateX(0);
        }

        .Box {
            flex-shrink: 0;
            height: 200px;
            margin-right: 10px;
            border-radius: 10px;
            background-color: #ccc;
        }

        .Arrow {
            position: absolute;
            margin: 20px 30%;
            transform: translateY(-50%);
            width: 30px;
            height: 30px;
            color: #000;
            font-size: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .Arrow.left {
            left: 0;
        }

        .Arrow.right {
            right: 0;
        }

        .Hide {
            display: none;
        }



        .flex {
            display: flex;
            flex-direction: row;
        }

        .tutorial img {
            width: 95%;
            border-radius: 10px;
        }

        .flex>.tutorial {
            margin: 5px 5px 5px;
            border: #000 solid 1px;
            text-align: center;
            flex: 50%;
        }

        .flex>.iine {
            margin: 5px 5px 5px;
            border: #d0d solid 1px;
            text-align: center;
            flex: 50%;
        }



        .flex-iine {
            display: flex;
            flex-direction: column;
        }

        .flex-iine .first {
            border: #00d solid 1px;
        }

        .flex-iine .contents {
            display: flex;
            flex-direction: row;
            border: #0f0 solid 1px;
            flex: 50%;
        }

        .flex-iine img {
            width: 95%;
            border-radius: 10px;
        }
    </style>

</head>

<body>
    <!-- 写真横スクロール -->
    <div class="Container">
        <div class="Box-Container">
            <img class="Box" src="https://mpreview.aflo.com/epIejrhhrejN/afloimagemart_228170109.jpg">
            <img class="Box" src="https://mpreview.aflo.com/n8vjjMgg0zIM/afloimagemart_214335497.jpg">
            <img class="Box" src="https://mpreview.aflo.com/mWcJjXEENUWI/afloimagemart_24797895.jpg">
            <img class="Box" src="https://mpreview.aflo.com/Y0zAjcxxF39u/afloimagemart_176749297.jpg">
            <!-- 必要な数の.Box要素を追加 -->
        </div>
    </div>
    <div class="Arrow left">＜</div>
    <div class="Arrow right">＞</div>
    <!-- 写真横スクロール end -->

    <br>
    <hr>

    <div class="flex">
        <!-- 料理チュートリアル -->
        <div class="tutorial">
            <a href="https://www.google.co.jp/">
                <p>
                    料理チュートリアル<br>
                    ステップ0へ
                </p>
                <img class="tutorial-img" src="https://mpreview.aflo.com/epIejrhhrejN/afloimagemart_228170109.jpg">
            </a>
        </div>
        <!-- 料理チュートリアル end -->


        <!-- いいね数ランキング -->
        <div class="iine">
            <p>過去30日間のいいね数</p>
            <div class="flex-iine">
                <div class="first">
                    <div class="contents">
                        <p>#1</p>
                        <img src="https://mpreview.aflo.com/epIejrhhrejN/afloimagemart_228170109.jpg">

                    </div>
                </div>
                <div class="second">
                    <div class="contents">
                        <p>#2</p>
                        <img src="https://mpreview.aflo.com/epIejrhhrejN/afloimagemart_228170109.jpg">

                    </div>
                </div>
                <div class="third">
                    <div class="contents">
                        <p>#3</p>
                        <img src="https://mpreview.aflo.com/epIejrhhrejN/afloimagemart_228170109.jpg">

                    </div>
                </div>
            </div>
            <!-- いいね数ランキング end -->

        </div>

</body>

<script>
    const container = document.querySelector('.Container');
    const boxContainer = document.querySelector('.Box-Container');
    const leftArrow = document.querySelector('.Arrow.left');
    const rightArrow = document.querySelector('.Arrow.right');
    const scrollAmount = 250; // ３回で最大値まで行く程度の数値

    const width = (boxContainer.offsetWidth - container.offsetWidth) / 2;
    const defaultScrollAmount = Math.max(width, 0);
    boxContainer.style.transform = `translateX(-${defaultScrollAmount}px)`;

    leftArrow.addEventListener('click', () => {
        const containerWidth = container.offsetWidth;
        const maxScrollAmount = boxContainer.offsetWidth - containerWidth;
        const currentScrollAmount = Math.abs(parseInt(boxContainer.style.transform.split('(')[1])) || 0;
        const newScrollAmount = Math.max(currentScrollAmount - scrollAmount, 0);
        moveImage(newScrollAmount, maxScrollAmount);
    });

    rightArrow.addEventListener('click', () => {
        const containerWidth = container.offsetWidth;
        const maxScrollAmount = boxContainer.offsetWidth - containerWidth;
        const currentScrollAmount = Math.abs(parseInt(boxContainer.style.transform.split('(')[1])) || 0;
        const newScrollAmount = Math.min(currentScrollAmount + scrollAmount, maxScrollAmount);
        moveImage(newScrollAmount, maxScrollAmount);

    });

    function moveImage(scrollAmount, maxScrollAmount) {
        if (scrollAmount === 0) {
            boxContainer.style.transform = `translateX(-${maxScrollAmount}px)`;
        } else if (scrollAmount === maxScrollAmount) {
            boxContainer.style.transform = `translateX(-0px)`;
        } else {
            boxContainer.style.transform = `translateX(-${scrollAmount}px)`;
        }
    }
</script>

</html>

@extends('layouts.footer')