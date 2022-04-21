<?php

$cartes=["As",2,3,4,5,6,7,8,9,10,"Valet","Dame","Roi"];
$suites=["♦", "♣", "♥", "♠"];


for ($i=0; $i<count($suites); $i++){
    for($j=0; $j<count($cartes); $j++){
        $deck[]=$cartes[$j].$suites[$i];
    }
}

for ($i=0; $i<count($deck); $i++){
    $deck[$i]."<br>";
}

$subDeckA = array_slice($deck, 0, 26);
$subDeckB = array_slice($deck, 26);

$suffledDeck = [];

for ($i=0; $i<count($subDeckA); $i++){
    $suffledDeck[]=$subDeckA[$i];
    $suffledDeck[]=$subDeckB[$i];
}

echo "Cartes brassées sur 4 rangées : <br>";

for ($i=0; $i<count($suffledDeck); $i++){
    echo $suffledDeck[$i]." ";
    if ($i%13==12){
        echo "<br>";
    }

}

?>