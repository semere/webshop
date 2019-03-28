<?php

class Mens {
    private $naam;
    private $lengte;
    private $gewicht;
    private $leeftijd;
    

public function geefmejebmi() {
    $resultaat = $this->gewicht / ($this->lengte * $this->lengte);
    return $resultaat;
}

public function geefmejenaam() {
           return $this->naam;
}
function __construct($pnaam, $plengte, $pgewicht){
    $this->naam = $pnaam;
    $this->lengte = $plengte;
    $this->gewicht = $pgewicht;
}
}

$m1 = new Mens("Piet", 1.67, 63.5);
$m2 = new Mens("Klaas", 1.83, 100.0);
$m3 = new Mens("Jan", 1.93, 103);

$klas =[$m1, $m2, $m3];

foreach($klas as $deelnemer) {
  if ($deelnemer->geefmejebmi() > 25)
  echo "<B>" .$deelnemer->geefmejenaam() . " " . round($deelnemer->geefmejebmi(),1). "<br>";
  else
  echo $deelnemer->geefmejenaam() . " " . round($deelnemer->geefmejebmi(),1). "<br>";
}
?>