@extends('layout')

@section('contenu')

<div class="show">

     <h3>{{$titre}}</h3>

    <div><img src="{{$url_images}}" alt="ambianceImage"></div>

    <div><p>{{$tag}}</p></div> 

</div>
@endsection