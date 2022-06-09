<html>
<head>
    <title>LOUDAS | Modifier</title>
    <link rel="icon" href="/imges/loudas.png" type="image/x-icon">
</head>
<body>
<?php

$conn = mysqli_connect("localhost", "root", "", "errazi");
          
    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. " 
        . mysqli_connect_error());
    }

$ND = $_GET["NDossier"] ;

//requête SQL:
$sql = "SELECT NDossier,nom,prenom,date_prise,date_prochaine FROM malade WHERE NDossier = '$ND'" ;

//exécution de la requête:
$requete = mysqli_query($conn, $sql ) or die($sql . mysqli_error($conn));

//affichage des données:
 if ($result = mysqli_fetch_object( $requete ) or die($sql . mysqli_error($conn))){
?>
<form  action="insert.php" method="POST">
<input type="hidden" name="ND" value="<?php echo($ND) ;?>">
<table border="0" align="center" cellspacing="2" cellpadding="2">
<tr align="left">
<td>NDossier :</td>
<td><input type="text" name="ND" value="<?php echo($result->NDossier) ;?>"></td>
</tr>
<tr align="left">
<td>nom</td>
<td><input type="text" name="N" value="<?php echo($result->nom) ;?>"></td>
</tr>
<tr align="left">
<td>prenom</td>
<td><input type="text" name="P" value="<?php echo($result->prenom) ;?>"></td>
</tr>
<tr align="left">
<td>Date de prise d'injection :</td>
<td><input type="date" name="DPRI" value="<?php echo($result->date_prise) ;?>"></td>
</tr>
<tr align="left">
<td>Date de la prochaine injection :</td>
<td><input type="date" name="DPRO" value="<?php echo($result->date_prochaine) ;?>"></td>
</tr>
<tr align="left">
<td colspan="2"><input type="submit" value="modifier"></td>
</tr>
</table>
</form>
<?php
}
?>
</body>
</html>
