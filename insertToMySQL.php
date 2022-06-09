<!DOCTYPE html>
<html>
<head>
    <title>LOUDAS | insertion du formulaire</title>
    <link rel="icon" href="/imges/loudas.png" type="image/x-icon">
</head>
<body>
    <center>
        <?php
  
        //connection au serveur
        $conn = mysqli_connect("localhost", "root", "", "errazi");
          
        //vérifier la connection
        if($conn === false){
            die("ERROR: Could not connect. " 
            . mysqli_connect_error());
        }
          
        //prendre toutes les valeurs des données(input)
        $NDossier =  $_REQUEST['user_code'];
        $nom = $_REQUEST['user_name'];
        $prenom =  $_REQUEST['user_prenom'];
        $Date_de_naissance =  $_REQUEST['user_date'];
        $age =  $_REQUEST['age'];
        $sexe =  $_REQUEST['sexe'];
        $wilaya =  $_REQUEST['browser'];
        $adress =  $_REQUEST['user_adress'];
        $num_tel =  $_REQUEST['user_numero'];
        $type_inj =  $_REQUEST['inj'];
        $dose =  $_REQUEST['dose'];
        $date_prise =  $_REQUEST['date_prise'];
        $date_prochaine =  $_REQUEST['date_prochaine'];

        //création de la requête mysql:
        $mysql = "INSERT INTO malade  VALUES ('$NDossier','$nom','$prenom','$Date_de_naissance','$age','$sexe','$wilaya','$adress','$num_tel','$type_inj','$dose','$date_prise','$date_prochaine')";
        
       //affichage des résultats
        if(mysqli_query($conn,$mysql)){
            echo '<script> alert("insertion est réussie!"); </script>';
        } else{
            echo "ERReuR: $mysql. " 
            . mysqli_error($conn);
        }

        mysqli_close($conn);
        ?>

    </center>
</body>
  
</html>