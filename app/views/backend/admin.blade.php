{{ Form::open(array('url'  => '/listeAdmin'))}}

<div class="input-field col 12" >
{{ Form::label('login','Login : ') }}
{{ Form::text('login') }}<br/>
</div>
<br/>
<div class="input-field col 12" >
{{ Form::label('mdp','Mot de Passe : ') }}
{{ Form::password('mdp') }}<br/>
</div>
<br/>
<div class="input-field col 12" >
{{ Form::label('mdp2','Confirmez Mot de Passe : ') }}
{{ Form::password('mdp2') }}<br/>
</div>
<br/>

<div class="input-field col 12" >
{{ Form::label('mail','Email : ') }}
{{ Form::text('mail') }}<br/>
</div>
<br/>

{{ Form::submit('Valider') }}
<input type="button" id="cancelButton" value='Annuler'/> <br>
{{ Form::close()}}
