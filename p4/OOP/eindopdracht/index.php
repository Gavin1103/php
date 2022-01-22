<?php


class figuur
{
    public $figuur = "";
    public $hoogte = 0;
    public $breedte = 0;
    public $lengte = 0;
    public $omtrek = 0;
    public $oppervlakte = 0;
    public $inhoud = 0;


    public function __construct($figuur, $hoogte, $breedte, $lengte, $omtrek, $oppervlakte, $inhoud)
    {
        $this->figuur = $figuur;
        $this->hoogte = $hoogte;
        $this->breedte = $breedte;
        $this->lengte = $lengte;
        $this->omtrek = $omtrek;
        $this->oppervlakte = $oppervlakte;
        $this->inhoud = $inhoud;
    }
}

// alles voor vierkant

include("vierkant.class.php");

// alles voor cilidner

include("cilinder.class.php");
