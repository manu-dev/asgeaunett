@extends('layouts.master')
@section('content')	
	<span class="col s12 m12 l6 offset-l3 card-panel yellow-text blue darken-3 center titre">Ajouter Article</span>
	<div class='col s12 m12 l6 offset-l3 card-panel'>
		
		 {{ Form::open(array('route'=>'article_modified'))  }}
		 			{{ Form::hidden('id',$article->id)}}
	                <div class="input-field">
	                    {{ Form::label('titre','Titre') }}
	                    {{ Form::text('titre',$article->title)}}<br/>
	                </div>

					<div class="input-field">
	                    {{Form::textarea('mess',$article->content,array('class' => 'ckeditor')) }}<br/>
	                </div>

					<div class="input-field">
						<input type="checkbox" id="actif" name='actif' value={{$article->actif}}/>
	    			 	<label for="actif">Afficher</label>
	                </div>

	                <button class="btn waves-effect waves-light col s12 m12 l3 offset-l9 blue darken-3" type="submit" name="action">Enregistrer !
	                <i class="mdi-content-send right"></i>
	                
	            {{ Form::close() }}
	            <button class="btn waves-effect waves-light col s12 m12 l3 offset-l9 red" onclick="annuler()">Annuler !
	                <i class="mdi-content-send right"></i>
	                </button>
	</div>
	<script type="text/javascript">
		
			function annuler(){
				 document.location.href="/liste_articles"; 
			}
	</script>
@stop
