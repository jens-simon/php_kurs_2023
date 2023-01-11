<?php




// Die Klasse ist abstract definiert, sind kann kein Objekt instanzieren. Siehe unten!
abstract class Produkt 
{
    public $preis;
     
    public function zeigePreisAn(){
        // Code
        echo "Produkt-Klasse Code<br>";
    }
}

class Buch extends Produkt
{
    public $autor;
    
    public function zeigePreisAn(){
        // Code
        // overriding
       // parent::zeigePreisAn();
        echo "Buch-Klasse Code<br>";
    }
  
    
}


class Laptop extends Produkt
{
    public $hersteller;
  
}



// kein Objekt möglich, da abstrakte Klasse (abstract class Produkt siehe oben!)
//$produkt = new Produkt;   // preis
//$produkt->preis    = 9;

$buch = new Buch();   // preis , autor
$buch->preis    = 9;
$buch->autor    = "Jens Simon";
$buch->zeigePreisAn();

var_dump($buch);



