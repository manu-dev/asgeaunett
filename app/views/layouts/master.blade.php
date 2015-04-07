<!DOCTYPE html>
<html>
<head>
	<title>AS GEAUNE TT</title>

	<!-- JQUERY-UI -->
	<script type="text/javascript" src="/js/jquery.js"></script>
	<script type="text/javascript" src="/js/jquery-ui.min.js"></script>
	<link rel="stylesheet" type="text/css" src="/css/jquery-ui.min.css">

	<!-- VELOCITY -->
	<script type="text/javascript" src="/js/velocity.min.js"></script>

	<!-- MATERIALIZE CSS -->
	<link rel="stylesheet" type="text/css" src="/css/materialize.css">
	<script type="text/javascript" src="/js/materialize.min.js"></script>

	<!-- CKEDITOR -->
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

</head>
<body>
	<div id="header">
		@include('global.header')
	</div>
	<div id="menu">
		@include('global.menu')
	</div>
	<div id="content">
		@section('content')
			Oups litle problem !
		@show
	</div>
	<div id="footer">
		AS GEAUNE TT fait par Manu
	</div>
</body>
</html>