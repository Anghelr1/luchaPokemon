<?php

namespace Anghel\LuchaPokemon;

class Pokemon
{
    private float $vida = 100;

    public function __construct(
        private string $nombre,
        private string $elemento,
        private int $nivel
    )
    {
        $this->vida *= $this->nivel;

        print_r("Pokemon creado con nombre $this->nombre, es de tipo $this->elemento y es nivel $this->nivel con vida de $this->vida\n");
    }

    /**
     * @return float
     */
    public function getVida(): float
    {
        return $this->vida;
    }

    /**
     * @param float $vida
     */
    public function setVida(float $vida): void
    {
        $this->vida = $vida;
    }


    /**
     * @return string
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * @return string
     */
    public function getElemento(): string
    {
        return $this->elemento;
    }

    /**
     * @return int
     */
    public function getNivel(): int
    {
        return $this->nivel;
    }




}