<h1>Créer votre compte M-OKAPI</h1>
<form method="post" action="<?php echo site_url('utilisateur/nouvel_utilisateur') ?>">
    Nom complet:
    <input name="nomcomplet" /><br/>
    Email:
    <input name="email" /><br/>
    Login:
    <input name="login" /><br/>
    Mot de passe:
    <input type="password" name="mdp" /><br/>
    Confirmer:
    <input type="password" name="mdpconf" /><br/>
    <input type="submit" value="Créer" />
    <a href="<?php echo site_url('utilisateur/form_authentification') ?>">J'ai déjà un compte</a>
</form>