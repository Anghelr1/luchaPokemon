<?php
require 'vendor/autoload.php';
use Anghel\LuchaPokemon\Pokemon;
use Anghel\LuchaPokemon\Batalla;
use Anghel\LuchaPokemon\Utils\PokemonData;

$pokemonData = new PokemonData();

$pokemon1 = new Pokemon($pokemonData->rndNombre(),$pokemonData->rndElemento(),random_int(1,100));
$pokemon2 = new Pokemon($pokemonData->rndNombre(),$pokemonData->rndElemento(),random_int(1,100));

$batalla = new Batalla();


$batalla->PvP($pokemon1,$pokemon2);
