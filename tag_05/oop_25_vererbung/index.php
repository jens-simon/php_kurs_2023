<?php




// Die Klasse ist abstract definiert, sind kann kein Objekt instanzieren. Siehe unten!
abstract class Produkt 
{
    public $preis;

}

class Buch extends Produkt
{
    public $autor;
}


class Laptop extends Produkt
{
    public $hersteller;

}

// kein Objekt möglich, da abstrakt
//$produkt = new Produkt;   // preis
//$produkt->preis    = 9;

$buch=new Buch();   // preis , autor
$buch->preis    = 9;
$buch->autor    = "Jens Simon";

$laptop =new Laptop(); // preis, hersteller
$laptop->preis    = 5999;
$laptop->hersteller = "AlienWare";