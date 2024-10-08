Ma 07-10
15:15-15:30 - Laravel & Laravel Breeze geinstalleerd
15:30-15:45 - Models, Controllers, Routing

Di 08-10
08-15-08:45 - Models, Migrations, Seeders, Factories, Layout gemaakt voor Species en Herd.
08:45-09:15 - Backend gemaakt voor Species en Herd, Layout voor Ranking gemaakt.
09:15-09:45 - Backend gemaakt voor Ranking. 
09:45-10:05 - PHPUnit tests gemaakt.
10:05-10:15 - Herd aangepast zodat je de herds van anderen kan zien. (/herd/{id}) 

02:30/04:00 Totaal


Installatie:
- Draai `composer install` en `npm install`.
- Kopieer `.env.example` naar `.env` en vul de database gegevens in.
- Draai `php artisan migrate --seed` en `npm run dev`.

Inloggegevens:
- Email: test@example.com
- Password: password

TODO:
- View other user herds [DONE]
- Add elephpants to collection
