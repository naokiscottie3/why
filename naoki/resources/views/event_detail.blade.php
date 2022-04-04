<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>event_detail</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <div class="container">
        <h3>{{ $event_list->event_name }}</h3>
        <p>{{ $event_list->event_explanation }}</p>
        <a class="btn btn-info" href="{{ route('event_setting') }}" role="button">戻る</a>

    </div>

</body>

</html>
