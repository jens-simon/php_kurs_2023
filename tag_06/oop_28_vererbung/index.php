<?php

trait Shakeable
{
    public function schuetteln()
    {
        // Befehle
        echo "ich bins, ich wurde geschütteln";
    }
}

abstract class Produkt
{
    use Shakeable;
    use Sortable;
    use Cloneable;
    
    protected $preis;


    public function getPreis()
    {
        return $this->preis;
    }

    /**
     * @param $preis
     */
    public function setPreis($preis)
    {
        $this->preis = $preis;
    }

    public function __construct($preis)
    {
        $this->setPreis($preis);
    }


}

class Buch extends Produkt
{
    protected $autor;

    public function __construct($autor, $preis)
    {
        $this->setAutor($autor);

        parent::__construct($preis);

    }


    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * @param $autor
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }
}

//
$buch = new Buch("Jens Simon", 19.9);
$buch->setPreis(22.12);

var_dump($buch);