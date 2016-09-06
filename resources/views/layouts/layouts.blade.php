
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{ URL::asset('css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('css/dashboad.css') }}" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<nav class="navbar">
    <div class="container-fluid navbar-inverse">
        <div class="row">
            <div class="navbar-header col-lg-2"><a class="navbar-brand " href="#"><img alt="..." src="{{ URL::asset('images/logo_mars.jpg') }}" /></a></div>
            <div class="center-nav col-lg-8"><h1>Merchant-Algo Repository System</h1></div>
            <div class="user-nav text-right col-lg-2">Welcome, <a href="#">gigihoa@yahoo.com<span class="caret"></span></a></div>
        </div>
    </div>
    <div class="container-fluid sca">
        <div class="row">
            <div class="logo-sca col-lg-2"><img src="{{ URL::asset('images/logo_sca.jpg') }}" /></div>
            <div class="col-lg-8 text-uppercase text-center"><h2>Merchant Algo list</h2></div>
            <div class="col-lg-2 sym-s"><img class="pull-right" src="{{ URL::asset('images/sym_s.jpg') }}" /></div>
        </div>
    </div>
</nav>

 {{--content --}}
<div class="container-fluid">
    @yield('content')
</div>
{{--end content--}}

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{ URL::asset('js/bootstrap.js') }}"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{ URL::asset('js/ie10-viewport-bug-workaround.js') }}"></script>
<script>
    var fly = {
        baseUrl : "{{App::make('url')->to('/')}}"
    }
</script>
<meta name="_token" content="{!! csrf_token() !!}" />
<script src="{{asset('js/ajaxscript.js')}}"></script>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Mars</title>
</head>

<body>
</body>
</html>
