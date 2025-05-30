# test-alternance

Sur cette application web on y trouve une liste déroulante avec tous les articles situés dans la base de données. À chaque fois qu'on appuie sur le bouton 'valider' le produit sélectionné est comptabilisé et ajouté dans le tableau situé à droite de la page. Dans ce tableau il y a : le nom de l'article, le prix de vente et la quantité de fois que le produit est sélectionné. En dessous de cet espace, il y a le total d'achat, le total de vente et le total de bénéfice hypothétique.

## Ressources utilisées

J'ai travaillé sur le système d'exploitation ubuntu 20.04.6
J'ai hébergé le serveur avec Apache.
J'ai utilisé la version 8.3.6 de php.
J'ai utilisé une base de données MySQL.

## Base de données

Voici les commandes pour générer la base de données que j'ai utilisées

```mysql
CREATE DATABASE irtnetworkshop;
USE irtnetworkshop;

CREATE TABLE article (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom_article VARCHAR(255),
  prix_achat DECIMAL(10,2),
  prix_vente DECIMAL(10,2)
);
```

Voici les commandes pour créer un utilisateur que j'ai utilisées

```mysql
CREATE USER 'irtnetwork_user'@'localhost' IDENTIFIED BY 'M0T2passe@@!';
GRANT SELECT ON irtnetworkshop.* TO 'irtnetwork_user'@'localhost';
FLUSH PRIVILEGES;
```

## Configuration

Dans le fichier [db.php](https://github.com/esoriabonet/test-alternance/blob/main/db.php) s'y trouve les paramètres pour la base de données. Je l'inclus par la suite pour des raisons de sécurité et aussi pour éviter de l'inclure avec un .gitignore (dans mon cas je l'ai push pour montrer) Cette pratique permet aussi de mieux visualiser le code.

