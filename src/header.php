<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/signup.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header>
            <nav class="navbar navbar-default" id="logAndSearch">
                <div class="container" id="logAndSearchContainer">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header navbar-default">
                        <h5 class="navbar-toggle collapsed user-toggle RightToggle" data-toggle="collapse" data-target="#navbar-collapse-user" aria-expanded="false">
                            <span class="glyphicon glyphicon-user" aria-hidden="false"></span>  Hello Guy!
                        </h5>
                        <button type="button" class="navbar-toggle collapsed pull-left user-toggle LeftToggle" data-toggle="collapse" data-target="#navbar-collapse-search" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="glyphicon glyphicon-search" aria-hidden="false"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-right" id="navbar-collapse-user">
                        <ul class="nav navbar-nav">
                            <li><a href="signup.php">הרשמה</a></li>
                            <li><a href="#">התחבר</a></li>
                        </ul>
                    </div>

                    <div class="collapse navbar-collapse navbar-left" id="navbar-collapse-search">
                        <form  class="navbar-form navbar-right">
                            <button id="src-btn" type="submit" style="float: left" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="false"></span></button>
                            <div class="form-group" style="overflow: hidden">
                                <input type="text" style="width: 100%" class="form-control" placeholder="חיפוש">
                            </div>
                        </form>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

            <nav class="navbar navbar-default" id="headline">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header navbar-right">
                        <a class="navbar-brand pull-right" href="index.php">סטודנטים</a>
                        <button type="button" class="navbar-toggle collapsed pull-left LeftToggle" data-toggle="collapse" data-target="#navbar-collapse-menu" aria-expanded="false">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-collapse-menu">
                        <ul class="nav navbar-nav navbar-left">
                            <li><a href="#">חיפוש מתקדם</a></li>
                            <li class="new_value"><a href="#">מידע חדש</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>

        <main class="container">