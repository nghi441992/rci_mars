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
    @yield('content')
</div>
<div class="container-fluid footer">
    <ul class="pull-right">
        <li><a href="#"><<</a></li>
        <li><a href="#">Pre</a></li>
        <li><a href="#">Next</a></li>
        <li><a href="#">>></a></li>
    </ul>
</div>
<!-- end have data -->
<!-- No data-->
<!-- <div class="table-responsive">
    <p class="text-red">No result. Please try again or refesh brower</p>
</div> -->
<!-- end no data -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h2 class="modal-title text-center text-uppercase" id="myModalLabel">Edit Merchant - Algo</h2>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 box-left">
                        <h3>Merchant</h3>
                        <div class="form-group">
                            <label>Merchant Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Scanop Merchant ID</label>
                            <input type="text" class="form-control form-grey">
                        </div>
                        <div class="form-group">
                            <label>Scanop User ID</label>
                            <input type="text" class="form-control form-grey">
                        </div>
                        <div class="form-group">
                            <label>Mars User ID</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>HD Country</label>
                            <div class="bs-select">
                                <select class="form-control">
                                    <option>Tất cả danh mục</option>
                                    <option>Thời trang</option>
                                    <option>Điện tử</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Pos Country</label>
                            <div class="bs-select">
                                <select class="form-control">
                                    <option>Tất cả danh mục</option>
                                    <option>Thời trang</option>
                                    <option>Điện tử</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <div class="bs-select">
                                <select class="form-control">
                                    <option>Tất cả danh mục</option>
                                    <option>Thời trang</option>
                                    <option>Điện tử</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Post Code</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>ISIC Category</label>
                            <div class="bs-select">
                                <select class="form-control">
                                    <option>Tất cả danh mục</option>
                                    <option>Thời trang</option>
                                    <option>Điện tử</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Captova Category</label>
                            <div class="bs-select">
                                <select class="form-control">
                                    <option>Tất cả danh mục</option>
                                    <option>Thời trang</option>
                                    <option>Điện tử</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 box-right">
                        <h3>Algo</h3>
                        <div class="form-group">
                            <label>Document Type</label>
                            <div class="bs-select">
                                <select class="form-control">
                                    <option>Tất cả danh mục</option>
                                    <option>Thời trang</option>
                                    <option>Điện tử</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Algo Type</label>
                            <div class="bs-select">
                                <select class="form-control">
                                    <option>Tất cả danh mục</option>
                                    <option>Thời trang</option>
                                    <option>Điện tử</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Algo Key Name</label>
                            <div class="bs-select">
                                <select class="form-control">
                                    <option>Tất cả danh mục</option>
                                    <option>Thời trang</option>
                                    <option>Điện tử</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Line Item</label>
                            <div class="form-inline">
                                <div class="radio">
                                    <label>
                                        <input id="optionsRadios1" type="radio" value="option1" name="optionsRadios">
                                        Yes
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input id="optionsRadios2" type="radio" value="option2" name="optionsRadios">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Inferred Algo Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Keywords</label>
                            <ul class="keyword">
                                <li><a href="#">abadjf</a>
                                    <button type="button" class="close" aria-label="Close"><span
                                                aria-hidden="true">&times;</span></button>
                                </li>
                                <li><a href="#">Friday today</a>
                                    <button type="button" class="close" aria-label="Close"><span
                                                aria-hidden="true">&times;</span></button>
                                </li>
                                <li><a href="#">abadjf</a>
                                    <button type="button" class="close" aria-label="Close"><span
                                                aria-hidden="true">&times;</span></button>
                                </li>
                                <li><a href="#">Friday today</a>
                                    <button type="button" class="close" aria-label="Close"><span
                                                aria-hidden="true">&times;</span></button>
                                </li>
                            </ul>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                   placeholder="Input your name">
                        </div>
                        <div class="list-btn pull-right">
                            <ul>
                                <li>
                                    <button type="button" class="btn btn-small btn-draft-pop btn-popup">Draft</button>
                                </li>
                                <li>
                                    <button type="button" class="btn btn-small btn-ready-pop btn-popup">Ready</button>
                                </li>
                                <li>
                                    <button type="button" class="btn btn-small btn-prodd-pop btn-popup">Prod-d</button>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <button type="button" class="btn btn-small btn-edit-pop btn-popup">Edit</button>
                                </li>
                                <li>
                                    <button type="button" class="btn btn-small btn-update-pop btn-popup">Update</button>
                                </li>
                                <li>
                                    <button type="button" class="btn btn-small btn-prodz-pop btn-popup">Prod-z</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-big pull-left btn-delete">Delete Merchant</button>
                <button type="button" class="btn btn-big pull-right btn-cancel" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-big pull-right btn-save">Save & Close</button>

            </div>
        </div>
    </div>
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
<div class="modal-search"></div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-2.1.3.js"><\/script>')</script>
<script src="{{ URL::asset('js/bootstrap.js') }}"></script>
<script src="{{ URL::asset('js/script.js') }}"></script>
<script src="{{ URL::asset('js/ie10-viewport-bug-workaround.js') }}"></script>
<script src="{{ URL::asset('js/utils.js') }}"></script>
<script>
    var fly = {
        baseUrl: "{{App::make('url')->to('/')}}"
    }
</script>
<meta name="_token" content="{!! csrf_token() !!}"/>
<script src="{{asset('js/ajaxscript.js')}}"></script>
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
