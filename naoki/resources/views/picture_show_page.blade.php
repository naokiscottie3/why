<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>ホーム画面</title>

    <style>


        body {
            margin: 0;
            padding: 20px;
        }


        .box {
            display:flex;
            flex-direction: row;
            align-items: center;
            margin: 40px;
        }


        .text {
            text-align: left;
            align-items: left;
        }


        h3 {
            font-size: 21px;
            margin: 0;
        }


        .pict {
            width: 50%;
            margin-right: 3%;
        }


        .pict img {
            width: 100%;
            height:auto;
        }

    </style>


</head>

<body>
    @if(session('err_msg2'))

    <p class="text-danger">{{ session('err_msg2') }}</p>

    @endif


    @if($pictures -> first())
    @foreach ($pictures as $picture)
        <div class="box">

            <div class="pict"><img src="/storage/test/{{ $picture -> file_name }}" alt=""></div>
            <div class="text">
                <h3>日付：{{ $picture -> picture_date }}</h3>
                <button type="button" class="btn btn-primary" onclick="location.href='/picture_list/delete/{{ $picture->id }}/{{ $picture -> field_id }}'">写真の削除</button>
            </div>
        </div>
    @endforeach
    @else
    <p>写真はありません。</p>
    @endif




    <br>
    <p></p>

    <a class="btn btn-info" href="{{ route('picture_list') }}" role="button">戻る</a>




</body>

</html>
