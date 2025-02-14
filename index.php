<?php
    include './header.php';
?>

<?php

  class Pokemon {
    public $nome;  // public pode mudar dentro da caixa, private nada de fora pode mudar
    public $poder;
    public $foto;
  }

  $pokemon1 = new Pokemon();
  $pokemon1->nome = "Pikachu";
  $pokemon1->poder = "Poder Eletrizante";
  $pokemon1->foto = "https://img.pokemondb.net/artwork/large/pikachu.jpg" ;

  $pokemon2 = new Pokemon();
  $pokemon2->nome = "Charizard";
  $pokemon2->poder = "Poder de fogo ardente";
  $pokemon2->foto = "https://unite.pokemon.com/images/pokemon/gengar/stat/stat-gengar.png";

  $pokemons = [
    $pokemon1,
    $pokemon2

    ];

  
?>

  <div class="container">
    <div class="row">

    <?php foreach ($pokemons as $key => $pokemon) { ?>

      <div class="col-12 col-md-4 col-lg-3 p-3">
        <div class="card  shadow" style="width: 18rem;">
          <img src="<?php echo $pokemon->foto; ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $pokemon->nome; ?></h5>
            <p class="card-text"><?php echo $pokemon->nome; ?></p>
            <a href="#" class="btn btn-primary">Ver mais</a>
          </div>
        </div>
      </div>
  
<?php } ?>
    
     
    
  <?php
    include './footer.php';
?>
