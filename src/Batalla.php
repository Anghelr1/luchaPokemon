<?php

namespace Anghel\LuchaPokemon;

class Batalla extends Ataque
{
    private bool $VFgame = false;

    /**
     * @return bool
     */
    private function isVFgame(): bool
    {
        return $this->VFgame;
    }

    /**
     * @param bool $VFgame
     */
    private function setVFgame(bool $VFgame): void
    {
        $this->VFgame = $VFgame;
    }


    public function PvP(Pokemon $pokemon1, Pokemon $pokemon2)
    {
        while (!$this->isVFgame()) {
            $this->EstadoPokemonesPvP($pokemon1, $pokemon2);
            $ataquePokemon1 = random_int(1, 3);
            $ataquePokemon2 = random_int(1, 3);

            //Ataque pokemon 1
            if (!$this->isVFgame()) {
                switch ($ataquePokemon1) {
                    case 1:
                    {
                        $this->Ataque($pokemon1, $pokemon2, "ataquePrimario");

                        break;
                    }
                    case 2:
                    {
                        $this->Ataque($pokemon1, $pokemon2, "ataqueSecundario");

                        break;
                    }
                    case 3:
                    {
                        $this->Ataque($pokemon1, $pokemon2, "ataqueTerciario");

                        break;
                    }
                }
            }

            //Ataque pokemon 2
            if (!$this->isVFgame()) {
                switch ($ataquePokemon2) {
                    case 1:
                    {
                        $this->Ataque($pokemon2, $pokemon1, "ataquePrimario");

                        break;
                    }
                    case 2:
                    {
                        $this->Ataque($pokemon2, $pokemon1, "ataqueSecundario");

                        break;
                    }
                    case 3:
                    {
                        $this->Ataque($pokemon2, $pokemon1, "ataqueTerciario");

                        break;
                    }
                }
            }

//            $this->setVFgame(true);
        }

    }

    private function EstadoPokemonesPvP(Pokemon $pokemon1, Pokemon $pokemon2)
    {
        if ($pokemon1->getVida() <= 0) {
            print_r("El pokemon {$pokemon1->getNombre()} ha muerto\n");
            print_r("El pokemon {$pokemon2->getNombre()} ha GANDADOOOO!!!\n");
            $this->setVFgame(true);
        }
        if ($pokemon2->getVida() <= 0) {
            print_r("El pokemon {$pokemon2->getNombre()} ha muerto\n");
            print_r("El pokemon {$pokemon1->getNombre()} ha GANADADOOOO!!!\n");
            $this->setVFgame(true);
        }
    }

    private function Ataque(Pokemon $agresor, Pokemon $agredido, String $ataqueFn){
        $this->EstadoPokemonesPvP($agresor, $agredido);

        print_r("Vida de pokemon {$agresor->getNombre()} es de {$agresor->getVida()}\n");
        print_r("Vida de pokemon {$agredido->getNombre()} es de {$agredido->getVida()}\n");
        print_r("Atancando con $ataqueFn\n");
        $this->$ataqueFn($agresor);
        print_r("El pokemon {$agresor->getNombre()} ha usado {$this->getAtaque()} y ha hecho {$this->getDañoAtaque()} de daño\n");
        print_r("El pokemon {$agresor->getNombre()} ha atacado a {$agredido->getNombre()}\n");
        $agredido->setVida($agredido->getVida() - $this->getDañoAtaque());
        print_r("El pokemon {$agredido->getNombre()} tiene {$agredido->getVida()} de vida\n");

        $this->EstadoPokemonesPvP($agresor, $agredido);
    }

}
