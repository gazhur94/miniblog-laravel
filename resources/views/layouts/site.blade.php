<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>test laravel</title>
	<!-- Modernizr -->
	<script src="/view/js/modernizr.js"></script>
	<!-- Open Sans from Google Webfonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- Main styles file -->
	<link rel="stylesheet" href="{{asset('/css/style.css')}}" />
	<!-- Icons via Font Awesome -->
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css') }}" />
</head>
<body >

	<div class="bg-img" style="width: 100%; height: 100%; position: fixed; background: url({{asset('/images/hongkong-bg.jpg')}}) no-repeat center center; background-size: cover; "></div>
	<!-- First screen -->
	</div>

	
    <div class="splash" >
		<div  style="text-align:center">
			
            @if(count($errors) > 0)

                <div class= "alert alert-dander">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>

                </div>

            @endif

            @yield('content')

		</div>
    </div>
	

</body>
</html>