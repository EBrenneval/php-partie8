<?php
include '../index.php';
?>
<p> Enoncé de l'exercice : Faire une page qui va récupérer les informations
    du cookie créé à l'exercice 3 et qui les affiches.</p>

<p> Bonjour <?php 
if(isset($_COOKIE['login'])&& isset($_COOKIE['password'])){
    echo 'votre login: ' . $_COOKIE['login']. ' et votre mot de passe: ' . $_COOKIE['password'];
}
?>
    </body>
</html>
