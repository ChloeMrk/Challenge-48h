@extends('layout')


@section('contenu')

<div class="btn-add-img">
    <button type="button" class="btn btn-secondary" onclick="DisplayForm()">Ajouter une image</button>
</div>
  
<section id="form-image">
    <div class="span-div">
        <span aria-hidden="true" class="span-cross" onclick="UndisplayForm()">&times;</span>
    <div>
    <div class="section-content">
        <h2 class="title-div-img">Ajout image produit</h2>
    </div>
    <div class="contact-section">
        <div class="container">
            <form action="/produit" method="POST" enctype="multipart/form-data" style="display: flex;">
                {{ csrf_field() }}
                <div class="col-md-6 form-line">

                    <!-- Nom/Libellé image -->
                    <div class="form-group">
                        <label for="titre">Titre de l'image</label>
                        <input type="text" class="form-control" name="titre" id="titre" placeholder=" Entrez le titre de l'image">
                    </div>

                    <!-- Photo -->
                    <div class="form-group">
                        <label for="inputFile">Selectionner une image</label>
                        <input type="file" class="form-control" name="file" id="inputFile">
                    </div>

                    <!-- Type d'image (checkbox)-->
                    <div class="form-group">
                      <h5>Type d'image</h5>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="photo_passionfroid" id="photo_passionfroid">
                        <label class="form-check-label" for="photo_passionfroid"> Photo PassionFroid </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="photo_fournisseur" id="photo_fournisseur">
                        <label class="form-check-label" for="photo_fournisseur"> Photo fournisseur </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="logo" id="logo">
                        <label class="form-check-label" for="logo"> Logo </label>
                      </div>
                    </div>

                    <!-- Photo avec produit (checkbox) -->
                    <div class="form-group">
                      <h5>Photo avec produit</h5>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="photo_produit_oui" id="photo_produit_oui">
                        <label class="form-check-label" for="photo_produit_oui"> Oui </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="photo_produit_non" id="photo_produit_non">
                        <label class="form-check-label" for="photo_produit_non"> Non </label>
                      </div>
                    </div>

                    <!--Photo avec humains (checkbox)-->
                    <div class="form-group">
                      <h5>Photo avec humains</h5>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="photo_humain_oui" id="photo_humain_oui">
                        <label class="form-check-label" for="photo_humain_oui"> Oui </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="photo_humain_non" id="photo_humain_non">
                        <label class="form-check-label" for="photo_humain_non"> Non </label>
                      </div>
                    </div>

                    <!-- Photo institutionnelle (checkbox) -->
                    <div class="form-group">
                      <h5>Photo institutionnelle</h5>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="photo_institutionnelle_oui" id="photo_institutionnelle_oui">
                        <label class="form-check-label" for="photo_institutionnelle_oui"> Oui </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="photo_institutionnelle_non" id="photo_institutionnelle_non">
                        <label class="form-check-label" for="photo_institutionnelle_non"> Non </label>
                      </div>
                    </div>

                    <!-- Format (checkbox) -->
                    <div class="form-group">
                      <h5>Format</h5>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="vertical" id="Vertical">
                        <label class="form-check-label" for="Vertical"> Vertical </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="Horizontale" id="Horizontale">
                        <label class="form-check-label" for="Horizontale"> Horizontale </label>
                      </div>
                    </div>

                </div>


                <!--Deuxième section formulaire-->
                <div class="col-md-6">

                  <!-- Droits d'utilisation limités (checkbox) -->
                  <div class="form-group">
                    <h5>Droits d'utilisation limités</h5>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="utilisation_limité_oui" id="utilisation_limité_oui" onclick="Checked()">
                      <label class="form-check-label" for="utilisation_limité_oui"> Oui </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="utilisation_limité_non" id="utilisation_limité_non">
                      <label class="form-check-label" for="utilisation_limité_non"> Non </label>
                    </div>
                  </div>

                  <!-- Copyright -->
                  <div class="form-group checked" id="checked_right">
                    <label for="copyright">Copyright</label>
                    <input type="text" class="form-control" name="copyright" id="copyright" placeholder=" Copyright">
                  </div>

                  <!-- Crédits photos -->
                  <div class="form-group">
                    <label for="credits">Crédits photo</label>
                    <input type="text" class="form-control" name="credits" id="credtis" placeholder=" Entrez les crédits">
                  </div>

                  <!--Date de fin d'utilisation-->
                  <div class="form-group">
                    <label for="date">Date de fin d'utilisation</label>
                    <div class="form-check">
                      <input type="date" id="date" name="date" min="2018-01-01" max="2021-02-23">
                    </div>
                  </div>

                  <!--Tags-->
                  <div class="form-group">
                      <label for ="tags"> Tags de l'image </label>
                      <textarea  class="form-control" name="tags" id="tags" placeholder="Entrer les tags" rows="7" cols="40"></textarea>
                  </div>
                  <div>

                      <input type="submit" name="submit" class="btn btn-secondary" value="Ajouter Image">
                  </div>
                    
                </div>
            </form>
        </div>
    </div>
