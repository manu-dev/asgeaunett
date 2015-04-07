<!DOCTYPE html>
<html>
<head>
	<title>AS GEAUNE TT</title>
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<!-- JQUERY-UI -->
	<script type="text/javascript" src="/js/jquery.js"></script>
	<script type="text/javascript" src="/js/jquery-ui.min.js"></script>
	<link rel="stylesheet" type="text/css" src="/css/jquery-ui.min.css">

	<!-- VELOCITY -->
	<script type="text/javascript" src="/js/velocity.min.js"></script>

	<!-- MATERIALIZE CSS -->
	<link rel="stylesheet" type="text/css" src="/css/materialize.css">
	<script type="text/javascript" src="/js/materialize.min.js"></script>

	  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>

	<!-- CKEDITOR -->
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>



</head>
<body>
	<div class="row ">
		<div id="header" class="col s12 m12 12 center">
			@include('global.header')
		</div>
		<div id="menu" class="col s2 m2 2" >
			@include('global.menu')
		</div>
		<div id="content" class="col s10 m10 10">
			@section('content')
				Oups litle problem !
			@show
		</div>
		<div id="footer" class='col s12 m12 12 center'>
			AS GEAUNE TT fait par Manu
		</div>
	</div>
</body>
</html>