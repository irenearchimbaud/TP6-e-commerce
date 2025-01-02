# TP6-e-commerce

# Configuration du projet:

```
docker-compose up --build
docker-compose up -d
```

Vérifier que les conteneurs sont lancés dans docker-desktop

Lancer le front via: http://localhost:8080/

Lancer phpMyAdmin via: http://localhost:8081/index.php?route=/sql&pos=0&db=TP6-e-commerce&table=users

executer: 

```
docker exec -i mysql-db mysql -u root -proot TP6-e-commerce < ./db/modifications.sql
```

dans l'invite de commande en se plançant au préalable dans le dossier du projet

## Organisation des fichiers

Voici où placer les différents types de fichiers dans le projet :

- **Fichiers CSS** : Placez-les dans `src/assets/css/`.  
  Exemple : `src/assets/css/style.css`

- **Fichiers JavaScript** : Placez-les dans `src/assets/js/`.  
  Exemple : `src/assets/js/script.js`

- **Images** : Placez-les dans `src/assets/images/`.  
  Exemple : `src/assets/images/logo.png`

- **Modèles (Models)** : Placez les fichiers PHP représentant les entités (ex. : produits, utilisateurs) dans `src/models/`.  
  Exemple : `src/models/Product.php`

- **Vues (Views)** : Organisez les fichiers HTML/PHP des différentes pages dans `src/views/`.  
  Exemple : 
  - Page d'accueil : `src/views/home/index.php`
  - Page de connexion : `src/views/login/index.php`
  - Page des produits : `src/views/products/list.php`

- **Fichier principal** : Le point d'entrée de l'application est `src/index.php`.  
  Ce fichier redirige vers les vues appropriées et gère la logique de routage.
