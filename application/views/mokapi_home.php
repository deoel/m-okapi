<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html>
    <head>
        <title>M-OKAPI</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>Bienvenue sur M-OKAPI</h1>
        <p>
            <em>Votre gestionnaire de budget optimisé</em>
        </p>
        <?php echo $page ?>
        <p>
            <a href="<?php echo site_url('utilisateur/form_inscription') ?>">Créer un compte</a>
        </p>
    </body>
</html>
