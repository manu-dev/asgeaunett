<html>
    <head>
        <title>AS Geaune TT</title>
        <link rel="stylesheet" href="css/style.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
        <script src="js/velocity.min.js"></script>
    </head>
    <body id="bodyCo">
        <div id="connexion">
            <div id="imgContent">
                <img src="images/logo.png" alt="logo"/><br/>
            </div>
            {{ Form::open(array('route'=>'log'))  }}

                {{ Form::label('login','Login : ') }}
                {{ Form::text('login') }}<br/>

                {{Form::label('pwd','Mot de Passe : ')}}
                {{Form::password('pwd') }}<br/>

                {{Form::submit('Valider')}}
            {{ Form::close() }}
        </div>

        <script>
            $(document).ready(function(){
                $('#connexion').hide().velocity('transition.bounceUpIn');
            });
        </script>
    </body>
</html>