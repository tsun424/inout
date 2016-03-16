<!doctype html>
<html ng-app="inOutApp">
<head>
	<title>In/Out Board</title>
	<meta charset="utf-8">
	<link href="images/icon.png" rel="shortcut icon" /> 
	 <!-- CSS Libs -->
	<link rel="stylesheet" type="text/css" href="lib/Bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="lib/font-awesome/css/font-awesome.min.css">
	 <!-- CSS App -->
    <link rel="stylesheet" type="text/css" href="css/flat/flat.css">
    <link rel="stylesheet" type="text/css" href="css/flat/flat-themes/flat-blue.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  	<meta http-equiv="X-UA-Compatible" content="IE=Edge，chrome=1">
</head>
<body class="flat-blue" ng-controller="bodyController">
<div class="app-container" ng-class="isLeftOpen ? 'expanded' : ''">
    <div class="row content-container">
        <header ng-controller="headerController">
            <nav class="navbar navbar-default navbar-fixed-top navbar-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-expand-toggle" ng-click="clickMenu()">
                            <i class="fa icon" ng-class="isLeftOpen ? 'fa-close' : 'fa-bars'"></i>
                        </button>
                        <ol class="breadcrumb navbar-breadcrumb">
                            <li class="active" ng-bind="breadcrumb"></li>
                        </ol>
                        <button type="button" class="navbar-right-expand-toggle pull-right visible-xs" ng-click="clickRight()">
                            <i class="fa fa-th icon"></i>
                        </button>
                    </div>
                    <ul class="nav navbar-nav navbar-right" ng-class="isRightOpen ? 'expanded' : ''">
                        <button type="button" class="navbar-right-expand-toggle pull-right visible-xs" ng-click="clickRight()">
                            <i class="fa fa-times icon"></i>
                        </button>
                        <li class="danger" uib-dropdown>
                            <a href="#" uib-dropdown-toggle id="single-button" role="button"><i class="fa fa-star-half-o"></i> 4</a>
                            <ul class="danger" uib-dropdown-menu role="menu" aria-labelledby="single-button">
                                <li class="title">
                                    Notification <span class="badge pull-right">4</span>
                                </li>
                                <li>
                                    <ul class="list-group notifications">
                                        <a href="#">
                                            <li class="list-group-item">
                                                <span class="badge danger">1</span> <i class="fa fa-exclamation-circle icon"></i> notifications
                                            </li>
                                        </a>
                                        <a href="#">
                                            <li class="list-group-item">
                                                <span class="badge success">1</span> <i class="fa fa-check icon"></i> new activities
                                            </li>
                                        </a>
                                        <a href="#">
                                            <li class="list-group-item">
                                                <span class="badge success">2</span> <i class="fa fa-comments icon"></i> messages
                                            </li>
                                        </a>
                                        <a href="#">
                                            <li class="list-group-item message">
                                                view all
                                            </li>
                                        </a>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="profile" uib-dropdown>
                            <a href="#" target="_self" id="simple-dropdown" uib-dropdown-toggle >Ben <span class="caret"></span></a>
                            <ul uib-dropdown-menu aria-labelledby="simple-dropdown">
                                <li>
                                    <div class="profile-info">
                                        <h4 class="username">Ben</h4>
                                        <p>Ben@email.com</p>
                                        <div class="btn-group margin-bottom-2x" role="group">
                                            <button type="button" class="btn btn-default"><i class="fa fa-user"></i> Profile</button>
                                            <button type="button" class="btn btn-default"><i class="fa fa-sign-out"></i> Logout</button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="side-menu sidebar-inverse">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="side-menu-container">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#/activity" target="_self">
                                <div class="icon fa fa-paper-plane"></div>
                                <div class="title">In/Out Board</div>
                            </a>
                        </div>
                        <ul class="nav navbar-nav" ng-cloak>
                            <li ng-repeat="menu in menuArr" ng-click="selectMenu($index)" ng-class="{active: isMenuActive($index)}">
                                <a href="{{menu.href}}">
                                    <span class="{{menu.iconClass}}"></span><span class="title">{{menu.name}}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
        </header>
        <!-- Main Content -->
        <div class="container-fluid">
            <div class="side-body padding-top">
                <div class="row">
                    <div ng-view></div>
                </div>

            </div>
        </div>
    </div>
    <footer class="app-footer">
        <div class="wrapper">
            <span class="pull-right"><a href="#">Go Top <i class="fa fa-long-arrow-up"></i></a></span> &copy; 2016 Copyright.
        </div>
    </footer>
    <div>

	<!-- Javascript Libs -->
	<script src="lib/Angular/angular.min.js"></script>
	<script src="lib/Angular/angular-route.min.js"></script>
	<script src="lib/Angular/angular-animate.min.js"></script>
	<script src="lib/ui-bootstrap/ui-bootstrap-1.2.4.min.js"></script>
	<!-- Javascript -->
	<script src="js/app.js"></script>
	<script src="js/services.js"></script>
	<script src="js/controllers.js"></script>
</body>
</html>