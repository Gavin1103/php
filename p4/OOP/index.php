<?php


class DrinkBeker
{
    public $color = "";
    public $width = 0;
    public $height = 0;
    public $thickness = 0; //glas dikte
    public $fragile = true; // is breekbaar
    public $kind = ""; //wat voor beker
    public $liter = 0; // in liters

    public function __construct($color, $width, $height, $thickness, $fragile, $kind, $content)
    {

        $this->color = $color;
        $this->height = $height;
        $this->width = $width;
        $this->thickness = $thickness;
        $this->fragile = $fragile;
        $this->kind = $kind;
        $this->liter = $content;
    }
}


class DrinkGlas extends DrinkBeker
{
    // glas breken
    public function glasBreken($action)
    {
        if ($action == "kapot") {

            $this->fragile = "kapot";
        }
    }
    // content in or out
    public function leegSchenken($action)
    {
        if ($action == "leegschenken") {
            $this->content = 0;
        }
    }
}

class plasticBeker extends DrinkBeker
{
    // plastic beker verven
    public function verven($action)
    {
        if ($action == "verven") {
            $this->color = "blauw";
        }
    }
}





echo "<pre>";

// wijnglas
$wijnGlas = new DrinkGlas("doorzichtig", 10, 5, 1, true, "wijnglas", 0.5);
$wijnGlas->glasBreken("kapot");
var_dump($wijnGlas);

echo "<br>";

// whiskeyglas
$wiskeyGlas = new DrinkGlas("doorzichtig", 10, 10, 2, true, "wiskeyglas", 0.2);
$wiskeyGlas->leegSchenken("leegschenken");
var_dump($wiskeyGlas);

echo "<br>";

// plasticbeker
$plasticBeker = new plasticBeker("wit", 1, 1, 1, false, "plasticbeker", 0.3);
$plasticBeker->verven("verven");
var_dump($plasticBeker);
