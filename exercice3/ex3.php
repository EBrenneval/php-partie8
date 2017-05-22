<?php
// isset vérifie que les login et password existent. 
if(isset($_POST['login']) && isset($_POST['password'])){
setcookie('login', $_POST['login'], time() + 365 * 24 * 3600, '/', null, false, true); //crée le cookie pour le login
setcookie('password', $_POST['password'], time() + 365 * 24 * 3600,'/', null, false, true);} // créer le cookie pr le password
?>


<?php
include '../index.php';
?>
<p>Enoncé :Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur.
    A la validation du formulaire, stocker les informations dans un cookie.  </p>
<div>
    <form method="POST" action="ex3.php" enctype="multipart/form-data">
        <label>Votre login <input type="text" name="login"></label>
        <label>Votre mot de passe<input type="password" name="password" ></label>
        <input type="submit" value="Valider" /> 
    </form>
</div>


</body>
</html>
