<?php
//ik was al begonnen aan 1b wist niet dat ik deze opdracht kon inleveren
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

class Kamers
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
//huis1
$huis1 = new huis (1, 4, 7, 10);
$kamer1 = new kamers(1,1,1);
$kamer2 = new kamers(2,2,1);
$kamer9 = new kamers(2,2,1);
//huis2
$huis2 = new huis (2, 5, 8, 11);
$kamer3 = new kamers(3,2,1);
$kamer4 = new kamers(4,2,2);
//huis3
$huis3 = new huis (3, 6, 9, 12);
$kamer5 = new kamers(5,2,3);
$kamer6 = new kamers(6,2,2);


$huis1->addkamers($kamer1);
$huis1->addkamers($kamer2);
$huis2->addkamers($kamer3);
$huis2->addkamers($kamer4);
$huis3->addkamers($kamer5);
$huis3->addkamers($kamer6);



echo "huis 1</br>";
echo $huis1->huisinfo();
echo "prijs ";
echo $kamer1->money() + $kamer2->money() + $kamer9->money();
echo "</br></br>huis 2 </br>";
echo $huis2->huisinfo();
echo "prijs ";
echo $kamer3->money() + $kamer4->money();
echo "</br></br>huis 3 </br>";
echo $huis3->huisinfo();
echo "prijs ";
echo $kamer5->money() + $kamer6->money();
foreach ($huis1 as $kamer){

}

























