<?php

class Figuur
{
    public $kleur;
    public $hoogte;
    public $breedte;

    public function __construct($kleur, $hoogte, $breedte)
    {
        $this->kleur = $kleur;
        $this->hoogte = $hoogte;
        $this->breedte = $breedte;
    }
}

class Vierkant extends Figuur
{
    public $kleur;
    public $hoogte;
    public $breedte;

    public function __construct($kleur, $hoogte, $breedte)
    {
        parent::__construct($kleur, $hoogte, $breedte);
        $this->kleur = $kleur;
        $this->hoogte = $hoogte;
        $this->breedte = $breedte;
    }
}

class Cirkel extends Figuur
{
    public $kleur;
    public $hoogte;
    public $breedte;

    public function __construct($kleur, $hoogte, $breedte)
    {
        parent::__construct($kleur, $hoogte, $breedte);
        $this->kleur = $kleur;
        $this->hoogte = $hoogte;
        $this->breedte = $breedte;
    }
}

class Rechthoek extends Figuur
{
    public $kleur;
    public $hoogte;
    public $breedte;

    public function __construct($kleur, $hoogte, $breedte)
    {
        parent::__construct($kleur, $hoogte, $breedte);
        $this->kleur = $kleur;
        $this->hoogte = $hoogte;
        $this->breedte = $breedte;
    }
}

class Driehoek extends Figuur
{
    public $kleur;
    public $hoogte;
    public $breedte;

    public function __construct($kleur, $hoogte, $breedte)
    {
        parent::__construct($kleur, $hoogte, $breedte);
        $this->kleur = $kleur;
        $this->hoogte = $hoogte;
        $this->breedte = $breedte;
    }
}

$vierkant = new vierkant("red", 100, 100);
$cirkel = new cirkel("blue", 100, 100);
$rechthoek = new rechthoek("green", 100, 100);
$driehoek = new driehoek("yellow", 100, 100);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<main>
    <div class="vierkant">vierkant</div>
    <div class="cirkel">cirkel</div>
    <div class="rechthoek">rechthoek</div>
    <div class="driehoek">driehoek</div>
</main>
</body>
<style>
    main {

        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: space-around;
        align-items: center;
        align-content: space-between;
    }

    .vierkant {
        border: 3px solid black;
        width: <?php echo $vierkant->breedte ?>px;
        height: <?php echo $vierkant->hoogte  ?>px;
        background-color: <?php echo $vierkant->kleur  ?>;
    }

    .cirkel {
        border: 3px solid black;
        border-radius: 3000px;
        width:  <?php echo $cirkel->breedte ?>px;
        height: <?php echo $cirkel->hoogte ?>px;
        background-color:  <?php echo $cirkel->kleur ?>;
    }

    .rechthoek {
        border: 3px solid black;
        width:  <?php echo $rechthoek->breedte ?>px;
        height: <?php echo $rechthoek->hoogte ?>px;
        background-color:  <?php echo $rechthoek->kleur ?>;
    }

    .driehoek {
        width: 0;
        height: 0;
        border-top: solid 0 transparent;
        border-right: solid 100px transparent;
        border-bottom: solid <?php echo $driehoek->hoogte ?>px <?php echo $driehoek->kleur ?>;
        border-left: solid 100px transparent;
    }
</style>
</html>