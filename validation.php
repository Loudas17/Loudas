<?php
if(isset($_POST['search']))
{
    $Search = $_POST['Search'];
    // rechercher dans toutes les colonnes du tableau
    // en utilisant la fonction concat mysql
    $query = "SELECT NDossier,nom,prenom,date_prise,date_prochaine FROM malade WHERE CONCAT(`NDossier`, `nom`, `prenom`, `date_prise`, `date_prochaine`) LIKE '%".$Search."%'";
    $search_result = filterTableI($query); 
}
 else {
    $query = "SELECT NDossier,nom,prenom,date_prise,date_prochaine FROM malade ORDER BY NDossier";
    $search_result = filterTableI($query);
}
// fonction pour se connecter et exécuter la requête
function filterTableI($query){
    $connect = mysqli_connect("localhost", "root", "", "errazi");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>LOUDAS | Recherche</title>
    <link rel="icon" href="/imges/loudas.png" type="image/x-icon">
    <style>
        #Atable,tr,th,td{border: 1px solid #002e5f; text-align: center; padding: 15px; }
        #Atable{width: 100%;border-collapse: collapse;}
        #Atable th{height: 40px; background-color: #002e5f; color: white; border:1px solid white;}
        #Atable td{padding: 10px;} #Atable tr:hover {background-color: orange;}
    </style>
</head>
<body>
<div id="validINJ">
<form action="validation.php" method="post" id="formTable">
    <table id="Atable">
        <caption> 
			<p><input type="text" name="Search" placeholder="Recherche" id="val">
            <input type="submit" name="search" value="Recherche"></p>
            <br><br>
        </caption>
        <tr>
            <th style="width: 16%;">N° Dossier</th>
            <th style="width: 16%;">Nom</th>
            <th style="width: 16%;">Prenom</th>
            <th style="width: 16%;">Date de prise d'injection</th>
            <th style="width: 16%;">Date de la prochaine injection</th>
            <th style="width: 16%;">Modifier</th>
        </tr>
        <?php while($row = mysqli_fetch_array($search_result)):?>
        <tr>
            <td><?php echo $row['NDossier'];?></td>
            <td><?php echo $row['nom'];?></td>
            <td><?php echo $row['prenom'];?></td>
            <td><?php echo $row['date_prise'];?></td>
            <td><?php echo $row['date_prochaine'];?></td>
            <td><?php echo "<a href=\"modifier.php?NDossier=".$row["NDossier"]."\">modifier</a>";?></td>
        </tr>
<?php endwhile;?> 
    </table><br>
    <a id="up" href="#val"><img src="/imges/up.png" width="30" height="30"></a>
</form>
</div>   
</body>