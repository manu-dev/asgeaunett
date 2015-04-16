@extends('layouts.master')

@section('content')

	<div class="col s6 offset-s3 card-panel blue darken-3 titre">
		<h1>Contact</h1>
	</div>
	<div class='col s6 offset-s3 z-depth-3 contact'>
		{{ Form::open(array('url'=>'/envoyerMail'))}}
			<div class="input-field">
				{{ Form::label('nom', 'Nom'); }}
				{{ Form::text('nom','');}}
			</div>
			<div class="input-field">
				{{ Form::label('prenom', 'Prénom'); }}
				{{ Form::text('prenom','');}}
			</div>
			<div class="input-field">
				{{ Form::label('email', 'Email'); }}
				{{ Form::email('email','');}}
			</div>
			<div class="input-field">
				{{ Form::label('obj', 'Objet'); }}
				{{ Form::text('obj','');}}
			</div>
			<div class="input-field">
				<i class="mdi-editor-mode-edit prefix"></i>
				{{ Form::label('message', 'Message'); }}
				{{ Form::textarea('message','');}}
			<br/>
				<button class="btn waves-effect waves-light col s12 m12 l3 offset-l9 blue darken-3" type="submit" name="action">Envoyer !
				<i class="mdi-content-send right"></i>
  				</button>
			</div>
		</div>
	{{Form::close()}}
@stop