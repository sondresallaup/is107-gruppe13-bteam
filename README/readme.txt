Readme for prosjektoppgave i IS107.
Prosjekt laget av Gruppe 13 - BTeam: 
Emil Volckmar Ry, Kenneth Finnesand, Sondre Sallaup, Stian Killerud og Martin Othamar.
Link: https://github.com/kennethfinnesand/is107-gruppe13-bteam/
Kontakt: kontakt@kongeprosjekter.net
Følg vår progresjon på http://kongeprosjekter.net/

Intro
====================

PCByggaren skal tilby funksjonalitet som gjør det lettere å bygge en egen stasjonær PC.
Webapplikasjonen skal fungere som et oppsamlende informasjonssystem som gjør at brukeren slipper å gjøre store mengder research i forkant av PCbyggingen,
vi skal samle og distributere informasjonen for brukeren!


Dokumentoversikt
====================

index.php:          - Struktur for webapplikasjon. Videre funksjonalitet implementeres foreløpig via iframe.
forside.php:        - Startsiden. Generell prosjektinfo fremkommer som default via iframe i index.php.
minprofil.php:      - Brukeroversikt. Får tilgang til egne prosjekter og annen lagre informasjon. Se designskisser for utforming.
prosjekter.php      - Liste over prosjekter. Får mulighet til å se prosjekter som andre brukere har lagret. Se designskisser for utforming.
kontakt.php         - Kontaktskjema. Mail sendes ovennevnte kontakt-adresse.
bygg.php            - Valg av brukerprofil. Her settes komponent-preferanser basert på antagelser om brukeren. Se designskisser for utforming.
byggstart.php       - Her implementeres forms, start på bygggeprosessen. MySQL data i forms sorteres utifra preferanser gjort i bygg.php
style.css           - Styling av hele webapplikasjonen.
mysql_connect.php   - Script for tilkobling til mySQL-database. Blir included i samtlige filer for tilkobling.
LICENSE             - Prosjekt-lisens.
README.md           - Readme for GitHub.
readme.txt          - Readme i rentekst.
/admin              - Administrasjonsfiler. Her fremkommer funksjonalitet for manipulering av databasen.
/designskisser      - Foreløpig design. Oversikt over brukergrensesnittet som skal være implementert ved ferdigstilling. Tar forbehold om hyppige endringer.







