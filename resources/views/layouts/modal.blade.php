<div class="modal fade" id="modalProfile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                @guest
                    <h5 class="modal-title" id="exampleModalLabel">ログインしていません</h5>
                @else
                    <h5 class="modal-title" id="exampleModalLabel">{{session('name')}}</h5>
                @endguest

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="container-fluid">
                    <div class="row">
                        @guest
                            <a href="{{ route('login') }}" class="btn border-top border-bottom my-2" >ログイン</a><br>
                            <a href="{{ route('register') }}" class="btn border-top border-bottom my-2">アカウント登録</a><br>
                        @else
                            <a href="{{ route('account') }}" class="btn border-top border-bottom my-2">アカウント設定</a><br>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn border-top border-bottom my-2">ログアウト</button><br>
                            </form>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
