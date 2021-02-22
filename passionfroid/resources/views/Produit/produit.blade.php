@extends('layout')

@section('contenu')

<!-- Récupérer les données pour les envoyer dans la table produit -->
<form action="/produit"   method="post" enctype="multipart/form-data">

    {{csrf_field()}}

   
    <input type="file" class="" id="inputFile" name="file[]" multiple>

    <input type="submit" value="Valider">





</form>

@endsection
