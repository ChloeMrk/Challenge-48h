@extends('layout')


@section('contenu')
<ul>

    <li>
    
        @foreach($produits as $produit)

        
                <h4>{{$produit->titre}}</h4>
                <p>{{$produit->tag}} €</p>
                <div><img src="{{$produit->url_image}}" alt="produitImage"></div>

        @endforeach
    
    
    </li>

    <div class="d-flex justify-content-center">
    {!! $produits->links() !!}
    </div>
   
   
</ul>

    
@endsection