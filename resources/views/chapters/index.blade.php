@extends('layouts.header-' . (Agent::isMobile() ? 'phone' : 'pc'))
<html>
<head>
    <title>チャプター選択</title>
    <!--- アコーディオンを閉じた マージン消す--->
    <style>.accordion-button.collapsed.text-center::after{ margin:0; }</style>
    <!--- アコーディオンを開いた時 マージン消す--->
    <style>.accordion-button.text-center::after{ margin:0; }</style>
</head>
<body style="margin-top: 150px; margin-bottom: 150px;  background-color:#F3EEEA;">
    <div class="container-fluid">
        <div class="row mx-2">
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button type="button" class="accordion-button collapsed text-center" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne" style="background-color: #676F77;color: #F3EEEA;">
                            <span class="mx-auto d-block">チャプター1</span>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <strong>チャプター1の詳細な内容がここに表示されます。</strong><br>
                            <a href="{{ route('chapter1') }}"><button type="button" class="btn btn-outline-secondary btn-sm">作り方説明</button></a>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button type="button" class="accordion-button collapsed text-center" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo" style="background-color: #676F77;color: #F3EEEA;">
                            <span class="mx-auto d-block">チャプター2</span>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <strong>チャプター2の詳細な内容がここに表示されます。</strong><br>
                            <a href="{{ route('chapter1') }}"><button type="button" class="btn btn-outline-secondary btn-sm">作り方説明</button></a>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button type="button" class="accordion-button collapsed text-center" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree" style="background-color: #676F77;color: #F3EEEA;">
                            <span class="mx-auto d-block">チャプター3</span>
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <strong>チャプター3の詳細な内容がここに表示されます。</strong><br>
                            <a href="{{ route('chapter1') }}"><button type="button" class="btn btn-outline-secondary btn-sm">作り方説明</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div style="position: fixed; bottom: 10px; right: 10px;">
    <img src="image/sirogohan.jpg" alt="Image Description" width="180" height="200">
    </div>
</body>
</html>

@extends('layouts.footer')