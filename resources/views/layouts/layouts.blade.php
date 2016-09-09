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
    <link href="{{ URL::asset('css/responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">

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
            <div class="navbar-header col-md-2"><a class="navbar-brand " href="{{App::make('url')->to('/')}}"><img alt="..."
                                                                                       src="{{ URL::asset('images/logo_mars.jpg') }}"/></a>
            </div>
            <div class="center-nav col-md-8 col-xs-12"><h1>Merchant-Algo Repository System</h1></div>
            <!-- <div class="user-nav text-right col-lg-2">Welcome, <a href="#">gigihoa@yahoo.com<span class="caret"></span></a><a href="#" class="user-logout">Logout</a></div> -->
            <div class="user-nav text-right col-md-2 col-xs-12">
                <button type="button" class="btn btn-small btn-green btn-edit" data-toggle="modal"
                        data-target=".bs-example-modal-login">Login
                </button>
            </div>
        </div>
    </div>
    <div class="container-fluid sca">
        <div class="row">
            <div class="logo-sca col-md-2"><img src="{{ URL::asset('images/logo_sca.jpg') }}"/></div>
            <div class="col-md-8 text-uppercase text-center"><h2>Merchant Algo list</h2></div>
            <div class="col-md-2 sym-s"><img class="logo-pull-right" src="{{ URL::asset('images/sym_s.jpg') }}"/></div>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="main-content clearfix">
        <div class="top-content" id="data-before-content">
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <div class="pull-left form-inline" id="area-search-filter">
                        <div class="form-group">
                            <input type="text" name="search-keyword" class="form-control box-search1"
                                   placeholder="Enter some keywords">
                            <button type="button" class="btn btn-search1" id="search-keyword">Search</button>
                        </div>
                        <div class="form-group form-search-2">
                            <div class="btn-group">
                                <button type="button" class="btn btn-drop dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" id="sort-alpha-select" aria-expanded="false"><input
                                            type="button"
                                            class="box-alphabet"
                                            name="alpha-select"
                                            value="All Alphabetical">
                                </button>
                                <ul class="dropdown-menu alphabet-select">
                                    <li><a href="#" class="alphabet-option" data-value="All Alphabetical">Reset</a>
                                    </li>
                                    <li><a href="#" class="alphabet-option" data-value="A">A</a></li>
                                    <li><a href="#" class="alphabet-option" data-value="B">B</a></li>
                                    <li><a href="#" class="alphabet-option" data-value="C">C</a></li>
                                    <li><a href="#" class="alphabet-option" data-value="D">D</a></li>
                                    <li><a href="#" class="alphabet-option" data-value="E">E</a></li>
                                    <li><a href="#" class="alphabet-option" data-value="F">F</a></li>
                                    <li><a href="#" class="alphabet-option" data-value="G">G</a></li>
                                    <li><a href="#" class="alphabet-option" data-value="H">H</a></li>
                                    <li><a href="#" class="alphabet-option" data-value="I">I</a></li>
                                    <li><a href="#" class="alphabet-option" data-value="J">J</a></li>
                                    <li><a href="#" class="alphabet-option" data-value="K">K</a></li>
                                    <li><a href="#" class="alphabet-option" data-value="L">L</a></li>
                                    <li><a href="#" class="alphabet-option" data-value="M">M</a></li>
                                    <li><a href="#" class="alphabet-option" data-value="N">N</a></li>
                                    <li><a href="#" class="alphabet-option" data-value="O">O</a></li>
                                    <li><a href="#" class="alphabet-option" data-value="P">P</a></li>
                                    <li><a href="#" class="alphabet-option" data-value="Q">Q</a></li>
                                    <li><a href="#" class="alphabet-option" data-value="R">R</a></li>
                                    <li><a href="#" class="alphabet-option" data-value="S">S</a></li>
                                    <li><a href="#" class="alphabet-option" data-value="T">T</a></li>
                                    <li><a href="#" class="alphabet-option" data-value="U">U</a></li>
                                    <li><a href="#" class="alphabet-option" data-value="V">V</a></li>
                                    <li><a href="#" class="alphabet-option" data-value="W">W</a></li>
                                    <li><a href="#" class="alphabet-option" data-value="X">X</a></li>
                                    <li><a href="#" class="alphabet-option" data-value="Y">Y</a></li>
                                    <li><a href="#" class="alphabet-option" data-value="Z">Z</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <select id="select-status">
                                    <option value="" selected>All Status</option>
                                    <option value="darft">DRAFT</option>
                                    <option value="ready">READY</option>
                                    <option value="prod-d">PROD-D</option>
                                    <option value="prod-z">PROD-Z</option>
                                    <option value="edit">EDIT</option>
                                    <option value="update">UPDATE</option>
                                </select>
                            </div>
                            <button type="button" class="btn btn-search122 btn-search2" id="sort-status-alpha">
                                Search
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="pull-right-option">
                        <button type="button" class="btn btn-big btn-yellow" onclick="merchant.addNew()">+ Add New Merchant</button>
                        <button type="button" class="btn btn-big btn-green">Export Ready Merchants</button>
                        <button type="button" class="btn btn-big btn-moss">Export Updated Merchants</button>
                    </div>
                </div>
            </div>
        </div><!--top-content-->
        <div id="table-data-list">
            @yield('content')
        </div>

<div class="modal fade bs-example-modal-login in" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
     style="display: none;">
    <div class="modal-dialog modal-login" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                <h2 class="modal-title text-center text-uppercase" id="myModalLabel">Login</h2>
            </div>
            <div class="modal-body-login">
                <div class="row">

                    <div class="col-lg-12 box-right">

                        <div class="form-group">
                            <label class="label-login">User</label>
                            <div class="bs-select input-login">
                                <input type="text" class="form-control" name="user" placeholder="User name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="label-login">Password</label>
                            <div class="bs-select input-login">
                                <input type="password" class="form-control" name="pass" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label><input type="checkbox"> Remember me</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="bs-select input-error">
                            <span class="error-response">
                                Incorrect account. <a href="#">You forget your password?</a>
                            </span>
                            </div>
                        </div>
                        <div class="login-btn pull-right">
                            <button type="submit" class="btn btn-small btn-edit-pop btn-popup">Login</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="modalSeachFilter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Message</h4>
            </div>
            <div class="modal-body">
                <label class="alert-danger"></label>
            </div>
        </div>
    </div>

</div>

<div class="modal-search"></div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<script src="{{ URL::asset('js/bootstrap.js') }}"></script>
<script src="{{ URL::asset('js/script.js') }}"></script>
<script src="{{ URL::asset('js/ie10-viewport-bug-workaround.js') }}"></script>
<script src="{{ URL::asset('js/lib/utils.js') }}"></script>
<script>
    var fly = {
        baseUrl: "{{App::make('url')->to('/')}}"
    }
</script>
<meta name="_token" content="{!! csrf_token() !!}"/>
<script src="{{asset('js/dev/ajaxscript.js')}}"></script>
<script src="{{asset('js/dev/merchant.js')}}"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Mars</title>
</head>

<body>
</body>
</html>
