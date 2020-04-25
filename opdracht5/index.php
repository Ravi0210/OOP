<?php



require "kamer.php";
use huizenlink as kamerten;
require "Huis.php";
use huizenmarkt as huizen;


//huis1
$huis1 = new huizenmarkt\Huis( 1, 4, 7, 10);
$kamer1 = new kamerten\kamer(1,1,1);
$kamer2 = new kamerten\kamer(2,2,1);
$kamer9 = new kamerten\kamer(2,2,1);
//huis2
$huis2 = new huizenmarkt\Huis(2, 5, 8, 11);
$kamer3 = new kamerten\kamer(3,2,1);
$kamer4 = new kamerten\kamer(4,2,2);
//huis3
$huis3 = new huizenmarkt\Huis(3, 6, 9, 12);
$kamer5 = new kamerten\kamer(5,2,3);
$kamer6 = new kamerten\kamer(6,2,2);


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

























