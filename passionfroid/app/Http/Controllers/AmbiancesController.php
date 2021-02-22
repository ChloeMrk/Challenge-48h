<?php

namespace App\Http\Controllers;
use App\Models\Ambiance as Ambiance;
use Illuminate\Http\Request;

class AmbiancesController extends Controller
{
    //

    public function ajouts(){
        return view('Ambiance/ambiance');
    }

    public function ambiances(){

        
       
        //Créer un produit pour l'ajouter à la table produit
        $ambiances = Ambiance::create([
 
             
              // Stocke l'image sur Cloudinary et renvoie l'URL sécurisée
             'url_images' => cloudinary()->upload(request()->file('file')->getRealPath())->getSecurePath(),
           
  
 
        ]);
     }

     public function form_ambiance(){
        return view('Ambiance/modif');

    
    }

     public function ambiance_modification(){
        $ambiances = Ambiance::all();

            $ambiances->titre;
            $ambiances->tag;
     }
}
