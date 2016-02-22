<!doctype html>
<html ng-app="inOutApp">
<head>
	<title>In/Out and Work Alone</title>
	<meta charset="utf-8">
	<link href="images/icon.png" rel="shortcut icon" /> 
	<link rel="stylesheet" type="text/css" href="lib/Bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  	<meta http-equiv="X-UA-Compatible" content="IE=Edge，chrome=1">
  	<script src="lib/Angular/angular.min.js"></script>
	<script src="lib/Angular/angular-route.min.js"></script>	
</head>
<body>
<header ng-controller="headerController">
	<div id="page-title"><div id="page-banner"></div></div>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <!--<a class="navbar-brand" href="index.html">Tsun</a>-->
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="navbar-collapse-1">
			  <ul class="nav navbar-nav" ng-cloak>
				<li ng-repeat="menu in menuArr" ng-click="select($index)" ng-class="{active:isActive($index)}">
					<a href="{{menu.href}}">
						<span class="{{menu.iconClass}}"></span> {{menu.name}}
					</a>
				</li>  
			  </ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
</header>

<div ng-view></div>


<script src="lib/Bootstrap/js/jquery-1.11.3.min.js"></script>
<script src="lib/Bootstrap/js/bootstrap.min.js"></script>
<script src="js/app.js"></script>
<script src="js/services.js"></script>
<script src="js/controllers.js"></script>
</body>
</html>