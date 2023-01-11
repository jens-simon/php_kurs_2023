<?php


trait Schuettelbar 
{
 public function schuetteln(){
        echo "ich werde geschuetteln!";
 }

}

trait Fliessbar
{
 public function fliesse(){
        echo "ich kann fliessen!";
 }
}


abstract class Getraenk{
    public function schuetteln(){
        echo "ich werde geschuetteln!";
 }
}

abstract class Saft extends Getraenk {}
class Apfelsaft extends Saft{}
class Kiwisaft extends Saft 
{ 
    use Schuettelbar; 
    use Fliessbar;
}

abstract class Spirituose extends Getraenk {}
class Wodka extends Spirituose {use Schuettelbar; }
class Tequilla extends Spirituose
{
    use Fliessbar;
}

// Objekt Welt
$wodak = new Wodka();
$wodak->schuetteln();

$apfelsaft = new Apfelsaft();
//$apfelsaft-> //keine Trait für Apfelsaft definiert!

