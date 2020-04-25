<?php

class oppervlakte
{
    protected $lengte;
    protected $breedte;

    public function __construct($lengte, $breedte)
    {
        $this->lengte = $lengte;
        $this->breedte = $breedte;
    }

    public function berekenen()
    {
        return $this->breedte * $this->lengte;
    }
}
$oppervlakte = new oppervlakte(4, 3);
echo $oppervlakte->berekenen();
