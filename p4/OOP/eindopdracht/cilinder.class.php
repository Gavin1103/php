<?php 

class cilinder extends figuur{


    public function opperBerekenen($action)
    {
        $breedte = 8;
        $hoogte = 10;
        $straal = $breedte / 2;
        $oppervlakteCirkel = $straal * $straal * pi();
        $oppervlakteMantel = 2 * pi() * $straal * $hoogte;

        if($action ==  "berekenen"){

            $this->oppervlakte = $oppervlakteCirkel * 2 + $oppervlakteMantel;
           
        }
        
    }

    public function inhoudBerekenen($action)
    {

        $breedte = 8;
        $hoogte = 10;
        $straal = $breedte / 2;
        $oppervlakteCirkel = $straal * $straal * pi();

        if($action ==  "berekenen"){
            $this->inhoud = $oppervlakteCirkel * $hoogte;
        }
       
    }

    public function omtrekBerekenen($action)
    {

        $breedte = 8;
        $straal = $breedte / 2;
        $oppervlakteCirkel = $straal * $straal * pi();

        if($action ==  "berekenen"){
           $this->omtrek = $oppervlakteCirkel;
        }
    }

}


$cilinder = new cilinder("cilinder", 10, 8, 8, 0, 0, 0);
$cilinder->opperBerekenen("berekenen");
$cilinder->inhoudBerekenen("berekenen");
$cilinder->omtrekBerekenen("berekenen");
var_dump($cilinder);


