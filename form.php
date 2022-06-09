<!DOCTYPE html>
<body><!-- formulaire pour ajouter un nouveau malade -->
<div id="form">
    <div id="main">
        <form action="insertToMySQL.php" method="post">
            <div>
                <p><label for="NDossier">N° Dossier:</label>
                    <input type="text" id="code" name="user_code">
                </p>
            </div>
            <div>
                <p><label for="nom">Nom : </label>
                    <input type="text" id="name" name="user_name">
                </p>
            </div>
            <div>
                <p><label for="prenom">Prénom :</label>
                    <input type="text" id="prenom" name="user_prenom">
                </p>
            </div>
            <div>
                <p><label for="datenaissence">Date de naissence :</label> 
                    <input type="text" id="DDN" name="user_date">
                </p>
            </div>
            <div>
                <p><label for="age">Age :</label>
                    <input type="text" id="age" name="age">
                </p>
            </div>
            <div>
                <p><label for="sexe">sexe :</label>
                <select id="sexe" name="sexe">
                    <option value=""></option>
                    <option value="Femme">Femme</option>
                    <option value="Homme">Homme</option>
                </select>
                    </p>
            </div>
            <div>
                <p><label for="wilaya">Wilaya :</label>
                <input list="browsers" id="Wilaya" name="browser">
                <datalist id="browsers">
                    <option value="Annaba">
                    <option value="Guelma">
                    <option value="El Tarf">
                    <option value="Souk Ahras">
                    <option value="Tébessa">
                    <option value="El Oued">
                </datalist></p>
            </div>
            <div>
                <p><label for="adresse">Adresse :</label>
                    <input type="text" id="adress" name="user_adress">
                </p>
            </div>                   
            <div>
                <p><label for="Ntel">Numéro de téléphone :</label>
                    <input type="tel" id="num" name="user_numero">
                </p>
            </div>
            <div>
                <p><label for="typeinj">Type d'injection :</label>
                <select id="inj" name="inj">
                    <option value="chose"></option>
                    <option value="Modécate">Modécate</option>
                    <option value="Haldol Décanoas">Haldol Décanoas</option>
                    <option value="Xeplion">xeplion</option>
                </select></p>
            </div>
            <div>
                <p><label for="dose">Sélectionez une dose :</label></p>
                <div id="group"></div>
                <p id="output" name="dose" style="font-weight: bold;"></p>
            </div>
            <div>
                <p><label for="datePrise">Date de prise d'injection :</label>
                    <input type="date" id="dpi" name="date_prise">
                </p>
            </div>
            <div>
                <p><label for="dateProchaine">Date de la prochaine injection :</label>
                    <input type="date" id="dpi" name="date_prochaine">
                </p>
            </div>
            <p style="text-align:right ;"><input type="submit" value="Enregistrer"></p>
        </form>
    </div>
</div>
</body>