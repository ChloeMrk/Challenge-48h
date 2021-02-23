@extends('layout')


@foreach($ambiances as $ambiance)  

            <div class="catalogue">
                <a href="{{route('showAmbiance',['id'=>$ambiance->id])}}" style="text-decoration:none">
                <h4 >{{$ambiance->titre}}</h4>
                
            <div><img src="{{$ambiance->url_images}}" alt="produitImage"></div></a>
            <p>{{$ambiance->tag}}</p>

            <form action="{{route('modificiation.ambiance',['id'=>$ambiance->id])}}">
                <button type="submit">Modifier</button>
            </form>

           

            </div> 
            

        @endforeach