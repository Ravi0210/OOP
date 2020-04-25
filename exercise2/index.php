<?php

class klant
{
    public $auto;
    public $naam;
    public $email;

    public function __construct($auto, $naam, $email)
    {
        $this->auto = $auto;
        $this->naam = $naam;
        $this->email = $email;
    }
}

class auto
{

    public $model;
    public $merk;
    public $bouwjaar;
    public $kenteken;

    public function __construct($model, $merk, $bouwjaar, $kenteken)
    {
        $this->model = $model;
        $this->merk = $merk;
        $this->bouwjaar = $bouwjaar;
        $this->kenteken = $kenteken;
    }

}
$auto = new auto("s5", "dikke audi", 2009, 333444);
$klant = new klant("dikkeaudi", "ravi", "ravi@email.nl");
echo "bouwjaar: " . $auto->bouwjaar . "<br>";
echo "model: " .$auto->model . "<br>";
echo "kenteken: " .$auto->kenteken . "<br>";
echo "merk: " .$auto->merk . "<br>";
//echo "auto: " .$klant->auto . "<br>";
echo "naam: " .$klant->naam . "<br>";
echo "email: " .$klant->email;