@extends('layouts.master')

@section('content')
	<h1 class='center'>Bienvenue sur le site de L'AS Geaune TT</h1>
		@foreach($articles as $a)
		<div class="article card-panel col s12 m12 l12	  offset-s0 offset-m0 yellow row z-depth-3"><br>
			<span class='titreArticle col s12 m12 l12 center blue darken-3 yellow-text'>{{ $a->title }}</span>
			<span class="ContenueArticle card-panel white col s12 m12 l12"><?php echo html_entity_decode($a->content)?></span>
		</div>

	@endforeach
@stop