<?php

namespace App\Http\Controllers;
use App\Models\Ambiance as Ambiance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File ;

class AmbiancesController extends Controller
{
    //

    public function ajouts(){
        return view('Ambiance/ajout');
    }

    public function ambiances(){

        
       
        //Créer un produit pour l'ajouter à la table produit
        $ambiances = Ambiance::create([
 
             
              // Stocke l'image sur Cloudinary et renvoie l'URL sécurisée
             'url_images' => cloudinary()->upload(request()->file('file')->getRealPath())->getSecurePath(),
           
  
 
        ]);
     }

     public function form_ambiance(int $id){
        $ambiances = Ambiance::all()->where('id',$id)->first();
        return view('Ambiance/modif');

    
    }

     public function ambiance_modification(int $id){
        $ambiances = Ambiance::all()->where('id',$id)->first();
            $ambiances = id();
            $ambiances->titres = request('titres');
            $ambiances->tags = request('tags');
            $ambiance->save();
     }

     public function show(int $id){
        $ambiances= Ambiance::all()->where('id',$id)->first();
        return view('Ambiance/show',['titre'=>$ambiances->titres,'tag'=>$ambiances->tags,'url_images'=>$ambiances->url_images]);

    }

    public function ajout_en_masse() //le dossier doit être stocker à la racine du fichier public
    {
        $path = public_path('/' . 'photos ambiance');
        $files = File::allfiles($path);
        foreach ($files as $photo){
            

            $ambiances = Ambiance::create([
 
             
                // Stocke l'image sur Cloudinary et renvoie l'URL sécurisée
               'url_images' => cloudinary()->upload($photo->getRealPath())->getSecurePath(),
             
    
   
          ]);
        } 
    }

    public function catalogue(){

        $ambiances= Ambiance::all();
       
        return view('Ambiance/ambiance',[
            'ambiances'=>$ambiances,
            
        ]);
    }


    public function recherche()
    {
        $search = request()->input('search');

        $ambiances = Ambiance::where('titres','like',"%$search%")
            ->orWhere('tags','like',"%$search%")
            ->paginate(2);

        return view('Ambiance/search')->with('ambiances',$ambiances);

    }

}
