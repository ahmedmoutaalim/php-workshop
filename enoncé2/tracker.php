


<!-- méthode 1 formulaire  -->
<html>
<head>
<title>doc </title>
</head>
<body>
<form name="imcform" method="get" action="tracker.php">
Entrez votre prénom: <input type="text" name="name" /></br>
Entrez votre taille (sous la forme 1.70) <input type="text" name="heightCm" /> </br>
Entrez votre poids (en KG) <input type="text" name="weightKg" /> </br>
<input type="submit" name="valider" value="OK" /> </form>
<?php
if (isset($_GET['valider'])) {
$name=$_GET['name'];
$heightCm=$_GET['heightCm'];
$weightKg=$_GET['weightKg'];
$IMC=$weightKg/($heightCm*$heightCm);
echo'Bonjour '.$name.' <br/>
votre IMC (indice de masse corporelle) est exactement de '.$IMC.' <br/>
vous ';
if ($IMC<16.5) {
echo'êtes en dénutrition';
}
elseif ($IMC<18.5) {
echo'êtes en état de maigreur';
}
elseif ($IMC<25) {
echo'avez une corpulence normale';
}
elseif ($IMC<30) {
echo'êtes en surpoids';
}
elseif ($IMC<35) {
echo'êtes en état d\'obèsité modérée';
}
elseif ($IMC<40) {
echo'êtes en état d\'obèsité sévère';
}
else {
echo'êtes en état d\'obèsité morbide, consultez un médecin';
}
}
?>

<hr>
</body>
</html>


<!-- méthode 2 : super global get  -->

 
<?php 
$name=$_GET["name"];
$weightKg=$_GET["weightKg"];
$heightCm=$_GET["heightCm"];
$mult=$heightCm*$heightCm;
$IMC=$weightKg/$mult;

?>



<h1 > name  :<?php echo" $name";  ?></h1>
<h1>  resultat IMC :<?php echo " $IMC"; ?> </h1>

<hr>



<!-- méthode 3 :function  -->


<?php 

function calcImc($name,$weightKg,$heightCm){
    $IMC=$weightKg/($heightCm*$heightCm);
    $result="bonjour $name ton imc = $IMC ";

    return $result;
}

$result = calcImc("omar",70,173);
echo $result ; 

?>


