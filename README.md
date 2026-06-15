# SportBase PHP/MySQL

SportBase PHP/MySQL je jednostavna backend aplikacija napravljena kao dio treće sedmice prakse.
Aplikacija omogućava unos, prikaz, uređivanje i brisanje sportaša pomoću PHP-a i MySQL baze podataka.

## Funkcionalnosti

* Prikaz sportaša iz MySQL baze
* Dodavanje novog sportaša
* Uređivanje postojećeg sportaša
* Brisanje sportaša
* Validacija forme
* Prikaz poruka nakon uspješne izmjene ili brisanja
* Organizacija koda kroz više PHP fajlova

## Korištene tehnologije

* HTML
* CSS
* PHP
* MySQL
* phpMyAdmin
* XAMPP
* Git/GitHub

## Struktura projekta

```text
praksa-week-3/
├── dan1.php
├── dan2.php
├── index.php
├── create.php
├── edit.php
├── delete.php
├── config.php
├── database.sql
└── README.md
```

## Opis fajlova

* `dan1.php` - osnovna PHP stranica sa varijablama, uslovom i petljom
* `dan2.php` - PHP forma i obrada podataka pomoću POST metode
* `index.php` - glavna stranica koja prikazuje sportaše iz baze
* `create.php` - forma za dodavanje novog sportaša
* `edit.php` - forma za uređivanje postojećeg sportaša
* `delete.php` - brisanje sportaša iz baze
* `config.php` - konekcija na MySQL bazu
* `database.sql` - SQL fajl za kreiranje baze, tabele i testnih podataka

## Struktura baze podataka

Baza podataka se zove:

```text
sportbase_db
```

Tabela se zove:

```text
sportasi
```

Tabela sadrži sljedeće kolone:

```text
id
ime
sport
drzava
godina_rodjenja
uspjeh
```

## Pokretanje projekta

1. Instalirati i pokrenuti XAMPP.
2. Pokrenuti Apache i MySQL.
3. Projekat kopirati u folder:

```text
C:\xampp\htdocs\praksa-week-3
```

4. Otvoriti phpMyAdmin:

```text
http://localhost/phpmyadmin
```

5. Importovati fajl:

```text
database.sql
```

6. Otvoriti aplikaciju u browseru:

```text
http://localhost/praksa-week-3/index.php
```

## Autor

Muamer Pehlić
