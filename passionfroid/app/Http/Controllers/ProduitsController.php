<?php

namespace App\Http\Controllers;
use App\Models\Produit as Produit;
use Illuminate\Support\Facades\File ;

use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    public function ajout(){
        return view('Produit/ajout');
    }
    //

    public function produit(){

        
       
        //Créer un produit pour l'ajouter à la table produit
        $produits = Produit::create([
 
             
              // Stocke l'image sur Cloudinary et renvoie l'URL sécurisée
             'url_image' => cloudinary()->upload(request()->file('file')->getRealPath())->getSecurePath(),
           
  
 
        ]);
     }

     public function ajout_en_masse() //le dossier doit être stocker à la racine du fichier public
    {
        $path = public_path('/' . 'photos produits');
        $files = File::allfiles($path);
        foreach ($files as $photo){
            

            $produits = Produit::create([
 
             
                // Stocke l'image sur Cloudinary et renvoie l'URL sécurisée
               'url_image' => cloudinary()->upload($photo->getRealPath())->getSecurePath()
             
    
   
          ]);
        } 
    }


     public function form_produit(){
        return view('Produit/modif');

    
    }

     public function produit_modification(int $id){
        $produits = Produit::all()->where('id',$id)->first();

            $$produits->titre;
            $produits->tag;
     }

     public function show(int $id){
        $produits = Produit::all()->where('id',$id)->first();
        return view('Produit/show',['titre'=>$produits->titre,'tag'=>$produits->tag,'url_image'=>$produits->url_image]);

    }

    public function catalogue(){

        $produits= Produit::all();
    
       
        return view('Produit/produit',[
            'produits'=>$produits,
            
        ]);
    }



    public function recherche()
    {
        $search = request()->input('search');

        $produits = Produit::where('titre','like',"%$search%")
            ->orWhere('tag','like',"%$search%")
            ->paginate(2);

        return view('Produit/search')->with('produits',$produits);

    }
}
