<?php 

class vierkant extends figuur


{
    public function opperBerekenen($action)
    {
        $lengte = 10;
        $breedte = 10;
        if ($action == "berekenen") {
            $this->oppervlakte = $lengte * $breedte;
        }
    }

    public function inhoudBerekenen($action)
    {
        $lengte = 10;
        $breedte = 10;
        $hoogte = 10;

        if ($action == "berekenen") {
            $this->inhoud = $lengte * $breedte * $hoogte;
        }
    }

    public function omtrekBerekenen($action)
    {
        $lengte = 10;
        $breedte = 10;
        
        if ($action == "berekenen") {
            $this->omtrek = $lengte + $breedte;
        }
    }
}

echo "<pre>";

$vierkant = new vierkant("vierkant", 10, 10, 10, 0, 0, 0);
$vierkant->opperBerekenen("berekenen");
$vierkant->inhoudBerekenen("berekenen");
$vierkant->omtrekBerekenen("berekenen");
var_dump($vierkant);
