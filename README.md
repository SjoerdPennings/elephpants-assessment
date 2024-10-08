# Urenregistratie:
- Ma 07-10
15:15-15:30 - Laravel & Laravel Breeze geinstalleerd
15:30-15:45 - Models, Controllers, Routing

- Di 08-10
08:15-08:45 - Models, Migrations, Seeders, Factories, Layout gemaakt voor Species en Herd.
08:45-09:15 - Backend gemaakt voor Species en Herd, Layout voor Ranking gemaakt.
09:15-09:45 - Backend gemaakt voor Ranking. 
09:45-10:05 - PHPUnit tests gemaakt.
10:05-10:15 - Herd aangepast zodat je de herds van anderen kan zien. (/herd/{id}) 
10:15-10:40 - Models/DB relatie aangepast van one-to-many naar many-to-many, dit is meer zoals elephpants.me werkt.
10:40-10:45 - Extra unit tests voor Herd toegevoegd.
10:45-11:00 - Seeder aangepast zodat er meer duplicates zijn. Alle pagina's verder getest.
11:00-11:10 - Documentatie uitbreiden & Dark/Light mode testen.
11:10-11:30 - Toevoegen elephpants aan je herd geimplementeerd. Link naar registratiepagina toegevoegd.
11:30-11:45 - Laatste tests voor het eind van de vier uur.

04:00/04:00 Totaal

---

# Inloggegevens:
- Email: test@example.com
- Password: password

# Installatie:
- Draai `composer install` en `npm install`.
- Kopieer `.env.example` naar `.env` en vul de database gegevens in.
- Draai `php artisan migrate --seed` en `npm run dev`.
- Om te testen, draai `php artisan test`.

---

# Pagina's
- Species: Dit is een lijst van alle elephpants, ongeacht of je ze in je herd hebt.
- Herd: Dit is een lijst van alle elephpants die je in je herd hebt.
- Ranking: Dit is een lijst van alle gebruikers, en hoeveel elephpants ze in hun herd hebben.

# Models/tabellen:
- User/users: Gebruikers van de site.
- Elephpant/elephpants: Elephpants die je kan verzamelen.
- user_elephpant: Pivot tabel voor de many-to-many relatie tussen User en Elephpant.

---

# Volgende stappen:
- Zoekbalk voor elephpants
- Zoekbalk voor gebruikers die een bepaalde elephpant hebben
  - Deze kan mogelijk met de zoekresultaten van de elephpants gecombineerd worden. Laat deze resultaten apart zien.

