Projet ToDoListLiamDesrayaud

Étapes de création du projet
Composer Create-Project

Créez le projet en utilisant la commande composer create-project laravel/laravel ToDoListLiamDesrayaud.
Configuration de la base de données

Modifiez le fichier .env pour configurer la connexion à la base de données.
Migration de la table 'tache'

Utilisez la commande php artisan make:migration create_tache_table.
Création du modèle 'Tache'

Utilisez la commande php artisan make:model Tache -m.
Remplissage des $fillable dans le modèle 'Tache'

Création du contrôleur 'TacheController'

Utilisez la commande php artisan make:controller TacheController -r.
Création de la requête 'TacheFormRequests' pour les fonctions d'update et de store

Utilisez la commande php artisan make:request TacheFormRequests.
Création des vues dans le dossier 'tache'

Configuration des routes avec les fonctions du contrôleur 'TacheController'

Migration de la table 'categorie'

Utilisez la commande php artisan make:migration create_categorie_table.
Création du modèle 'Categorie'

Utilisez la commande php artisan make:model Categorie.
Migration de la clé étrangère dans la table 'tache'

Utilisez la commande php artisan make:migration add_categorie_id_to_tache_table --table=tache.
Affiliations dans les modèles 'Categorie' et 'Tache'

Création du contrôleur 'CategorieController'

Utilisez la commande php artisan make:controller CategorieController -r.
Remplissage des fonctions dans le contrôleur 'CategorieController'

Création de la requête 'CategorieFormRequests' pour les fonctions d'update et de store

Utilisez la commande php artisan make:request CategorieFormRequests.
Création des vues dans le dossier 'categorie'

Configuration des routes avec les fonctions du contrôleur 'CategorieController'

Mise en place de la dernière route pour afficher les tâches par catégorie
