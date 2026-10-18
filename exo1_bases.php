<?php
echo 'Hello PHP';
?>

<?php
<?php
echo 'Exercice 1.1 :';
?>


// $x : valide, commence par une lettre.
// $_x : valide, commence par un underscore.
// $2x : invalide, commence par un chiffre.
// $x-y : invalide, le tiret n'est pas autorisé.
// $Prix_HT : valide, contient des lettres et un underscore.
// $prix ht : invalide, contient un espace.
// $état : valide en PHP 8 avec un identifiant UTF-8.
// $état Montrez : invalide, contient un espace.

// Déclaration des variables valides
$x = 10;
$_x = 20;
$Prix_HT = 150;
$état = "Maroc";

// $a et $A sont deux variables distinctes.
$a = 5;
$A = 15;

echo $a;
echo "<br>";
echo $A;

?>
<?php
echo 'Exercice 1.2';
?>

<?php

require 'config.php';

echo ETABLISSEMENT . "<br>";
echo NOTE_MIN . "<br>";
echo NOTE_MAX . "<br>";
echo SEUIL . "<br>";

var_dump(defined('SEUIL'));
echo "<br>";

var_dump(defined('INCONNUE'));

// Si on affiche une constante non définie,
// PHP génère une erreur ou un avertissement selon le contexte.
// En PHP 8, une constante non définie utilisée sans guillemets
// provoque généralement une Error.

 /*
 Différence entre const et define() :
 const définit une constante directement dans le code.
 define() définit une constante à l'exécution.
 */

?>


<?php

$prix_ht = 60;
$tva = 20;

$prix_ttc = $prix_ht + ($prix_ht * $tva / 100);

echo "Le prix TTC du produit est de " . $prix_ttc . " €.";

?>
<?php
echo 'Exercice 1.3';
?>

<?php

$prix_ht = 60;
$tva = 20;

$prix_ttc = $prix_ht + ($prix_ht * $tva / 100);

echo "Le prix TTC du produit est de " . $prix_ttc . " €.";

?>

<?php
echo 'Exercice 1.4';
?>

<?php

// 1. Conversion de 42 en string
$test = 42;
$test = (string) $test;
var_dump($test);

// 2. Conversion en booléen
var_dump((bool) 0);       // false
var_dump((bool) 0.0);     // false
var_dump((bool) "0");     // false
var_dump((bool) "");      // false
var_dump((bool) "abc");   // true
var_dump((bool) []);      // false
var_dump((bool) null);    // false

// 3. Conversions numériques
var_dump((int) 3.9);      // int(3)
var_dump((int) "12abc");  // int(12) en PHP 8
var_dump((float) "1.5e3"); // float(1500)
var_dump((int) true);     // int(1)

// 4. Le nombre 255 dans quatre bases
$decimal = 255;
$hexadecimal = 0xFF;
$octal = 0377;
$binaire = 0b11111111;

echo "Décimale : " . $decimal . "<br>";
echo "Hexadécimale : " . $hexadecimal . "<br>";
echo "Octale : " . $octal . "<br>";
echo "Binaire : " . $binaire . "<br>";

?>

<?php
echo 'Exercice 1.5';
?>

<?php

$traitees = "égales à";
$ici = 2;

// 1. Guillemets et apostrophes
echo "1. Ahmed a dit : \"J'ai réussi\"<br>";

// 2. Chemin Windows
echo "2. Voulez-vous supprimer C:\\*.*?<br>";

// 3. Afficher \n tel quel
echo '3. Ceci n\'affichera pas \n de nouvelle ligne<br>';

// 4. Variables non interprétées
echo '4. Les variables ne seront pas $traitees $ici<br>';

// 5. Variables interprétées
echo "5. Les variables seront $traitees $ici<br>";

// Retirer les étoiles avec trim()
$texte = "*Bonjour les développeurs*";
echo trim($texte, "*") . "<br>";

// Afficher chaque lettre sur une ligne différente
$mot = "PHP";

for ($i = 0; $i < strlen($mot); $i++) {
    echo $mot[$i] . "<br>";
}

?>
