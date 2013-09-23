Readme for prosjektoppgave i IS107.
Prosjekt laget av Gruppe 13 - BTeam: 
Emil Volckmar Ry, Kenneth Finnesand, Sondre Sallaup, Stian Killerud og Martin Othamar.
Link; 
GITHUB: 	https://github.com/kennethfinnesand/is107-gruppe13-bteam/
GoogleCode: https://code.google.com/p/is-107-gruppe13-b-team/
Kontakt: kontakt@kongeprosjekter.net
F�lg v�r progresjon p� http://kongeprosjekter.net/

Intro
====================

PCByggaren skal tilby funksjonalitet som gj�r det lettere � bygge en egen stasjon�r PC.
Webapplikasjonen skal fungere som et oppsamlende informasjonssystem som gj�r at brukeren slipper � gj�re store mengder research i forkant av PCbyggingen,
vi skal samle og distributere informasjonen for brukeren!


Dokumentoversikt
====================

index.php:          - Struktur for webapplikasjon. Videre funksjonalitet implementeres forel�pig via iframe.
forside.php:        - Startsiden. Generell prosjektinfo fremkommer som default via iframe i index.php.
minprofil.php:      - Brukeroversikt. F�r tilgang til egne prosjekter og annen lagre informasjon. Se designskisser for utforming.
prosjekter.php      - Liste over prosjekter. F�r mulighet til � se prosjekter som andre brukere har lagret. Se designskisser for utforming.
kontakt.php         - Kontaktskjema. Mail sendes ovennevnte kontakt-adresse.
bygg.php            - Valg av brukerprofil. Her settes komponent-preferanser basert p� antagelser om brukeren. Se designskisser for utforming.
byggstart.php       - Her implementeres forms, start p� bygggeprosessen. MySQL data i forms sorteres utifra preferanser gjort i bygg.php
style.css           - Styling av hele webapplikasjonen.
mysql_connect.php   - Script for tilkobling til mySQL-database. Blir included i samtlige filer for tilkobling.
LICENSE             - Prosjekt-lisens.
README.md           - Readme for GitHub.
readme.txt          - Readme i rentekst.
/admin              - Administrasjonsfiler. Her fremkommer funksjonalitet for manipulering av databasen.
/designskisser      - Forel�pig design. Oversikt over brukergrensesnittet som skal v�re implementert ved ferdigstilling. Tar forbehold om hyppige endringer.







