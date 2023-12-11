@extends('layouts.header-' . (Agent::isMobile() ? 'phone' : 'pc'))

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>トップページ - CookingWeb</title>

    <style>
        body {
            padding-top: 75px;
            padding-bottom: 80px;
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
            flex: 35%;
        }

        .flex-left {
            display: flex;
            flex-direction: column;
        }




        .flex .flex-left .tutorial {
            margin: 5px 5px 5px;
            text-align: center;
            padding: 0.5em 1em;
            background: #f0f7ff;
            border: dashed 2px #5b8bd0;
            /*点線*/
        }

        .flex .flex-left .tutorial p {
            margin: 0;
            padding: 0;
        }

        .flex .flex-left .tutorial img {
            width: 100%;
            border-radius: 10px;
        }





        .flex .flex-left .iine {
            margin: 5px 5px 5px;
            text-align: center;
        }





        .iine {
            display: flex;
            flex-direction: column;
        }

        .iine hr {
            margin: 8px 0px;
        }

        .iine .contents {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .iine .contents .text {
            display: flex;
            flex-direction: column;
        }

        .iine p {
            padding-left: 2px;
            text-align: left;
        }

        .iine .img {
            height: 100%;
            width: 60%;
            border-radius: 10px;
        }





        .circle {
            position: absolute;
            margin: 5px 22%;
            transform: translateY(-50%);
            width: 50px;
            height: 35px;
            font-size: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .rank-img {
            position: absolute;
            margin: 0px 21%;
            transform: translateY(-50%);
            width: 50px;
        }




        .iine .iine-amount {
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid #f1443e;
            border-radius: 5px;
            background-color: #fff;
            color: #f1443e;
            font-size: 1em;
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
        <div class="flex-left">
            <!-- 料理チュートリアル -->
            <p class="text-center h6">料理チュートリアル</p>
            <div class="tutorial">
                <a href="{{ route('study') }}">
                    <p>
                        ステップ0へ
                    </p>
                    <img class="tutorial-img" src="https://mpreview.aflo.com/epIejrhhrejN/afloimagemart_228170109.jpg">
                </a>
            </div>
            <!-- 料理チュートリアル end -->
        </div>


        <div class="flex-right">
            <!-- いいね数ランキング -->
            <p class="text-center h6">過去30日間のいいね数</p>
            <div class="iine">

                <hr>

                <div class="first">
                    <div class="contents">
                        <div class="text">
                            <img class="rank-img" src="https://illust-stock.com/wp-content/uploads/ranking-crown-no1.png">
                            <button class="btn btn-sm btn-outline-danger mx-1">30♡</button>
                            <p>タイトルーーーーー</p>
                        </div>
                        <img class="img" src="https://mpreview.aflo.com/epIejrhhrejN/afloimagemart_228170109.jpg">

                    </div>
                </div>

                <hr>

                <div class="second">
                    <div class="contents">
                        <div class="text">
                            <img class="rank-img" src="https://illust-stock.com/wp-content/uploads/ranking-crown-no2.png">
                            <button class="btn btn-sm btn-outline-danger mx-1">1♡</button>
                            <p>タイトルーーーーー</p>
                        </div>
                        <img class="img" src="https://mpreview.aflo.com/n8vjjMgg0zIM/afloimagemart_214335497.jpg">
                    </div>
                </div>

                <hr>

                <div class="third">
                    <div class="contents">
                        <div class="text">
                            <img class="rank-img" src="https://illust-stock.com/wp-content/uploads/ranking-crown-no3.png">
                            <button class="btn btn-sm btn-outline-danger mx-1">3♡</button>
                            <p>タイトルーーーーー</p>
                        </div>
                        <img class="img" src="https://mpreview.aflo.com/mWcJjXEENUWI/afloimagemart_24797895.jpg">
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
