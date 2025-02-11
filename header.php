<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão de HTML, CSS e JS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-custom">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="https://cdn0.iconfinder.com/data/icons/pokemon-go-vol-2/135/_Pokeball-512.png" width="30">
            Pokemon
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Pokemon
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="#">
                        <img src="https://cdn0.iconfinder.com/data/icons/pokemon-go-vol-2/135/_pikachu-512.png" width="25px">Pikachu
                    </a></li>
                  <li><a class="dropdown-item" href="#">
                    <img src="https://cdn1.iconfinder.com/data/icons/pokemon-set/24/Charizard-512.png" width="25px">Charizard</a></li>
                  <li><a class="dropdown-item" href="#">
                    <img src="https://cdn0.iconfinder.com/data/icons/pokemon-go-vol-1/135/_bulbasaur-512.png" width="25px">Bulbasaur</a></li>
                  <li><a class="dropdown-item" href="#">
                    <img src="https://cdn0.iconfinder.com/data/icons/pokemon-go-vol-1/135/_charmander-512.png" width="25px">Charmander</a></li>
                  <li><a class="dropdown-item" href="#">
                    <img src="https://cdn0.iconfinder.com/data/icons/pokemon-go-vol-2/135/_squirtle-512.png" width="25px">Squirtle</a></li>
                  <li><a class="dropdown-item" href="#">
                    <img src="https://cdn1.iconfinder.com/data/icons/pokemon-set/24/Clefairy-512.png" width="25px">Clefairy</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
    </nav>



  <div class="container">
    <div class="row">
      <!-- pikachu -->
     <div class="col-12 col-lg-3 p-3">   <!-- p e o padding e da o espassamento  -->
        <div class="card" style="width: 18rem;">
          <img src="https://img.pokemondb.net/artwork/large/pikachu.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Pikachu</h5>
            <p class="card-text">Poder eletrizante</p>
            <a href="#" class="btn btn-primary">Ver mais</a>
          </div>
        </div>
      </div>
      <!-- charizard -->
      <div class="col-12 col-lg-3 p-3">
        <div class="card shadow" style="width: 18rem;">
          <img src="https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/006.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Charizard</h5>
            <p class="card-text">Poder de fogo ardente</p>
            <a href="#" class="btn btn-primary">Ver mais</a>
          </div>
        </div>
      </div>
      <!-- Blastoid -->
      <div class="col-12 col-lg-3 p-3">
        <div class="card" style="width: 18rem;">
          <img src="https://sg.portal-pokemon.com/play/resources/pokedex/img/pm/00186af714a048895ba8116e71b08671c3cfb8f5.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Blastoid</h5>
            <p class="card-text">Poderosos jatos d'agua</p>
            <a href="#" class="btn btn-primary">Ver mais</a>
          </div>
        </div>
      </div>
      <!-- gengar -->
      <div class="col-12 col-lg-3 p-3">
        <div class="card" style="width: 18rem;">
          <img src="https://unite.pokemon.com/images/pokemon/gengar/stat/stat-gengar.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Gengar</h5>
            <p class="card-text">Sombras e ilusões fantagóricas</p>
            <a href="#" class="btn btn-primary">Ver mais</a>
          </div>
        </div>
      </div>
      </div>
  </div>

</body>
</html>