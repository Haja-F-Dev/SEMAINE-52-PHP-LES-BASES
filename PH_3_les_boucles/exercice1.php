<?php

/**
 * Exercice 1 : Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant : 1 3 5 7...
 */

for ($i = 0; $i < 151; $i++) {
   if(($i % 2) != 0) {
       echo $i . "<br>";
   }
}
