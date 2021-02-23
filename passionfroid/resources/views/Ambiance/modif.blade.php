@extends('layout')

@section('contenu')
<form action="/ambiance_modification"   method="post" enctype="multipart/form-data">

    {{csrf_field()}}

    <div class="modifs"><img src="{{$url_images}}" alt="produitImage"></div>

    
    <input type="string" name="titre" placeholder="Titre" value={{old('name')}}>

    
    <input type="text" name="tag" placeholder="tag">
   
    

    <input type="submit" value="Valider">





</form>

@endsection