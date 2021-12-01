# Projet-Web

## Config a realiser
Normalement l'application marche telle quel, en cas de probleme avec la base verifiez sir le fichier "database.db" est bien present a la racine et que son chemin est bien indiqué dans le fichier "config.php". En cas de probleme avec le fichier database.db, executez les scripts sql comptenu dans le ficher "sqliteDatabase.sql" avec sqlite3 pour en creer un autre et placez le a la racine.

## tuto utilisé 
pour le routage : https://www.youtube.com/watch?v=DpbUqJcch0Y
pour l'acces base : 

## difficultées rencontrées
au niveau du backend je n'avais jamais utilisé de routing avant ce projet et jamais executé de requete avec sqlite, plusieur probleme on émérgé de la. 
De plus le choix de n'avoir qu'une seule fonction qui accede a la base a presenté plusieurs problemes a cause de l'incorporation de variable dans la requete qui à été difficile a mettre en place. Au final, j'ai du repasser sur toute les requetes pour ajouter un identifiant pour chaque variable et pour créer un tableau contenant ces identifiant ce qui a pris beaucoup de temps. Malgrès les modification efféctuée seul les fonction de type Get/Select/Read sont réalisable.



## Etat du projet
### Max 
Au niveau du back, le routing fonctionne ainsi que les fonctions Select les fonction update, insert et delete ne fonctionne pas au moment de leur execution (probablement un probleme de droit).


