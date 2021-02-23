<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Nom Site</a> <!--Modifier nom du site-->
    <a style="text-decoration:none" href="{{url('/signout')}}">Sign out</a>
    
    <!-- <div class="flipkart-navbar-search smallsearch col-sm-8 col-xs-11">
      <div class="row" style="justify-content : center;">
          <input class="flipkart-navbar-input col-xs-11 bar-width" type="" placeholder="Search image..." name="">
          <button class="flipkart-navbar-button col-xs-1">
              <svg width="20px" height="15px">
                  <path d="M11.618 9.897l4.224 4.212c.092.09.1.23.02.312l-1.464 1.46c-.08.08-.222.072-.314-.02L9.868 11.66M6.486 10.9c-2.42 0-4.38-1.955-4.38-4.367 0-2.413 1.96-4.37 4.38-4.37s4.38 1.957 4.38 4.37c0 2.412-1.96 4.368-4.38 4.368m0-10.834C2.904.066 0 2.96 0 6.533 0 10.105 2.904 13 6.486 13s6.487-2.895 6.487-6.467c0-3.572-2.905-6.467-6.487-6.467 "></path>
              </svg>
          </button>
      </div> -->


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
  </div>
  </nav>

