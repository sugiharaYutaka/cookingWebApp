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
                <strong>親子丼の材料（２人分／小丼なら３人分）</strong>
            </div>
            <div class="card-body">
                <ul>
                    <li class="inlist1"><u>具材</u></li>
                    <li>鶏もも肉 ··· 100g</li>
                    <li>卵 ··· 4個</li>
                    <li>三つ葉 ··· 1/4束ほど</li>
                    <li class="inlist2"><u>調味料</u></li>
                    <li class="dashi">だし汁 ··· 大さじ4</li>
                    <li class="dashi">みりん ··· 大さじ4</li>
                    <li class="dashi">醤油 ··· 大さじ2~2と1/2</li>
                    <li class="dashi">砂糖 ··· 小さじ2</li>
                </ul>
            </div>
        </div>




        <div class="row"></div>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <div class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed text-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <span class="mx-auto d-block">
                                材料の画像
                            </span>
                            <!--- アコーディオンを閉じた マージン消す--->
                            <style>.accordion-button.collapsed.text-center::after{ margin:0; }</style>
                            <!--- アコーディオンを開いた時 マージン消す--->
                            <style>.accordion-button.text-center::after{ margin:0; }</style>

                        </button>
                    </div>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">AAA...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
