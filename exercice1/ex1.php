<?php
include '../index.php';
?>

<p>Enoncé de l'exercice : Faire une page HTML permettant de donner à l'utilisateur :

    son User Agent
    son adresse ip
    le nom du serveur
</p>
<div>
<?php
// pour demander l'adress IP
echo($_SERVER['REMOTE_ADDR']); 
//pour demander le user agent
echo($_SERVER['HTTP_USER_AGENT']);
// pour demander le serveur
echo($_SERVER['SERVER_NAME']);
?>
</div>
    </body>
</html>
