<?php

namespace App\Http\Controllers;
use App\Models\Produit as Produit;


use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    public function ajout(){
        return view('Produit/produit');
    }
    //

    public function produit(){

        
       
        //Créer un produit pour l'ajouter à la table produit
        $produits = Produit::create([
 
             
              // Stocke l'image sur Cloudinary et renvoie l'URL sécurisée
             'url_image' => cloudinary()->upload(request()->file('file')->getRealPath())->getSecurePath(),
           
  
 
        ]);
     }


     public function form_produit(){
        return view('Produit/modif');

    
    }

     public function produit_modification(int $id){
        $produits = Produit::all()->where('id',$id)->first();

            $ambiances->titre;
            $ambiances->tag;
     }
}
