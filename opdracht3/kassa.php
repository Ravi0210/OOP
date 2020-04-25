<?php
class kassabon
{
    public $kaas;
    public $paprika;
    public $brocoli;

    public function  __constructor($kaas,$paprika,$brocoli){

$this->kaas = $kaas;
$this->paprika = $paprika;
$this->brocoli = $brocoli;

}
    public function berekenen()
    {
        echo "Datum: " . date("Y-m-d");
        return $this->kaas . $this->paprika . $this->brocoli;
    }

}
$kassabon = new kassabon($kaas = $_POST["kaas"] , $paprika= $_POST["paprika"], $brocoli = $_POST["brocoli"] );
echo $kassabon->berekenen();
echo "</br>";
echo "brocoli: " . $brocoli . "<br>";
echo "paprika: " . $paprika . "<br>";
echo "kaas: " . $kaas . "<br>";
$totaal = $brocoli + $paprika + $kaas;
echo "totaal ex btw " . $totaal . "<br>";
echo "totaal inc btw " . $totaal * 1.21 . "<br>";

