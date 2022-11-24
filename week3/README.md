Lesopdrachten week 2

Overzicht van de lesopdrachten van week 3
-----------------------------------------

### Opdracht 1

In deze opdracht ga je oefenen met het ophalen van data uit de database. Hiervoor heb je eerst een database nodig. Er is al een database aangemaakt en deze is geëxporteerd in de vorm van een `.sql` bestand met de naam: [music\_collection.sql](music_collection.sql) (in de map week3/exercises)

#### Importeer de database

*   Zorg ervoor dat (in XAMPP) de Apache en SQL server aanstaan
*   Download [music\_collection.sql](music_collection.sql)
*   Ga naar [PhpMyAdmin](http://localhost/phpmyadmin/)
*   Klik op 'Import'
*   Klik op 'Choose file' / 'Selecteer bestand' en selecteer de zojuist gedownloade music\_collection.sql
*   Klik vervolgens helemaal onderaan de pagina op de knop 'Import'

#### Specifieke data selecteren met SQL

Via SQL gaan je specifieke vragen stellen aan de database. Dit doe je d.m.v. een query en dan specifiek een [SELECT Statement](https://www.w3schools.com/sql/sql_select.asp).

_Open de music\_collection database door op het 'plusje' voor de naam te klikken en klik vervolgens op de naam 'albums'. Klik nu bovenin op het tabblad 'SQL'. Hier kun je SQL-queries invoeren en zien welk resultaat de database als antwoord geeft. Let op! Het resultaat van een SELECT Statement is altijd een tabel, **ook als deze leeg is**._

> Formuleer voor onderstaande zinnen de juiste SELECT Statements en voer deze uit op de database.
>
> *   Toon alle albums. (Aantal 19)
> *   Toon alle albums met genre ‘Rock’. (Aantal: 7)
> *   Toon alle albums die meer dan 10 tracks bevatten. (Aantal: 17)
> *   Toon alle albums die meer dan 10 tracks bevatten en NA 2014 zijn uitgebracht. (Aantal: 9)
> *   Toon alle albums waarvan de artiest begint met een ‘H’. (Aantal: 3)

### Opdracht 2 - INDEX met database

Maak de indexpagina voor de muziekalbums, maar nu gekoppeld aan de [database](https://www.khanacademy.org/computing/computer-programming/sql/sql-basics/pt/querying-the-table). Dit vervangt de multidimensionale array uit eerdere lessen. Gebruik hiervoor de database uit opdracht 1. Haal albumdata op uit de database en toon deze in (de bestaande) tabel.

_Tip: in de map `includes` staat het bestand `connection.php`. Deze kan je importeren met de PHP-functie `require_once`. Hierna is er verbinding gemaakt met de database. Dit kun je ook doen bij de volgende opdracht (details.php)_

### Opdracht 3 - DETAILS met database

Maak de detailpagina ook dynamisch vanuit de database. Laat de details zien van he specifieke album dat aangeklikt is.