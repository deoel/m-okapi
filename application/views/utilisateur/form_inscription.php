<h1 id="head">Créer votre compte M-OKAPI</h1>
<form method="post" action="<?php echo site_url('utilisateur/nouvel_utilisateur') ?>">
    Nom complet:
    <input name="nomcomplet" value="<?= set_value('nomcomplet') ?>" />
    <?= form_error('nomcomplet','<em>','</em>') ?>
    <br/>
    Email:
    <input name="email" value="<?= set_value('email') ?>" />
    <?= form_error('email', '<em>', '</em>'); ?>
    <br/>
    Login:
    <input name="login" value="<?= set_value('login') ?>" />
    <?= form_error('login', '<em>', '</em>'); ?>
    <br/>
    Mot de passe:
    <input type="password" name="mdp" />
    <?= form_error('mdp', '<em>', '</em>'); ?>
    <br/>
    Confirmer:
    <input type="password" name="mdpconf" />
    <?= form_error('mdpconf', '<em>', '</em>'); ?>
    <br/>
    <input type="submit" value="Créer" />
    <a href="<?php echo site_url() ?>">J'ai déjà un compte</a>
</form>