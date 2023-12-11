<style>
    html,
    .full-height {
        height: 100%;
    }

    .card {
        padding: 20px;
    }

    #userInput {
        width: 100%;
        height: 250px;
        resize: none;
        border: 2px solid #ccc;
        border-radius: 8px;
        padding: 4px;
        box-sizing: border-box;
    }

    body {
        padding-bottom: 70px;
    }
</style>

<body>
    @section('content')
    <div class="container pt-4 pb-5 mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">Create Image Post</div>

                    <div class="card-body d-flex flex-column ">
                        <button type="button" class="mt-3" style="border: none; background: none;">テキストを入力</button>
                        <form method="POST" action=""> <!-- 後でactionの中を書く -->
                            <textarea id="userInput" name="userInput"></textarea>
                        </form>

                        <form method="POST" action="" enctype="multipart/form-data"> <!-- 後でactionの中を書く -->
                            @csrf
                            <div class="mb-3">
                                <label for="image" class="form-label">Select Image</label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>
                        </form>

                        <button type="submit" class="btn btn-primary">送信</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>