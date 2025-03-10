
# CozyTrip - Plateforme de Location d'Hébergements 🏠

CozyTrip est une application web de location d'hébergements développée avec Symfony 6. Elle permet aux utilisateurs de découvrir, réserver et gérer des locations de vacances uniques.

## 🚀 Fonctionnalités

- **Hébergements**
  - Catalogue avec filtres par catégories
  - Recherche avancée
  - Système de réservation
  - Gestion des disponibilités

- **Utilisateurs**
  - Inscription/Connexion sécurisée
  - Profil personnalisable
  - Gestion des réservations
  - Système de commentaires

- **Administration**
  - Gestion des hébergements
  - Modération des commentaires
  - Gestion des catégories
  - Tableau de bord

## 🛠 Prérequis

- PHP 8.1 ou supérieur
- Composer
- Symfony CLI
- MySQL 5.7 ou supérieur
- Node.js et npm

## 📦 Installation

1. **Cloner le projet**

git clone https://github.com/Sofianedevv/cozytripv2.git
cd cozytripv2

2. **Installer les dépendances**

composer install
npm install

3. **Configurer la base de données**
Deux options s'offrent à vous :

**Option 1 : Importer la base de données existante**
- Utilisez le fichier `cozytripp.sql` fourni dans le repository

**Option 2 : Créer une nouvelle base de données**
- Créez une base de données MySQL
- Mettez à jour les identifiants dans le fichier `.env`

cp .env.example .env        

php bin/console doctrine:database:create

php bin/console doctrine:migrations:migrate

5. **Compiler les assets**

npm run build


6. **Lancer le serveur**

symfony server:start    

7. **Accéder à l'application** 

http://localhost:8000   



## 🔒 Sécurité

Le projet intègre plusieurs mesures de sécurité :

- Protection CSRF
- Validation des entrées
- Échappement des sorties
- Headers de sécurité
- Sessions sécurisées
- Protection XSS

## 🧪 Tests

### Tests de Sécurité
cd tests_securite
./test_owasp.bat


### Tests de Performance
./test_charge.bat


### Tests de Performance avec Vegeta

Les tests de charge sont réalisés avec l'outil Vegeta pour simuler différents niveaux de trafic.

1. **Installation de Vegeta**
- Téléchargez Vegeta depuis : https://github.com/tsenart/vegeta/releases
- Ajoutez le binaire à votre PATH système

2. **Exécution des tests**

./test_charge.bat

3. **Scénarios de test**
- Charge légère : 5 requêtes/seconde pendant 30s
- Charge moyenne : 20 requêtes/seconde pendant 30s
- Charge intensive : 50 requêtes/seconde pendant 30s

4. **Rapports générés**
Les tests génèrent plusieurs types de rapports :
- `rapport_light.txt` : Résultats charge légère
- `rapport_medium.txt` : Résultats charge moyenne
- `rapport_heavy.txt` : Résultats charge intensive
- `graph_*.html` : Visualisations graphiques des résultats
- `rapport_analyse.md` : Analyse complète des performances

5. **Points testés**
GET http://localhost:8000/
GET http://localhost:8000/hebergements
GET http://localhost:8000/contact
GET http://localhost:8000/mention
GET http://localhost:8000/hebergement_1
GET http://localhost:8000/hebergement/categorie/villa


6. **Métriques mesurées**
- Temps de réponse moyen
- Taux de succès
- Latence (50e, 90e, 95e percentiles)
- Débit (requêtes/seconde)
- Taux d'erreur







## ✨ Auteurs

- [@Sofianedevv](https://github.com/Sofianedevv)

