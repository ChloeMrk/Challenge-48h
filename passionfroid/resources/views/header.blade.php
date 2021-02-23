Hello

<a style="text-decoration:none" href="{{url('/signout')}}">Sign out</a>

<form action="/search" class="d-flex mr-3">
                {{csrf_field()}}
            
                    <div class="form-group mb-0 mr-1">
                        <input type="text" name="search" class="form-control">   
                    </div>
                <button type="submit" class="btn btn-info">Rechercher Produit</button>
</form>

<form action="/searchs" class="d-flex mr-3">
                {{csrf_field()}}
            
                    <div class="form-group mb-0 mr-1">
                        <input type="text" name="search" class="form-control">   
                    </div>
                <button type="submit" class="btn btn-info">Rechercher Ambiance</button>
</form>