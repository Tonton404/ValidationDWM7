Problèmes rencontrés:

  Premier jour:
  - Soucis d’autorisation d'accès aux logs Laravel (résolu avec chmod 777);
  - Mémoire vive allouée insufisante;
  - Synchronisation fichier partagé Vagrant (le fichier hôte reste vide, la création d'un test.html dans ce dernier supprime l'ensemble du projet sur la VM). RESOLU;
  - Difficultés à lier la base de données MySQL au projet;
  - Impossible de réaliser la migration de la base de données (problème d'autorisation);

  Deuxième jour:
  - Le master.blade est soi-disant introuvable, alors qu'il est bien là. Certainement un soucis de chemin;
  - Après reflexion: refonte intégrale de la structure des templates blade. La mienne est trop dans le futur, je repars sur une base plus simple (inspirée par le TP fait en cours);
    --> Remarque personnelle suite à ce dernier point: putain ça marche enfin.
  - Pas moyen de virer le "Laravel" du menu principal. L'élement id=navbar-brand et le app.name ont pourtant été modifiés en dur dans le template de base, ainsi que dans /config/app.php ...


Faits notables:
Je tenté de créer et customiser une commande de PHP artisan. J'ai récupéré de quoi faire un '$ php artisan make: view' pour une création rapide en mode "scaffold" de templates blade (si je ne dis pas n'importe quoi)
Le succès n'est pas au rendez-vous, la commande n'est pas reconnue, je lance en manuel.


Fonctionnel:

- La page d'accueil.
