Overzicht van de lesopdrachten van week 6
-----------------------------------------

### Opdracht 1: Pseudo code login

Je krijgt een setje met regels pseudo code. Al deze regels bij elkaar vormen deze de logica voor de loginpagina.

> Leg de regels in de goede volgorde. Zorg ervoor dat regels die afhankelijk zijn van de vorige regel inspringen.

### Opdracht 2: Register

In deze opdracht wordt de pagina gemaakt waarin een nieuwe gebruikers zich kan registeren. Hiervoor is het nodig dat er in de database een tabel is voor `users`. De sql om de tabel aan te maken kan je vinden in het bestand [users.sql](exercises/users.sql) in deze map. Je zal deze tabel moeten toevoegen aan een specifieke database. Je kunt deze tabel ook toevoegen aan de database van het reserveringssysteem.

*   Klik op de specifieke database waar je de tabel aan toe wilt voegen. Let op dat er nog geen tabel 'users' is.
*   Klik op 'import' en selecteer het bestand [users.sql](exercises/users.sql)
*   Klik onderaan de pagina op import / importeren

> In het bestand [register.php](exercises/register.php) staat de startcode voor deze pagina. Zorg ervoor dat de gebruiker in de database komt te staan. Let op, het wachtwoord moet veilig opgeslagen worden. Dit doe je met de functie `password_hash()`.  
> Deze functie kan je overnemen in PHPStorm. Wanneer je met je muis over de functie hovert, zie je hoe je de functie moet gerbuiken.

### Opdracht 3: Inloggen

Voor deze opdracht maak je gebruik van het bestand [login.php](exercises/login.php)

> Maak de loginpagina verder af. Voor het controleren van het wachtwoord gebruik je de functie `password_verify()`. Wanneer de gegevens kloppen, zal de gebruiker ingelogd moeten worden. Dit doe je met een SESSION ($\_SESSION). Informatie hierover kun je zien in video 2 van les 6.

### Opdracht 4: Secure page

Wanneer de bezoeker ingelogd is, mag de pagina [secure.php](exercises/secure.php) bezocht worden. Deze pagina moet echter wel beveiligd worden. De pagina mag alleen getoond worden als de SESSION gevuld is.

> Maak de [beveiligde pagina](exercises/secure.php) verder af.
>
> Tip! Je kunt de check of iemand ingelogd is een include bestand zetten. Deze kun je dan hergebruiken op elke pagina waar je de check nodig hebt.

### Opdracht 5: Log out

> Maak de [logout.php](exercises/logout.php) pagina werkend. Dit doe je eigenlijk door de SESSION weg te gooien met de functie `session_destroy()`