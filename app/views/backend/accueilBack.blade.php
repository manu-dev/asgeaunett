@extends('layouts.master')

@section('content')
 Bienvenue {{ Auth::user()->username; }}
@stop