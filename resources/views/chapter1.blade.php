<script src="https://www.academic-gihara0655.com/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
<link href="https://www.academic-gihara0655.com/bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
<link href="chapter.css" rel="stylesheet">

<script src="{{ asset('chapter.css') }}" defer></script>

<div class="entirety">
    <div class="container-fluid p-0">

        <!--- タイトルと画像の設置 --->
        <h1>chapter1 親子丼</h1>

        <div class="centerimg">
            <img src="{{ asset('images/oyakodon.jpg') }}" class="sizeimg"><br>
        </div>

        <!--- 料理の説明文 --->
        <div class="Description">
            <p class="tatehaba"><strong>調理時間：20分以下</strong></p>

            <p>卵と鶏肉だけで作れる手軽さもあって、親子丼は家庭料理の代表格ですが、実は作り方が意外と難しいものでもあります。</p>

            <p>作り方のコツは「鶏肉をあらかじめ煮汁でまとめて煮ておくこと」や「卵の火の通し方」など。片手鍋で２人前を一度に作るレシピにしています。ぜひお試しください。</p>
        </div>

        <!--- 材料 --->
        <br>
        <div class="card">
            <div class="card-header">
                <strong>親子丼の材料（１人前）</strong>
            </div>
            <div class="card-body">
                <ul>
                    <li class="inlist1"><u>具材</u></li>
                    <li>ごはん ··· 200g</li>
                    <li>鶏もも肉 ··· 100g</li>
                    <li>玉ねぎ ··· 1/4個</li>
                    <li>卵 ··· 1~2個</li>

                    <li class="inlist2"><u>調味料</u></li>
                    <li class="dashi">水 ··· 100ml</li>
                    <li class="dashi">しょうゆ ··· 大さじ1</li>
                    <li class="dashi">みりん ··· 大さじ4</li>
                    <li class="dashi">料理酒 ··· 大さじ1</li>
                    <li class="dashi">砂糖 ··· 大さじ1/2</li>

                    <li class="inlist3"><u>トッピング</u></li>
                    <li>三つ葉 ··· 1/4束ほど（あれば色どりが良くなります）</li>
                    
                </ul>
            </div>
        </div>



        <!--- アコーディオンパネル --->
        <div class="row"></div>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <div class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed text-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <span class="mx-auto d-block">
                            材料の画像
                        </span>
                        <!--- アコーディオンを閉じた マージン消す--->
                        <style>
                            .accordion-button.collapsed.text-center::after {
                                margin: 0;
                            }
                        </style>
                        <!--- アコーディオンを開いた時 マージン消す--->
                        <style>
                            .accordion-button.text-center::after {
                                margin: 0;
                            }
                        </style>

                    </button>
                </div>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div>
                            <img src="{{ asset('images/torimomo.jpg') }}"><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--- 作り方 --->

    <h2>親子丼の作り方</h2>
    <div class="card">
        <div class="card-header">
            STEP1 準備を整えよう
        </div>
        <div class="card-body">
            <div class="youtube_wrap">
                <iframe src="https://www.youtube.com/embed/3O4J6E7ERjc" title="YouTube video player"></iframe>
            </div>

            <div class="cooking_text">
                <br>まずは、動画の通りまな板と包丁を作業スペースに置きましょう。
                <br>ボールに玉ねぎ1個が漬かるくらいの水をため、玉ねぎを5分～10分程度漬けておきましょう。<br><br>
            </div>

            <div class="textBox">玉ねぎを水に漬けておくと、皮が柔らかくなって剥きやすくなります。</div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            STEP2 三つ葉を切ろう
        </div>
        <div class="card-body">
            <div class="youtube_wrap">
                <iframe src="https://www.youtube.com/embed/3O4J6E7ERjc" title="YouTube video player"></iframe>
            </div>

            <div class="cooking_text">
                <br>まずは、根元を切り落としましょう。
                <br>3cmくらいの幅で切ったら、別の器に置いておきましょう。
            </div>
            
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            STEP3 鶏もも肉を切ろう
        </div>
        <div class="card-body">
            <div class="youtube_wrap">
                <iframe src="https://www.youtube.com/embed/3O4J6E7ERjc" title="YouTube video player"></iframe>
            </div>

            <div class="cooking_text">
                <br>鶏もも肉は小さめの一口大に切りましょう。
                <br>1cm～2cmくらいを目安にすると良いと思います。
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            STEP4 玉ねぎを切ろう
        </div>
        <div class="card-body">
            <div class="youtube_wrap">
                <iframe src="https://www.youtube.com/embed/3O4J6E7ERjc" title="YouTube video player"></iframe>
            </div>

            <!--- 皮むき --->
            <div class="cooking_text">
                <br>まずは、皮むきからです。
                <br>1.根本の部分を、皮を少し残して切ります。
                <br>2.皮を押さえてめくります。
                <br>反対側も同じようにします。
            </div>

            <div class="textBox">
                根本と頭を切り落とすときに皮をめくることによって、
                <br>皮の面積が分断され、剥きやすくなります。
            </div>

            <!--- 切り方 --->

            <div class="youtube_wrap">
                <iframe src="https://www.youtube.com/embed/3O4J6E7ERjc" title="YouTube video player"></iframe>
            </div>

            <div class="cooking_text">
                <br>では、皮をむいた玉ねぎを切っていきましょう。
                <br>1/4の大きさに切り、5mm幅くらいで包丁を真っすぐ入れて切りましょう。
            </div>

            <div class="textBox">
                難しいと感じたら幅は広くても大丈夫です。
                <br>ゆっくり切っていきましょう。
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            STEP5 つゆを沸かそう
        </div>
        <div class="card-body">
            <div class="youtube_wrap">
                <iframe src="https://www.youtube.com/embed/3O4J6E7ERjc" title="YouTube video player"></iframe>
            </div>

            <div class="cooking_text">
                <br>フライパンに水を入れ、火をつけます。
                <br>水以外の調味料も順番に入れていき、最後に玉ねぎも入れます。
                <br>煮立ったら鶏肉も入れましょう。
            </div>

            <div class="textBox">
                火はずっと中火で大丈夫です。
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            STEP6 卵で閉じよう
        </div>
        <div class="card-body">
            <div class="youtube_wrap">
                <iframe src="https://www.youtube.com/embed/3O4J6E7ERjc" title="YouTube video player"></iframe>
            </div>

            <div class="cooking_text">
                <br>鶏肉にも火が通ったら、溶き卵の半量を加えます。
                <br>3秒くらいかき混ぜた後、蓋をして火を弱火にします。
                <br>1分経ったら蓋を開け、残りの溶き卵も加えて、中火に戻します。
                <br>10秒ほど経ったら火を止めて、器にごはんをよそいましょう。
            </div>

            <div class="textBox">
                溶き卵を入れた後は、あまり混ぜすぎないようにすることで<br>
                とろふわ食感に仕上がります。
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            STEP7 完成!!!
        </div>
        <div class="card-body">
            <div class="youtube_wrap">
                <iframe src="https://www.youtube.com/embed/3O4J6E7ERjc" title="YouTube video player"></iframe>
            </div>

            <div class="cooking_text">
                <br>ごはんの上に盛りつけましょう。
                <br>三つ葉を用意している場合は、三つ葉を乗せて完成です。
            </div>

        </div>
    </div>

    <button type="button"><a href="{{ route('post') }}">SNSに投稿してみよう!</a></button>


</div>
