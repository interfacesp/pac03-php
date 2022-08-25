# Création de base de données avec MySQL - Exercices

Objectifs:
- Utilisation d'un SGBD - système de gestion de base de données (exemple: MySQL)
- Comprendre le contexte d'utilisation d'une base de données 
- Utilisation de requêtes de lecture d'une base de données, avec PHP et le langage SQL 

### Metro

Le réseau de transport "mini-stib" aimerait créer une base de données pour monitorer leur réseau. 

1. Créez une base de données dans MySQL, nommée "mini-stib".  
2. Créez 2 tables avec les champs suivants: 
   - Lines
     - id (nombre), 
     - line-name(texte),
     - distance(nombre)
   - Stops
     - id (nombre)
     - stop-name (texte)
     - id-line(nombre): référence de la ligne de la table Lines

3. Ajouter quelques données dans votre DB
4. Ecrivez les requêtes SQL pour répondre  aux questions suivants
   - Quelles sont toutes les lignes de votre réseau ? 
   - Combien de lignes en tout il y a ? 
   - Créer un script PHP permettant d'afficher tous les arrêts de chaque ligne  


### Fashion

Le magasin de mode Dolqué Gabanna aimerait créer une base de données pour stocker des informations des nouvelles collections.


1. Créez une BDD (base de données)
2. Créez 2 tables 
   -  Collection 
      -  id-collection (nombre)
      -  collection-name(texte)
      -  saison (texte)
   -  Cloth
      -  id-cloth (nombre)
      -  type (texte) 
      -  name(texte)
      -  id-collection (nombre)

3. Ajouter quelques données dans votre BDD
4. Ecrivez les requêtes SQL pour répondre  aux questions suivants
   - Quelles sont toutes les Collections du magasin ? 
   - Combien de collection en tout il y a ? 
   - Créer un script PHP permettant d'afficher les différents vêtements pour chaque collection   


### Restaurant

Un restaurant étoilé du nom


### Festival 

### Camping

### Promenade

### Villo

### Piano

### Peinture 

### Couture

### VTT 

### Chant 

### Chill
