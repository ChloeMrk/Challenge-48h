@extends('layout')


@section('contenu')

@foreach($produits as $produit)  

    <div class="catalogue">
        <a href="{{route('showProduit',['id'=>$produit->id])}}" style="text-decoration:none">
        <h4 >{{$produit->titre}}</h4>
        
    <div><img src="{{$produit->url_image}}" alt="produitImage"></div></a>
    <p>{{$produit->tag}} </p>

    <form action="{{route('modification.produit',['id'=>$produit->id])}}">
                <button type="submit">Modifier</button>
    </form>

    </div> 


@endforeach


@endsection