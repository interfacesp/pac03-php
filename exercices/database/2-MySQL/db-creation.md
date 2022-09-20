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

   <!-- SELECT * FROM `line`  -->


   - Combien de lignes en tout il y a ? 
   
   <!-- SELECT * FROM `line` WHERE 1 -->
   
   - Créer un script PHP permettant d'afficher tous les arrêts de chaque ligne 

   <!-- SELECT *
   FROM line, stop   
   WHERE line.id = stop.id_line;  -->



### Fashion

Le magasin de mode Dolqué Gabanna aimerait créer une base de données pour stocker des informations des nouvelles collections.


1. Créez une BDD (base de données) dans MySQL
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

Pour une nouvelle émission Top Top Chef, la production voudrait informatiser les différents plats concoctés par les candidat.e.s. 


1. Créez une BDD (base de données) dans MySQL
2. Créez 2 tables 
   -  Menu 
      -  id-menu (nombre)
      -  menu-name(texte)
      -  nombre-etoiles(nombre)
   -  Dish
      -  id-plat (nombre)
      -  name (texte) 
      -  id-menu (nombre)

3. Ajouter quelques données dans votre BDD
4. Ecrivez les requêtes SQL pour répondre  aux questions suivants
   - Quelles sont toutes les Menus ? 
   - Combien de Plats ? 
   - Créer un script PHP permettant d'afficher les différents plats pour chaque Menu ?  

### Festival 

Un festival nommé Magic Sound créer un catalogue informatique reprenant un ensemble d'artistes avec les genres de musique.  


1. Créez une BDD (base de données) dans MySQL
2. Créez 2 tables 
   -  Music-Type
      -  id-type (nombre)
      -  type-name(texte)
      -  description (text)
   -  Artist
      -  id-artist (nombre)
      -  name (texte) 
      -  id-type (nombre): référence le type de musique

3. Ajouter quelques données dans votre BDD
4. Ecrivez les requêtes SQL pour répondre  aux questions suivants
   - Quelles sont toutes les Artistes ? 
   - Combien d'Artistes en tout ? 
   - Créer un script PHP permettant d'afficher les Artistes par type de musique ?  


### Camping

Pour tourner le film Camping 5, l'équipe de production et aimerait utiliser une web app pour le tournage. 

Les acteurs sont assignés un type de logement au camping pour une période donnée. Différents types de logements 
sont possibles. 

   1. Créer une BDD dans MySQL
   2. Créer les tables:
        - Accomodation
          - id-accomodation
          - description (example: tente, mobile-home,tipi,etc.)
        - Actor
          - id
          - nom
          - prenom
          - Age
        - Assignment
          - id-assign
          - actor-id
          - accomodation-id
          - start-date
          - end-date
   3. Ajouter quelques données dans votre BDD (à vous d'imaginer)
   4. Ecrivez des requêtes SQL pour :
         1. Afficher les types de logements
   

### Promenade

L'association Walking Coders veut créer une web app pour répertorier des sentiers de promenade. 
La web app aura besoin BDD de 2 tables  

1. Créez 2 tables 
   -  Hike
      -  id-hike
      -  region 
      -  distance
      -  guide-id
   -  Guide
      -  id-guide
      -  name
      -  firstname


### Villo

La compagnie Velyx aimerait rivaliser avec Villo. Pour commencer, elle aimerait commencer avec une simple web app. La nouveauté de Velyx: les vélos ont chacun une couleur différente.  
Faisant appel à vous, vous lui proposez de commencer à image la structure des données. 
Vous lui proposez une BDD avec 3 tables: 

   - Bike
     - id-bike
     - color 
     - last-location-longitude
     - last-location-latitude
   - Customer
     - id-customer
     - name
     - firstname
     - lastname
   - Rental
     - customer-id
     - bike-id
     - duration

### Piano

Une école de musique Musiquality est super réputée de bouche à oreilles. Toutefois, elle n'a pas de visibilité numérique. Elle aimerait développer sa présence sur la toile. 
Comme vous suivez des cours de piano chez eux et aussi une formation chez Interface3, vous leur proposez de développer une web app en échange d'une réduction de vos frais d'inscription.

2 tables vous semblent évidentes: Cours et Instrument

- Lesson
  - id-lesson
  - description
  - start-date
  - end-date
- Instrument
  - id-instrument
  - name
  - description

Sachant que dans un cours, seul un instrument est enseigné, quel structure proposez-vous ? 


### Peinture 

### Couture

### VTT 

### Chant 

### Chill
