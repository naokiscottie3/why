<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    body{
        padding: 20px;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>Home page application</h1>
        <a class="btn btn-info" href="{{ route('login.show') }}" role="button">application_login</a>
        <br><p></p>
        <a class="btn btn-info" href="{{ route('admin_login') }}" role="button">customer_login</a>
    </div>


</body>

</html>
