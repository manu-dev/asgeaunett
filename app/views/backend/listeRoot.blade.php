@extends('layouts.master')

@section('content')
<table class="liste">
    <a href="/addRoot" class="add">Ajouter Root</a>
    <br/><br/>
    <tr class="titre">
        <td class="titre">Login</td>
        <td>email</td>
        <td> </td>
        <td> </td>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->username }}</td>
            <td>{{ $user->email }}</td>
            <td><a href="" class="modif" userid="{{ $user->id }}">Modifier</a></td>
            <td><a href="" class="supp" userid = "{{ $user->id }}" >Supprimer</a></td>
        </tr>
    @endforeach
</table>

<script>
$(document).ready(function(){
    $('#content').listeAdmin();
});
</script>
@stop