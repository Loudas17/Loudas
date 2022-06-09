<!DOCTYPE html>
<body>
<br>
<div id="loginMedecin">
    <div>
        <tbody>
            <tr>
                <h1>Votre compte</h1>
            </tr>
            <tr>
                <label for="username"><h2>Identifiant :</h2></label>
                <input type="text" name="username" id="username">

                <label for="password"><h2>Mot de Passe :</h2></label>
                <input type="password" name="code" id="password">
                <p id = "DOWN"></p>
                <span id="INVALIDATE"> Identifiant ou Mot de passe incorecte. </span>
            </tr>
            <table>
                <tr>
                    <th><input type="submit" onclick="validate()" value="Connexion"></th>
                    <th><input type="submit" onclick="rtn()" value="Annuler"></th>
                </tr>
            </table>
        </tbody>
    </div>
</div>
</body>