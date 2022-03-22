# Teszt jegyzőkönyv
#### Készítette: WIP - Kónya Donát

Lépés | Funkció | Tesztelés leírása | Státusz | Megjegyzés | Aláírás | Időpont
--- | --- | --- | --- | --- | --- | --- 
1 | Regisztráció | A regisztrációs oldal megjelenik | Siker | - | Kónya Donát | 2021.12.14
2 | Regisztráció | A regisztráció rossz adatok esetén nem működik | Siker | - | Kónya Donát | 2021.12.14
3 | Regisztráció | Helyes adatok esetén, minden mező kitöltése esetén a regisztráció sikeres | Siker | - | Kónya Donát | 2021.12.14
4 | Téma felvétel | A Téma oldal megjelenik, listázza a Téma | Sikertelen | A hibát az SQL kód helytelen szintaxisa okozta | Kónya Donát | 2021.12.14
5 | Téma felvétel | A felhasználó sikeresen fel tudja venni a Téma | Siker | - | Kónya Donát | 2021.12.14
6 | Admin felület | A felhasználók hibamentesen vannak listázva | Sikertelen | A bejelentkezett admin felhasználót is kilistázta, hibás volt a lekérdezés | Kónya Donát | 2021.12.14
7 | Admin felület | A felhasználókat lehet törölni az adatbázisból | Siker | - | Kónya Donát | 2021.12.14
8 | Admin felület | Új témát lehet hozzáadni az adatbázishoz | Siker | - | Kónya Donát | 2021.12.14
9 | Oldal fejléc megjelenése | A fejléc reszponzív | Siker | - | Kónya Donát | 2021.12.14
10 | Oldal fejléc megjelenése | Adott oldalon levő menüpont osztály aktívvá tétele | Sikertelen | feltételeket kellett beletenni, hogy működjön | Kónya Donát | 2021.12.14
11 | Oldal fejléc megjelenése | Minden oldal elérhető ami a menüponton található | Siker | - | Kónya Donát | 2021.12.14
12 | Átlag lekérdezése | Átlag válaszok lekérdezése | Sikertelen | A hibát hibás SQL kód okozta | Kónya Donát | 2021.12.14
13 | Átlag lekérdezése | Átlag válaszok lekérdezése | Sikertelen | A hibát hibás SQL szintaxis okozta | Kónya Donát | 2021.12.14
14 | Átlag lekérdezése | Átlag válaszok lekérdezése | Sikeres |  | Kónya Donát | 2021.12.14
15 | Új kérdés felvétel a rendszerbe | Kérdés név validálása | Sikertelen | A kérdés értékét vizsgáltam, nem a hosszát | Kónya Donát | 2022.03.21
16 | Új kérdés felvétel a rendszerbe | Kérdés név validálása | Sikeres | Kód javítása, strlen használata | Kónya Donát | 2022.03.21
17 | Navbar | Navbar megjelenítése kijelentkezett állapotban | Sikertelen | A hibát a session okozta, ekkor még nem létezik és az uid kulcs került lekérdezése | Kónya Donát | 2022.03.21
18 | Navbar | Navbar megjelenítése kijelentkezett állapotban | Sikeres | Csak a session vizsgálata megoldotta a hibát, nincs szükség kulcsra | Kónya Donát | 2022.03.21