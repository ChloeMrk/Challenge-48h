@extends('layout')


@section('contenu')
<ul>

    <li>
    
        @foreach($ambiances as $ambiance)

        
                <h4>{{$ambiance->titres}}</h4>
                <p>{{$ambiance->tags}} €</p>
                <div><img src="{{$ambiance->url_images}}" alt="ambianceImage"></div>

        @endforeach
    
    
    </li>

    <div class="d-flex justify-content-center">
    {!! $ambiances->links() !!}
    </div>
   
   
</ul>

    
@endsection