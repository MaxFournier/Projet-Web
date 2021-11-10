BEGIN TRANSACTION;
CREATE TABLE IF NOT EXISTS "users" (
	"id"	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	"identifiant"	TEXT NOT NULL,
	"password"	TEXT NOT NULL,
	"email"	TEXT
);
CREATE TABLE IF NOT EXISTS "series" (
	"id"	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	"titre"	TEXT NOT NULL,
	"description"	TEXT,
	"nb_saison"	INTEGER
);
CREATE TABLE IF NOT EXISTS "episodes" (
	"id"	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	"titre"	TEXT,
	"description"	TEXT,
	"saison"	INTEGER NOT NULL,
	"numero"	INTEGER NOT NULL,
	"id_serie"	INTEGER NOT NULL,
	FOREIGN KEY("id_serie") REFERENCES "series"("id") ON DELETE CASCADE ON UPDATE CASCADE
);
CREATE TABLE IF NOT EXISTS "avancement" (
	"id_serie"	INTEGER NOT NULL,
	"id_user"	INTEGER NOT NULL,
	"id_last_episode"	INTEGER,
	"favoris"	INTEGER DEFAULT 0,
	FOREIGN KEY("id_last_episode") REFERENCES "episodes"("id") ON DELETE CASCADE,
	PRIMARY KEY("id_serie","id_user"),
	FOREIGN KEY("id_user") REFERENCES "users"("id") ON DELETE CASCADE,
	FOREIGN KEY("id_serie") REFERENCES "series"("id") ON DELETE CASCADE
);
INSERT INTO "users" ("id","identifiant","password","email") VALUES (1,'admin','admin','admin@admin.fr'),
 (2,'max','123+aze','max.fournier@cpe.fr'),
 (3,'user','123+aze','user.user@user.fr');
INSERT INTO "series" ("id","titre","description","nb_saison") VALUES (1,'Casa de Papel','Eight thieves take hostages and lock themselves in the Royal Mint of Spain as a criminal mastermind manipulates the police to carry out his plan.',4),
 (2,'The Mandalorian','After the defeat of the Empire at the hands of Rebel forces, a lone bounty hunter operating in the Outer Rim, away from the dominion of the New Republic, goes on many surprising and risky adventures.',2),
 (3,'Good Omens','The End of the World is coming, which means a fussy Angel and a loose-living Demon who’ve become overly fond of life on Earth are forced to form an unlikely alliance to stop Armageddon. But they have lost the Antichrist, an 11-year-old boy unaware he’s meant to bring upon the end of days, forcing them to embark on an adventure to find him and save the world before it’s too late.',1);
INSERT INTO "episodes" ("id","titre","description","saison","numero","id_serie") VALUES (1,'In the beginning','Aziraphale and Crowley, of Heaven and Hell respectively, agree to join forces in order to prevent Armageddon. They attempt to raise the Antichrist in a balanced and human way, but are they focusin',1,1,3),
 (2,'The Book','Having followed the wrong boy for years, Aziraphale and Crowley must now try to locate the whereabouts of real Antichrist. Perhaps the story of Agnes Nutter and her famous prophecies will hold the answer?',1,2,3),
 (3,'Hard Times','We follow Aziraphale and Crowley’s friendship across the ages. Meanwhile, in the present day, Agnes Nutter’s descendant Anathema arrives in Tadfield on her own mission to save the world.',1,3,3),
 (4,'Saturday Morning Funtime','Aziraphale and Crowley’s friendship is tested to the limit as their superiors catch up with them. Armageddon starts in earnest, with the Antichrist’s powers wreaking havoc across the globe.',1,4,3),
 (5,'The Doomsday Option','Aziraphale and Crowley race towards Tadfield airbase as they attempt to prevent Adam and the Four Horsemen from beginning the apocalypse. But one has been discorporated and the other is trapped in a flaming motorway. Will they get there in time?',1,5,3),
 (6,'The Very Last Day of the Rest of Their Lives','Can Adam, Crowley and Aziraphale work together to fight the powers of Heaven and Hell and prevent the apocalypse? And what fate awaits them if they do? The story reaches its conclusion, and it might just be the end of the world.',1,6,3),
 (7,'The Mandalorian',NULL,1,1,2),
 (8,'The Child',NULL,1,2,2),
 (9,'The Tragedy',NULL,2,14,2),
 (10,'The Believer',NULL,2,15,2),
 (11,'Episode 1','Le Professeur recrute une jeune braqueuse et sept autres criminels en vue d''un cambriolage grandiose ciblant la Maison royale de la Monnaie d''Espagne.',1,1,1),
 (12,'Episode 2','Raquel, qui gère les négociations pour la libération des otages, établit un contact avec le Professeur. L''un des otages est un élément clé du plan des cambrioleurs.',1,2,1);
INSERT INTO "avancement" ("id_serie","id_user","id_last_episode","favoris") VALUES (2,2,8,1),
 (1,3,12,0),
 (1,1,12,0);
COMMIT;
