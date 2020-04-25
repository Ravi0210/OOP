<?php
/**
 * Created by PhpStorm.
 * User: ravi
 * Date: 3-4-2019
 * Time: 12:23
 */

namespace huizenmarkt;


class Huis
{
    public $verdiepingen;
    public $kamers = [];
    public $breedte;
    public $hoogte;
    public $diepte;

    public function __construct( $breedte, $hoogte, $diepte, $verdiepingen)
    {
        $this->breedte = $breedte;
        $this->hoogte = $hoogte;
        $this->diepte = $diepte;
        $this->verdiepingen = $verdiepingen;

    }

    public function addkamers($kamer)
    {
        $this->kamers [] = $kamer;
    }

    public function huisinfo()
    {
        return "</br> kubiekemeter ". $this->breedte * $this->diepte * $this->hoogte . "</br>verdiepingen " . $this->verdiepingen .
            "</br>breedte " . $this->breedte . "</br>diepte " . $this->diepte . "</br>hoogte " . $this->hoogte . "</br>" ;
        //"</br>neppeprijs " . $this->breedte * $this->diepte * $this->hoogte * 5000
    }
}