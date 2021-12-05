# Projet-Web
#### Max Fournier et Anthony Chomette
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

#### List Series
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

#### Avancement
Permet de selectionner parmis les episodes le dernier vu

*fonctions utilisées :*
Epidode::getEpisodesBySerieId
Avancement::updateLastSeen

#### Future implementation possible 
- implementation d'une inscription
- ajout du role admin
- fonction d'ajout et de modification de series/episodes
- recuperation de plus d'info par l'api (rating, date de sortie,...)
- rajouter plus de securité


## Difficultées rencontrées

Au niveau du backend je n'avais jamais utilisé de routing avant ce projet et jamais executé de requete avec sqlite, plusieurs problemes ont émérgés de la. 

Le routing a été mis en place bien après le debut du projet, un choix  qui a necessité la modification de l'entièreté du projet plusieurs fois.

Le choix de n'avoir qu'une seule fonction qui accede a la base a presenté plusieurs problemes a cause de l'incorporation de variable dans la requete qui à été difficile a mettre en place. En effet sqlite etant deja assez peut securisé l'utilisation de bind_param() pour eviter les faille sql etait necessaire.

Au final, j'ai du repasser sur toute les requetes pour ajouter un identifiant pour chaque variable et pour créer un tableau contenant ces identifiant ce qui a pris beaucoup de temps. Pour une raison iconnue seule les fonction de type get/read fonctionnent. les autres (update, insert et delete) ne se lancent pas aux moment de l'execution.

La page 404 fonctionne en verifiant si un fichier 'nom de la route saisie'.php existe et en affichant l'erreur 404 dans le cas contraire plutot qu'en utilisant vraiment les erreurs et le .htaccess

L'aspect esthetique de certaine page s'explique par le fait que les pages créees par anthony (voir view/anthony) sont arrivée trop tard ou n'etait pas utilisable sans beaucoup de modification ce qui m'a forcé a faire des modification rapide ou a créer mem porpore page sur lesquelle je n'ai pas eu de temps de faire quelque chose de joli. Sur les pages ou je n'ai pas eu le temps de modifier ce qu'a fait Anthony ou le temps d'implementer un tableau, un vardump a été mis en place pour illustrer les données qui sont utilisées ou qui sont censées apparaitres

e n'ai pas reussi non plus a stocké les information de l'utilisateur connecter en session et donc les redirections qui devait avoir lieu en fonction de si un utilisateur connécte ou non ont été abandonnées  et l'id d'utilisateur qui devait etre recupere depuis la session a été saisie en dur pour illustrer les fonctions.

J'ai essayer de metre en place un routing acceptant deux parametres (exemple : Projet-Web/serie-info/3) mais je n'ai pas reussi a la faire fonctionner et le deuxieme parametre est devenu un attribut GET (Projet-Web/serie-info?serie=3).

Au niveau du front, étant mon premier projet web ,j'ai énormement découvert sur certaine fonction.
Cela m'a prit beaucoup de temps. 

Je n'ai pas réussi à mettre en place sur une case affiche l'acces à une prochaine page sans comprendre pourquoi.

<<<<<<< HEAD


## Etat du projet
### Max 
Au niveau du back, le routing fonctionne ainsi que les fonctions Select et l'acces a l'api. Les fonction update, insert et delete ne fonctionne pas au moment de leur execution pour des raison inconnue jusqu'a présent(probablement un probleme de droit).
### Anthony
Au niveau du front, il faut mettre en place l'api sur les rectangle prévu. On peut améliorer l'aspect visuel. Il faut aussi mettre en place l'api pour les information tierce tel que le nom, l'affiche, le nombre d'épisode et la description.
=======
## Rajouter depuis la derniere fois
Au niveau du back, le routing fonctionne ainsi que les fonctions Select et l'acces a l'api. 

Une page pour les erreur 404 a été ajoutée ainsi que les redirection vers cette page.

les pages ont été liée au back.

les page serie-list, serie-info et avancement on été rajoutée.

Quelques fonction manquantes ont aussi été ajoutées.
>>>>>>> main


## Notes suplementaires

Mot de passe pour la connexion :
- identifiant : admin
- mot de passe : admin

Sqllite ne supportant pas les boolean, ceux ci ont été remplacé par des integer ou 0 = false et 1 = true

la page par defaut est la page Home (Projet-web/Home), je n'ai pas reussi a en faire la page principale mais c'est censé etre la page d'accueil vers laquelle on est redirigée au lancement du projet.

l'api utilisée est celle du site https://api.tvmaze.com 
