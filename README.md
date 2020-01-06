# levstik
Levstikova aleja nagrajencev (spletna stran)


## Navodila za poganjanje spletne strani

Najlažji način poganjanja spletne strani lokalno je 
sledenje navodilom na strani [klik]: https://laravel.com/docs/6.x/homestead
Na ta način boste pognali tako spletni strežnik, kot podatkovno bazo.

#### Poganjanje brez podatkovne baze
`cd levstik`
`php artisan serve`

V tem primeru je potrebno v `.env` datoteki spremeniti podatke za dostop do podatkovne baze
na delujočo instanco MySql/Postgress. V nasprotnem primeru strani, ki potrebujejo dostop do
podatkovne baze ne bodo delovale.

