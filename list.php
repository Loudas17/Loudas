<?php
if(isset($_POST['search']))
{
    $Search = $_POST['Search'];
    // rechercher dans toutes les colonnes du tableau
    // en utilisant la fonction concat mysql
    $query = "SELECT * FROM `malade` WHERE CONCAT(`NDossier`, `nom`, `prenom`, `Date_de_naissance`,`age`, `sexe`, `wilaya`, `adress`,`num_tel`, `type_inj`, `dose`, `date_prise`, `date_prochaine`) LIKE '%".$Search."%'";
    $search_result = filterTableM($query); 
}
 else {
    $query = "SELECT * FROM `malade` ORDER BY `NDossier`";
    $search_result = filterTableM($query);
}
// fonction pour se connecter et exécuter la requête
function filterTableM($query){
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
<div id="list">
    <form action="list.php" method="post" id="formTable">
    <table id="Atable">
        <caption> 
			<p><input type="text" name="Search" placeholder="Recherche" id="myInput">
            <input type="submit" name="search" value="Recherche"></p>
            <br><br>
        </caption>
        <tr>
            <th style="width:4%;" id="nd">N° dossier</th>
            <th id="nom">Nom</th>
            <th id="preno">Prénom</th>
            <th id="dn">Date de Naissance</th>
            <th id="age">Age</th>
            <th id="sexe">Sexe</th>
            <th id="wilaya">Wilaya</th>
            <th id="adress">Adress</th>
            <th id="nt">Numéro de tél </th>
            <th id="ti">Type d'injection</th>
            <th id="dose">Dose</th>
            <th id="di">Date de prise d'injection</th>
            <th id="dp">Date de la prochaine injection</th>
        </tr>
<?php while($row = mysqli_fetch_array($search_result)):?>
        <tr>
            <td><?php echo $row['NDossier'];?></td>
            <td><?php echo $row['nom'];?></td>
            <td><?php echo $row['prenom'];?></td>
            <td><?php echo $row['Date_de_naissance'];?></td>
            <td><?php echo $row['age'];?></td>
            <td><?php echo $row['sexe'];?></td>
            <td><?php echo $row['wilaya'];?></td>
            <td><?php echo $row['adress'];?></td>
            <td><?php echo $row['num_tel'];?></td>
            <td><?php echo $row['type_inj'];?></td>
            <td><?php echo $row['dose'];?></td>
            <td><?php echo $row['date_prise'];?></td>
            <td><?php echo $row['date_prochaine'];?></td>
        </tr>
<?php endwhile;?> 
    </table><br>
    <a id="up" href="#myInput"><img src="/imges/up.png" width="30" height="30"></a>
    </form>
</div>
</body>
