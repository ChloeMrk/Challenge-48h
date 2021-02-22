<?php

namespace App\Http\Controllers;
use App\Models\Ambiance as Ambiance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File ;

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

     public function show(int $id){
        $produits = Ambiance::all()->where('id',$id)->first();
        return view('Ambiance/show',['titre'=>$produits->titres,'tag'=>$produits->tags,'url_images'=>$produits->url_images]);

    }

    public function ajout_en_masse() //le dossier doit être stocker à la racine du fichier public
    {
        $path = public_path('/' . 'photos ambiance');
        $files = File::allfiles($path);
        foreach ($files as $photo){
            cloudinary()->upload($photo->getRealPath())->getSecurePath();

            $ambiances = Ambiance::create([
 
             
                // Stocke l'image sur Cloudinary et renvoie l'URL sécurisée
               'url_images' => cloudinary()->upload($photo->getRealPath())->getSecurePath(),
             
    
   
          ]);
        } 
    }

}
