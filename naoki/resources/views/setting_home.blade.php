<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ホーム画面</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .A{
            display:flex;
            padding: 0px 40px;
            border: 0px solid;
            border-color: orange;
            border-radius: 20px;
        }
        .B{
            width: 50%;
            text-align: center;
        }
        .C{
            width: 50%;
            text-align: center;
        }
        .D{
            padding: 20px;
        }
    </style>
</head>
<body>
<div class="container">

	<div class="page-header">
		<h1 style="border-bottom: 1px solid #426579;border-left: 10px solid #426579;padding: 7px;">Setting</h1>
	</div>

	<p><br></p>
	<div class="d-grid gap-2">

		<div class="A">
			<div style="padding: 25px;margin: 10px" class="B">
                <a class="D btn btn-outline-primary" href="{{ route('company_form') }}"><i class="fa-solid fa-graduation-cap fa-6x"></i></a>
			</div>
			<div style="padding: 25px;margin: 10px" class="C">
                <a class="D btn btn-outline-success" href="{{ route('field_information') }}"><i class="fa-solid fa-leaf fa-6x"></i></a>
			</div>
		</div>

		<div style="display:flex;padding: 0px 40px;;">
			<div class="B">
				<p>取引先登録</p>
			</div>
			<div class="C">
                <p>案件情報登録</p>
			</div>
		</div>

		<div class="A">
			<div style="padding: 25px;margin: 10px" class="B">
                <a href="{{ route('customer_member') }}" class="D btn btn-outline-dark"><i class="fa-solid fa-images fa-6x"></i></a>
			</div>
			<div style="padding: 25px;margin: 10px" class="C">
                <a class="D btn btn-outline-primary" href="{{ route('event_setting') }}"><i class="fa-solid fa-desktop fa-6x"></i></a>
			</div>
		</div>

		<div style="display:flex;padding: 0px 40px;;">
			<div class="B">
				<p>顧客情報</p>
			</div>
			<div class="C">
				<p>Event登録</p>
			</div>
		</div>

		<div class="A">
			<div style="padding: 25px;margin: 10px" class="B">
                <a class="D btn btn-outline-success" href="{{ route('setting_show') }}"><i class="fa-solid fa-desktop fa-6x"></i></a>
			</div>
			<div style="padding: 25px;margin: 10px" class="C">

                <a class="D btn btn-outline-secondary" href="{{ route('home') }}"><i class="fa-solid fa-cube fa-6x"></i></a>

			</div>
		</div>

		<div style="display:flex;padding: 0px 40px;;">
			<div class="B">
				<p>setting</p>
			</div>
			<div class="C">
				<p>戻る</p>
			</div>
		</div>

	</div>


</div>







<script src="https://kit.fontawesome.com/3a89fbfd00.js" crossorigin="anonymous"></script>
</body>
</html>
