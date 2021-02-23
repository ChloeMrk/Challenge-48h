@extends('layout');

@section('contenu')

<section class="success" id="about">
    <div class="container">
        <div class="row" style="justify-content: center; text-align : center;">
            <div class="row">
                <div class="col-sm-6">
                  <div class="card card-border">
                    <div class="card-body">
                      <h5 class="card-title">Page Produits</h5>
                      <p class="card-text">Accèdez à cette page afin de gérer les images <br> produits</p>
                      <a href="/produit" class="btn btn-primary">Produits</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Page ambiance</h5>
                      <p class="card-text">Accèdez à cette page afin de gérer les images ambiances</p>
                      <a href="/ambiance" class="btn btn-primary">Ambiances</a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection