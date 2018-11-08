08/11 11:38

Eerste opzet van het vrijmibo signup systeem opgezet adhv Laracasts aflevering 10.
Lokaal worden aanmeldende gebruikers weggeschreven naar de gelinkte database, na het submitten wordt de gebruiker teruggebracht naar de main page waarop een lijst wordt gepresenteerd van iedereen die zich heeft aangemeld (Het naam veld van de database).

In de basis voldoet dit aan de eis die ik, als projectstarter, heb gesteld:
Een manier om deelnemers makkelijk aan te laten melden voor de vrijmibo.
Momenteel zit er echter nog geen check op duplicaten, er is geen controle op wat wordt ingevuld, geen registratie enzovoort enzovoort.

Gezien het gebruik van deze applicatie is registratie en checks op invoer niet nodig(We kunnen vrij veilig aannemen dat de bootcamp deelnemers geen rare dingen doen met invoer). Wel is enige beveiliging tegen scripting vereist aangezien het product wel online komt.

Eerste vereiste voor daadwerkelijke oplevering: Scripting beveiliging en enigszins stylen.

-------

Laravel regelt al de vereiste security checks: Data wordt geescaped voordat het de database in wordt geschreven en als het wordt getoond. Gecheckt door een aanmelding proberen te doen als een alert script, deze werd geheel correct weggeschreven in de database zonder uit te voeren.
Laravel regelt zelf ook al CSRF (cross site request forgery) dmv middleware. In het formulier zit een entry {{ csrf_field() }} die dit regelt. Zonder deze toevoeging zou een submit/post request niet verder komen en een 419 teruggeven.

Volgende stap: styling!