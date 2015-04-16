<html>
    <head>
            <title>AS GEAUNE TT</title>

    <!-- JQUERY-UI -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
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
    
    <!-- MES JS -->

    <!-- MES CSS -->
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <script type="text/javascript" src="/js/asgtt.js"></script>
        <script src="js/velocity.min.js"></script>
    </head>

    <body id="bodyCo" class='row'>
    <div class="deco col s4 m4 l4 offset-s4 offset-m4 offset-l4">
         <div id="imgconn" class="col 2 offset-s5 circle "> 
                <img src="images/logo.png" alt="logo" class="responsive-img center"/><br/>
            </div>
    </div>
        <div id="connexion" class="col s4 m4 l4 offset-s4 offset-m4 offset-l4 z-depth-5">
           
            {{ Form::open(array('route'=>'log'))  }}
                <div class="input-field">
                    {{ Form::label('login','Login : ') }}
                    {{ Form::text('login') }}<br/>
                </div>
                <div class="input-field">
                    {{Form::label('pwd','Mot de Passe : ')}}
                    {{Form::password('pwd') }}<br/>
                </div>
                <button class="btn waves-effect waves-light col s12 m12 l3 offset-l9 blue darken-3" type="submit" name="action">Connexion !
                <i class="mdi-content-send right"></i>
                </button>
            {{ Form::close() }}
        </div>
        <script>
            $(document).ready(function(){
                $('#connexion').hide().velocity('transition.bounceUpIn');
                $('.deco').hide().velocity('transition.bounceUpIn');
            });
        </script>
    </body>
</html>