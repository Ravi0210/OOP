<?php
/**
 * Created by PhpStorm.
 * User: ravi
 * Date: 3-4-2019
 * Time: 12:24
 */

namespace huizenlink;

class kamer
{

    protected $lengte;
    protected $breedte;
    protected $hoogte;



    public function __construct($lengte, $breedte, $hoogte)
    {
        $this->lengte = $lengte;
        $this->breedte = $breedte;
        $this->hoogte = $hoogte;
    }

    public function money()
    {
        $prijstag = 10;
        $prijs = $this->hoogte * $this->breedte * $this->lengte * $prijstag;
        return $prijs;
    }
}