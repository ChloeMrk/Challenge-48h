@extends('layout')

@section('contenu')
<form action="/produit_modification"   method="post" enctype="multipart/form-data">

    {{csrf_field()}}

    <div class="modifs"><img src="{{$url_image}}" alt="produitImage"></div>

    
    <input type="string" name="titre" placeholder="Name" value={{old('name')}}>

    
    <input type="text" name="tag" placeholder="tag">
   
    

    <input type="submit" value="Valider">





</form>

@endsection