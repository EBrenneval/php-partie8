

        <?php
        session_start();
        ?>
<?php if(isset($_SESSION['prenom']) && isset($_SESSION['nom']) && isset($_SESSION['age'])){
                //Et je fait un classique echo pour afficher le résultat
                echo 'Bonjour ' . $_SESSION['prenom'] . ' ' . $_SESSION['nom'] . ' tu as ' . $_SESSION['age'] . ' ans!';
            }
            ?>
<p> Bonjour, <?php echo $_SESSION['prenom'].' '.$_SESSION['nom'];?></p>
<p>Quel age as-tu? a oui ... <?php echo $_SESSION['age'].'ans';?></p>

    </body>
</html>
<?php

//détruit les variables
        session_unset();
        // destruction de  la session
        session_destroy();
        ?>