<html>
<head>
    <title>LOUDAS | Modificatio réussite</title>
    <link rel="icon" href="/imges/loudas.png" type="image/x-icon">
</head>
</html>
<?php
//connection au serveur
$conn = mysqli_connect("localhost", "root", "", "errazi");
          
    //vérifier la connection
    if($conn === false){
        die("ERROR: Could not connect. " 
        . mysqli_connect_error());
    }
//récupération des valeurs des champs:
$NDossier =  $_REQUEST['ND'];
$nom = $_REQUEST['N'];
$prenom =  $_REQUEST['P'];
$date_prise =  $_REQUEST['DPRI'];
$date_prochaine =  $_REQUEST['DPRO'];

//récupération de l'identifiant de la personne:
$ND = $_POST["ND"] ;

//création de la requête SQL:
$sql = "UPDATE malade
SET NDossier = '$NDossier',
nom = '$nom',
prenom = '$prenom',
date_prise = '$date_prise',
date_prochaine = '$date_prochaine'
WHERE  NDossier= '$ND' " ;

//exécution de la requête SQL:
$requete = mysqli_query($conn, $sql) or die( mysqli_error($conn) ) ;


//affichage des résultats, pour savoir si la modification a marchée:
if($requete)
{echo '<script> alert("La modification est enregistrer"); </script>';
}
else
{
echo("La modification à échouée") ;
}
?>