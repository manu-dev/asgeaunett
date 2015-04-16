@extends('layouts.master')
@section('content')

	
	
<div class="col s6 m6 l6 offset-s3 offset-m3 offset-l3 card-panel center blue darken-3 yellow-text titre">Liste Article</div>

<a class="waves-effect waves-light btn-large haut col s1 m1 l1 offset-s1 offset-m1 offset-l1" href='/add_article'><i class="mdi-file-cloud left" ></i>Ajouter</a>
	@foreach($articles as $a)
		<div class="article card small col s12 m12 l4  offset-s0 offset-m0 offset-l1 yellow row">
			<span class='titreArticle col s12 m12 l12 center blue darken-3 yellow-text'>{{ $a->title }}</span>
			<span class="ContenueArticle col 12"><?php echo html_entity_decode($a->content)?></span>
			<div class="card-action blue darken-3 ">
              <a href="/modif_article/{{$a->id}}" class="yellow-text">Modifier</a>
              <a href="/delete_article/{{$a->id}}"class="yellow-text">Supprimer</a>

            </div>


		</div>

	@endforeach
@stop