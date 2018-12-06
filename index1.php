<!DOCTYPE html>

<html lang="fr">
    <head>
      <meta charset= "utf-8">
        <title>Ma page de test</title>
    </head>
    <body>
        <h1>Bienvenue sur le site de toto </h1>
        <p>Le blabla de ma page...</p>

        <?php
  $date = date("d-m-Y");
  $heure = date("H:i");
  Print("Nous sommes le $date et il est $heure");
  ?>

<p>Difference de code</p>
</br>
  <?php
$date_du_jour = date ("d-a-F-Y");
$heure_courante = date ("H:i:s");
echo 'Nous sommes le : ';
echo $date_du_jour;
echo ' Et il est : ';
echo $heure_courante;
?>
<p>Nous connaissons votre adresse IP!</p>

<?php
echo 'Votre adresse IP est : '.$_SERVER['REMOTE_ADDR'];
?>

<p>Quel est le nom de votre server?</p>

<?php
echo 'Le nom de votre server est :' .$_SERVER['SERVER_NAME'];
?>

<p>Nombre de visites</p>



<?php
// Instruction 1
$fp = fopen ("compteur.txt", "r+");
// Instruction 2
$nb_visites = fgets ($fp, 11);

var_dump($nb_visites);
var_dump(intval($nb_visites));

// Instruction 3
$nb_visites = intval($nb_visites) + 1;
// Instruction 4
fseek ($fp, 0);
// Instruction 5
fputs ($fp, $nb_visites);
// Instrcution 6
fclose ($fp);
// Instrcution 7
echo 'Ce site compte '.$nb_visites.' visiteurs !';
?>

<p></p>
<br>
<?php
     $phrase = "Set de Seattles to september";
     $age = 58;
     $gpa = 32.589;
     $isMale = true;

     echo ("Hello  $phrase  to $age years old" );

 ?>
 <br>
 <br>


 <?php
      $phrase = "Giraffe Supracademy ";
      $phrase [0] = 'B';       // replace the index by its position value
      echo $phrase;            //
      $phrase2 = "IM THE LAW";
      $phrase3 = "what is the lenght of this phrase";
      echo strtoupper($phrase);                        //function to convert into lower or upper case
      echo strtolower($phrase2);
      echo strlen ($phrase3);                           //function to count characters in a string
      echo $phrase [0];
      echo str_replace("Biraffe", "Panda", $phrase);    //function to replace biraffe ( because wwe replaced index [0] by B) by panda into $prase
      echo str_replace("a", "s", $phrase);
 ?>

    </body>
</html>
