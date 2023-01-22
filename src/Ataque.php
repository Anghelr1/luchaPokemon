<?php

namespace Anghel\LuchaPokemon;

use Anghel\LuchaPokemon\Utils\PokemonData;

class Ataque extends PokemonData
{
    private string $ataque;
    private int $dañoAtaque;

    /**
     * @return string
     */
    protected function getAtaque(): string
    {
        return $this->ataque;
    }

    /**
     * @return int
     */
    protected function getDañoAtaque(): int
    {
        return $this->dañoAtaque;
    }

    /**
     * @param string $ataque
     */
    private function setAtaque(string $ataque): void
    {
        $this->ataque = $ataque;
    }

    /**
     * @param int $dañoAtaque
     */
    private function setDañoAtaque(int $dañoAtaque): void
    {
        $this->dañoAtaque = $dañoAtaque;
    }


    protected function ataquePrimario(Pokemon $pokemon)
    {
        $this->setAtaque($this->rndMovimiento());
        $this->setDañoAtaque($pokemon->getNivel() * 5.5);
        $pokemon->setVida($pokemon->getVida() - $this->getDañoAtaque());

    }
    protected function ataqueSecundario(Pokemon $pokemon)
    {
        $this->setAtaque($this->rndMovimiento());
        $this->setDañoAtaque($pokemon->getNivel() * 2.5);
        $pokemon->setVida($pokemon->getVida() - $this->getDañoAtaque());

    }
    protected function ataqueTerciario(Pokemon $pokemon)
    {
        $this->setAtaque($this->rndMovimiento());
        $this->setDañoAtaque($pokemon->getNivel() * 1.5);
        $pokemon->setVida($pokemon->getVida() - $this->getDañoAtaque());

    }



}
