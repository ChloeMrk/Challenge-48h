@extends('layout')

@section('contenu')

<div class="show">

    <h3>{{$titre}}</h3>

    <div><img src="{{$url_image}}" alt="produitImage"></div>

    <div><p>{{$tag}}</p></div>

</div>
@endsection