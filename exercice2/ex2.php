
<?php
// tjrs demarrer la session avant le html
    session_start();  
    
 $_SESSION['prenom'] = 'Rose';
$_SESSION['nom'] = 'Dupont';
$_SESSION['age'] = 24;
?>
<?php
    
include '../index.php';
?>
<p>Enoncé : Sur la page index, faire un liens vers une autre page. Passer d'une page à l'autre le contenu des variables nom, prenom et age grâce aux sessions. Ces variables auront été définies directement dans le code.
    Il faudra afficher le contenu de ces variables sur la deuxième page</p>

<div>
   <a href="http://partie8/exercice2/user.php">Lien vers une 2ème page</a> 
</div>

    </body>
</html>
<?php
//fermeture de la session sans la destruction des données. 
session_write_close();
?>