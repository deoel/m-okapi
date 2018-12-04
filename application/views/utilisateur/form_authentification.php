<h1>Authentification</h1>
<form method="post" action="<?php echo site_url('utilisateur/connexion') ?>">
    Login:
    <input name="login" /><br/>
    Mot de passe:
    <input type="password" name="mdp" /><br/>
    <em style="color: red">
    <?php
        echo $this->session->error_login;
    ?>
    <em>
    <br/>
    <input type="submit" value="Se connecter" />
</form>