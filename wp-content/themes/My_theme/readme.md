# creation d'un theme wordpress

Les theme de wordpress sont stockés dans le repertoire `wp-content/themes/`.

Avant de crée les fichiers de votre thème, vous devez créer un repertoire pour votre thème.
ex: Mon repertoire s'appel `my_theme`.

##2. Les fichiers de base

Un theme doit avoir au moins deux fichiers, créés directement à la racine de votre répertoire thème, pour etre fonctionnel:
-index.php _fichier principal du thème._
-style.css _feuille de style principale du thème._

### 2.2 Les fichier par défaut de wordpress

WordPress utilise certain nom fichier pour fonctionner

- single.php _Affiche le contenu d'un article._
- archive.php _Affiche la liste des categories du site._
- searchform.php _Affiche le formulaire de recherche._
- search.php Affiche le resultat de la recherche._
- 404.php _Page de fichier introuvable._
- comments.php _Affiche la liste des commentaires._
- footer.php _Contenu du pied HTML.
- header.php _Contenu de l'entete HTML._
- sidebar.php _Contenu de la sidebar HTML._
- page.php _Affiche (par défaut) le contenu d'une page._

### 2.3. Ajouter des fonctionnalités

Les fonctions du theme et instructions pour WordPress sont centralisées dans le fichier:
- functions.php