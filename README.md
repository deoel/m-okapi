# m-okapi
Gestionnaire de budget personnel optimisé créé par les étudiants de G2 Génie Logiciel de l'ESIS dans le cours de développement web



FONCTIONNALITES A AJOUTEES

I.	CREATION DE COMPTE
Champs du formulaire d’inscription:
1.	Nom complet
2.	Email
3.	Pseudo 
4.	Mot de passe
5.	Mot de passe de confirmation

Après avoir validé le formulaire de création de compte :

- On doit vérifier que le pseudo et l’adresse email fournit par l’utilisateur n’existent pas dans la base de données pour éviter la redondance des informations (login) des utilisateurs, afin de palier au problème où on retrouve deux ou plusieurs utilisateurs avec un même login (même pseudo et même mot de passe) qui peut poser problème lors de l’identification (connexion).

- le système envoie un mail de confirmation du compte à l’utilisateur à l’adresse email fournit dans le champ email (du formulaire d’inscription). Ce mail contiendra un lien sur lequel l’utilisateur doit cliquer pour valider son compte ou confirmer son compte.
Si le compte du client n’est pas confirmer il peut accéder au système, à l’entête de la page on place une alerte en rouge indiquant à l’utilisateur que son compte n’est pas encore confirmer, qu’il  doit le confirmer avant d’effectuer certaines opérations ; si il essaie d’accéder à certaines fonctionnalités on l’affiche un message lui rappelant de confirmer son compte avant de continuer l’opération.

II.	CONNEXION
Champs du formulaire de connexion :
1.	Pseudo
2.	Mot de passe

On vérifie les coordonnées fournies par l’utilisateur dans la base de données. Au cas où c’est correct il accède au système dans le cas contraire on l’affiche un message d’erreur indiquant que les informations fournies ne correspondent à aucun utilisateur.

III.	DECONNEXION
La déconnexion du compte concise juste à détruire la session encours ;

IV.	MOT DE PASSE OUBLIE
Cette fonctionnalité, consiste juste à permettre aux utilisateurs qui ont oubliés leur mot de passe à le réinitialiser sans perdre les données de l’utilisateur. Après que l’utilisateur clique sur le lien mot de passe oublié, on l’affiche un formulaire avec un seul champ lui demandant de fournir son adresse email ;

Apres on vérifie si l’email appartient à un utilisateur du système, si l’email existe dans la base de données, le système envoie un lien de réinitialisation du mot de passe à cette adresse email, et on redirige automatiquement l’utilisateur à la page de connexion, tout en l’affichant un message du genre
« Un mail de réinitialisation de votre compte, vous a été envoyé ; ouvrez votre adresse email et cliquer sur lien » 

Si l’utilisateur clique sur le lien du mail, on l’affiche un formulaire avec 2 champs :
1.	Nouveau mot de passe
2.	Confirmation nouveau mot de passe

Si tout est bon on enregistre le nouveau mot de passe de l’utilisateur ; dans le cas contraire une chaine d’erreurs se poursuit.
