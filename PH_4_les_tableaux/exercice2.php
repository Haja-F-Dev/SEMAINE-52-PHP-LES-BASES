<?php

$a = array("19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"),
       "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""),
       "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation")
     );




// Trouver la position de la dernière occurrence de Stage pour le groupe 19001

$element1 = "Centre";
$element2 = "";
$element3 = "Validation";

for ($i = 0; $i < count($a["19001"]) ; $i++) { // On parcours le tableau
    unset($a["19001"][array_search($element1, $a["19001"])]); // On retire les occurrences de Centre
    unset($a["19001"][array_search($element2, $a["19001"])]); // On retire les occurrences vide
    unset($a["19001"][array_search($element3, $a["19001"])]); // On retire les occurance de validation
}

echo "<pre>";
print_r($a);
echo "</pre>";

echo "La position de la dernière occurence de \"Stage\" est : " . array_key_last($a["19001"]);
