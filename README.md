# Projet-Web

## Config a realiser
Normalement l'application marche telle quel, en cas de probleme avec la base verifiez si le fichier "database.db" est bien present a la racine et que son chemin est bien indiqué dans le fichier "config.php". 
En cas de probleme avec le fichier database.db, executez les scripts sql comptenu dans le ficher "sqliteDatabase.sql" avec sqlite3 pour en creer un autre et placez le a la racine.


## tuto utilisé 
Pour le routage : https://www.youtube.com/watch?v=DpbUqJcch0Y
Pour l'API : https://www.youtube.com/watch?v=RTjd1nwvlj4

## ce que le projet est censé faire
Le projet est un site permettant la gestion des serie que l'utilisateur est en train de regarder, ainsi l'utilisateur peut indiquer quelle serie il a vu et si elles font partie de ses favorites.

le projet possede plusieurs page :

#### Connexion
Permet a l'utilisateur de se connecter en rentrant son identifiant et son mail.

*fonction utilisée :*
- User::userConnection

#### Accueil
Permet d'acceder a l'écran de connexion ainsi que de voir 3 series du moment.

*fonctions utilisées* :
- Serie::getFirstSerie
- Serie::getSeriePoster

#### Naviguer
Permet de voir toute les series du site sont indiquée celle que l'utilisateur connecté a deja vu ainsi que ses favorites.

*fonctions utilisées* :
- Serie::getAllSerie
- Avancement::getSeenSerie
- Avancement::getFavoriteSerie
- Serie::getSeriePoster

#### Info serie
Permet de voir toute les info d'une serie et de signaler une serie comme etant une serie favorite

*fonctions utilisées :*
Serie::getById
Epidode::getSerieEpisode
Avancement::getLastSeen
avancement::isFavorite
avancement::updateFavorite

#### Choisir dernier episode vu 
Permet de selectionner parmis les episodes le dernier vu

*fonctions utilisées :*
Epidode::getEpisodesBySerieId
Avancement::updateLastSeen

#### Future implementation possible 
- implementation d'une inscription
- ajout du role admin
- fonction d'ajout et de modification de series/episodes
- recuperation de plus d'info par l'api (rating, date de sortie,...)
- rajouter plsu de securité
- brider l'acces aux differentes pagess


## Difficultées rencontrées
Au niveau du backend je n'avais jamais utilisé de routing avant ce projet et jamais executé de requete avec sqlite, plusieurs problemes ont émérgés de la. 

LE routing a été mis en place bien après le debut du projet, un choix par très malin en retrospective et qui a necessité la modification de l'entièreté du projet plusieurs fois.

Le choix de n'avoir qu'une seule fonction qui accede a la base a presenté plusieurs problemes a cause de l'incorporation de variable dans la requete qui à été difficile a mettre en place. 

Au final, j'ai du repasser sur toute les requetes pour ajouter un identifiant pour chaque variable et pour créer un tableau contenant ces identifiant ce qui a pris beaucoup de temps. 

Ainsi, malgrès les modifications effectuées seul les fonction de type Get/Select/Read sont réalisable.


## Etat du projet
### Max 
Au niveau du back, le routing fonctionne ainsi que les fonctions Select et l'acces a l'api. Les fonction update, insert et delete ne fonctionne pas au moment de leur execution pour des raison inconnue jusqu'a présent(probablement un probleme de droit).



## Notes suplementaires
mot de passe pour la connexion :
- identifiant : admin
- mot de passe : admin

Sqllite ne supportant pas les boolean, ceux ci ont été remplacé par des integer ou 0 = false et 1 = true
