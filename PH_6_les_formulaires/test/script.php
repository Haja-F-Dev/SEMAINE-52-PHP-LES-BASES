<form action="script.php" method="post"> 
   Tu utilises internet plutôt le :<br> 
   <input type="checkbox" name="Fjour[]" value="Lundi">Lundi<br>
   <input type="checkbox" name="Fjour[]" value="Mardi">Mardi<br>
   <input type="checkbox" name="Fjour[]" value="Mercredi">Mercredi<br>
   <input type="checkbox" name="Fjour[]" value="Jeudi">Jeudi<br />
   <input type="checkbox" name="Fjour[]" value="Vendredi">Vendredi<br>
   <input type="submit" name="envoyer" value="Envvoyer"> 
</form>

<?php 
echo "Tu surfes sur le web en semaine plutôt le : "; 

// Lecture du tableau 
foreach (($_REQUEST["Fjour"]) as $jour)     
{ 
    echo"- $jour<br>"; 
} 
?> 