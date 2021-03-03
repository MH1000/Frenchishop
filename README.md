# FrenchiShop

Réalisation d'un site E-commerce avec la version du Framework Symfony 5.2 : Système de paiements avec l'API Stripe, Backoffice, gestion des mails et des commandes.

## Les pré-requis

- Avoir un Serveur Web en local (MAMP, WAMP, XAMP)
- Un serveur MySQL ainsi qu'un serveur PHP
- Requis la version de PHP 7.4
- Le gestionnaire de dépendances Composer

## Installation

1. Cloner le projet

```
git clone https://github.com/MH1000/Frenchishop.git
```

2. Installer les dépendances requises pour l'application

```
composer install
```

3. Créer un fichier avec l'extension .env.local et modifier ce fichier afin de modifier les informations de votre base de données.

```
DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/frenshishop?serverVersion=5.7"
```

4. Si elle n'existe pas, créer la base de données

```
php bin/console doctrine:database:create
```

5. Migratons de la base de données

```
php bin/console d:s:u --force
```

6. Ouverture de l'application

```
symfony serve -d
```

# Instructions supplémentaires réservés à l'Administrateur

1. Obtenir le Rôle d'Administrateur

Se diriger sur votre base de données, accéder à la table `user` puis modifier un compte et enfin renseigner dans le champ `roles` la chaine suivante `"ROLE_ADMIN"` entre crochets.

2. Accéder au BackOffice

   - Se rendre sur l'onglet : `localhost:8000/admin`.
   - Création des catégories dans la section `Categories`
   - Création des articles dans la rubrique `Products`
