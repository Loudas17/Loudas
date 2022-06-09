<!DOCTYPE html>
<body>
<br>
<div id="loginInfirmier">
    <div>
    <tbody>
            <tr>
                <h1>Votre compte</h1>
            </tr>
            <tr>
                <label for="Identifiant"><h2>Identifiant :</h2></label>
                <input type="text" name="Identifiant" id="Identifiant">

                <label for="motdepasse"><h2>Mot de Passe :</h2></label>
                <input type="password" name="motdepasse" id="motdepasse">
                <p id = "down"></p>
               <span id="invalide">Identifiant ou Mot de passe incorecte.</span>
            </tr>
            <table>
                <tr>
                    <th><input type="submit" onclick="conx()" value="Connexion"></th>
                    <th><input type="submit" onclick="rtn()" value="Annuler"></th>
                </tr>
            </table>
        </tbody>
    </div>
</div>
<br>
</body>