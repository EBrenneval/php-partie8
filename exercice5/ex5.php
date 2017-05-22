<?php
// isset vérifie que les login et password existent. 
if(isset($_POST['login']) && isset($_POST['password'])){
setcookie('login', $_POST['login'], time() + 365 * 24 * 3600, '/', null, false, true); //crée le cookie pour le login
setcookie('password', $_POST['password'], time() + 365 * 24 * 3600,'/', null, false, true);} // créer le cookie pr le password
?>


<?php
include '../index.php';
?>
<p>Enoncé : Enoncé de l'exercice :  Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.</p>
<div>
    <form method="POST" action="ex5.php" enctype="multipart/form-data">
        <label>Votre login <input type="text" name="login"></label>
        <label>Votre mot de passe<input type="password" name="password" ></label>
        <input type="submit" value="Valider"/> 
    </form>
</div>


</body>
</html>

