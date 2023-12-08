@extends('layouts.header-' . (Agent::isMobile() ? 'phone' : 'pc'))
<!-- resources/views/home.blade.php -->

@extends('layouts.snsapp')

@section('title', 'SNSトップページ')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <!-- 新規投稿フォーム -->
            <form>
                <textarea class="form-control mb-3" placeholder="投稿内容を入力してください"></textarea>
                <button type="submit" class="btn btn-primary">投稿する</button>
            </form>

            <!-- 投稿リスト -->
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title">投稿ユーザー名</h5>
                    <p class="card-text">投稿内容がここに表示されます。</p>
                    <!-- コメント欄など他の投稿情報をここに追加 -->
                </div>
            </div>

            <!-- 他の投稿をここに追加 -->

        </div>
    </div>
@endsection

@extends('layouts.footer')