</section>


<div class="wrap">
    
    <!-- Define all of the tiles: -->
    <div class="box">
      <div class="boxInner">
        <img src="https://res.cloudinary.com/instagrambisphp/image/upload/v1614074752/rtbt7q0iwlexkjbze8gh.jpg" />
        <div class="titleBox">Butterfly</div>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
        <img src="https://res.cloudinary.com/instagrambisphp/image/upload/v1614074794/ecggdzh5yrhtfwv6drcs.jpg" />
        <div class="titleBox">An old greenhouse</div>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
        <img src="https://res.cloudinary.com/instagrambisphp/image/upload/v1614074796/p8g108tm9gskoyrwkmsl.jpg" />
        <div class="titleBox">Purple wildflowers</div>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
        <img src="https://res.cloudinary.com/instagrambisphp/image/upload/v1614074798/fkps4qzan7ml2rserwu7.jpg" />
        <div class="titleBox">A birdfeeder</div>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
        <img src="https://res.cloudinary.com/instagrambisphp/image/upload/v1614074802/dfmjh7kezevip89prqod.jpg" />
        <div class="titleBox">Crocus close-up</div>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
        <img src="https://res.cloudinary.com/instagrambisphp/image/upload/v1614074803/az7sindczd7g8ss70vld.jpg" />
        <div class="titleBox">The garden shop</div>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
        <img src="https://res.cloudinary.com/instagrambisphp/image/upload/v1614074796/p8g108tm9gskoyrwkmsl.jpg" />
        <div class="titleBox">Spring daffodils</div>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
        <img src="https://res.cloudinary.com/instagrambisphp/image/upload/v1614074814/zkynxiolqng3bdadmehc.jpg" />
        <div class="titleBox">Iris along the path</div>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
        <img src="https://res.cloudinary.com/instagrambisphp/image/upload/v1614074807/mkunetnanoplb3fxecxe.jpg" />
        <div class="titleBox">The garden blueprint</div>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
        <img src="https://res.cloudinary.com/instagrambisphp/image/upload/v1614075049/njicotixk1yu4jwu8tc2.jpg" />
        <div class="titleBox">The patio</div>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
        <img src="https://res.cloudinary.com/instagrambisphp/image/upload/v1614075140/e8md1udiky1krndgnhd1.jpg" />
        <div class="titleBox">Bumble bee collecting nectar</div>
      </div>
    </div>
    <div class="box">
      <div class="boxInner">
        <img src="https://res.cloudinary.com/instagrambisphp/image/upload/v1614075147/hhxzavtmvcddqab9bpzt.jpg" />
        <div class="titleBox">Winding garden path</div>
      </div>
    </div>
    
  </div>
  <!-- /#wrap -->


  

</div>



<section>

<h2>Listing des images</h2>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">URL</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($ambiances as $ambiance)
        <tr>
          <th scope="row" >{{$ambiance->id}}</th>
          <td><img src="{{$ambiance->url_images}}" alt="" style = "width:50px; height:50px"></td>
          <td class="odd"><a href="{{route('modification.ambiance',['id'=>$ambiance->id])}}">Modifier</td>
          <td class="odd"><a href="#">Supprimer</td>
        </tr>
    @endforeach
  </tbody>
</table>

</section>



<script>

  //Affichage formulaire si clique sur le bouton
    function DisplayForm() {
    var block = document.getElementById("form-image");
    block.style.display = 'block';
}

  //Suppression affichage fomulaire si click sur la croix
    function UndisplayForm(){
        var block = document.getElementById("form-image");
        block.style.display = 'none';
    }

//Vérication choix -> droits d'utilisation limités
    function Checked(){

      //Si case "oui" cochée affichage de l'input "copyright"
      if(document.getElementById('utilisation_limité_oui').checked == true){
        var check = document.getElementById('checked_right');
        check.style.display = 'block';
      }

      //Si case "oui" décochée suppression affichage "copyright"
      else{
        var check = document.getElementById('checked_right');
        check.style.display = 'none';
      }
    }
</script>

@endsection
