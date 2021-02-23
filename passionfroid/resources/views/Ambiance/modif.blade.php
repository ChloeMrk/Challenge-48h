@extends('layout')

@section('contenu')

<!--Section qui regroupe les informations de l'image séléctioné-->
<section style="margin: 20px; margin-top:50px; width: 100%; display:flex; text-align: center; justify-content:center;">
    <div class="card border-secondary mb-3" style="max-width: 40rem; margin-right :20px;">
        <div class="card-header" style="background-color :  #333316d0 "><h3>Informations image séléctionnée<h3></div>
            <div class="card-body text-secondary">
                <div style="display: block;"> 
                    <div>
                        <h5 class="card-title">Nom de l'image</h5> <!--BDD : Nom de l'image-->
                        <hr />
                        <h5 class="card-title">Emplacement affichage image</h5> <!--BDD : Image-->
                        <hr />
                        <h5 class="card-title">Description de l'image</h5><!--BDD : Description de l'image-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--Section de formulaire de modification image-->
<section id="modif-form">
    <div class="section-content">
        <h2 class="title-div-img">Modification image produit</h2>
    </div>
    <div class="contact-section">
        <div class="container">
            <form action="ambiance_modification" method="POST" enctype="multipart/form-data" style="display: flex;">
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

<p>Bouton préfabriqués pour modification et suppression</p>
<button type="button" class="btn btn-secondary" href="#">Modifier</button><!--Renvoyer page modification-->
<button type="button" class="btn btn-danger" href="#">Supprimer</button><!--Fonction suppression-->

<script>
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