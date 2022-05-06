# Teszt jegyzőkönyv
#### Készítette: WIP - Vereb Barna

Lépés | Funkció | Tesztelés leírása | Státusz | Megjegyzés | Aláírás | Időpont
--- | --- | --- | --- | --- | --- | --- 
1 | Regisztráció | A regisztrációs oldal megjelenik | Siker | - | Vereb Barna | 2021.12.14
2 | Regisztráció | A regisztráció rossz adatok esetén nem működik | Siker | - | Vereb Barna | 2021.12.14
3 | Regisztráció | Helyes adatok esetén, minden mező kitöltése esetén a regisztráció sikeres | Siker | - | Vereb Barna | 2021.12.14
4 | Téma felvétel | A Téma oldal megjelenik, listázza a Téma | Sikertelen | A hibát az SQL kód helytelen szintaxisa okozta | Vereb Barna | 2021.12.14
5 | Téma felvétel | A felhasználó sikeresen fel tudja venni a Téma | Siker | - | Vereb Barna | 2021.12.14
6 | Admin felület | A felhasználók hibamentesen vannak listázva | Sikertelen | A bejelentkezett admin felhasználót is kilistázta, hibás volt a lekérdezés | Vereb Barna | 2021.12.14
7 | Admin felület | A felhasználókat lehet törölni az adatbázisból | Siker | - | Vereb Barna | 2021.12.14
8 | Admin felület | Új témát lehet hozzáadni az adatbázishoz | Siker | - | Vereb Barna | 2021.12.14
9 | Oldal fejléc megjelenése | A fejléc reszponzív | Siker | - | Vereb Barna | 2021.12.14
10 | Oldal fejléc megjelenése | Adott oldalon levő menüpont osztály aktívvá tétele | Sikertelen | feltételeket kellett beletenni, hogy működjön | Vereb Barna | 2021.12.14
11 | Oldal fejléc megjelenése | Minden oldal elérhető ami a menüponton található | Siker | - | Vereb Barna | 2021.12.14
12 | Bejelentkezés | A bejelentkező oldal megjelenik | Siker | - | Vereb Barna | 2021.12.14
13 | Bejelentkezés | A bejelentkezés rossz adatok esetén nem működik | Siker | - | Vereb Barna | 2021.12.14
14 | Bejelentkezés | Helyes adatok esetén a bejelentkezés sikeres | Siker | - | Vereb Barna | 2021.12.14
15 | Bejelentkezés | Oldal betöltés sikertenel bejelentkezés után | Sikertelen | szintaktikai hiba miatt az oldal nem töltött be egy másikra | Vereb Barna | 2021.12.14
16 | Bejelentkezés | Bejelentkezés után a bejelentkező adatai elmentődnek | Siker | külön változókban van eltárolva a felhasználók adatai | Vereb Barna | 2021.12.14
17 |Téma rögzítése adminként felület megjelenése | Az oldal sikeresen megjelenik | Siker | - | Vereb Barna | 2021.12.14
18 | Új Téma rögzítése adminként | Helyes adatokkal ezek feltöltése | Siker | - | Vereb Barna | 2021.12.14
19 | Új Téma rögzítése adminként helytelen adatokkal | Az adatok feltöltésének nem kellene teljesülnie helytelen adatokkal | Siker | Nem írja ki, hogy nem töltötte fel. Kiírhatná. | Vereb Barna | 2021.12.14
20 | Kérdőív felvétele | Ezen az oldalon a megfelelő gombra kattintva eltárolja az adatbázisban| Siker | - | Vereb Barna | 2021.12.14
21 | Kérdőív megjelenítése | Kérdőív megjelenik, minden felvett kérdőív olvashatóan, átláthatóan lehet értelmezni | Siker | - | Vereb Barna | 2021.12.14
22 | Kérdőív megjelenítése| Órarendem megjelenik, minden felvett kérdőív olvashatóan, átláthatóan lehet értelmezni akkor is, ha nincs kérdés | Sikertelen | Egybe folyik a szöveg elválasztás nélkül | Vereb Barna | 2021.12.14
23 | Kérdőív megjelenítése (új teszt) | Kérdőív megjelenik, minden felvett Kérdőív olvashatóan, átláthatóan lehet értelmezni akkor is, ha nincs kérdés | Sikeres | Egy [Enter] hiány volt] | Vereb Barna | 2021.12.14
24 | Téma törlése jogosultság nélkül | Az oldal nem jelenik meg az admin jog hiányában | Siker | - | Vereb Barna | 2021.12.14
25 | Kérdőív törlése jogosultsággal | Az oldal megfelelően működik | Siker | - | Vereb Barna | 2021.12.14
26 | Kérdés törlése a rendszerből, ami fel van véve kérdéshez | SQL hiba | Sikertelen | A hibát a kapcsolótábla okozta, először onnan kell törölni | Vereb Barna | 2021.12.14
27 | Kérdés törlése a rendszerből, ami fel van véve kérdéshez | SQL hiba javítva | Siker | - | Vereb Barna | 2021.12.14
28 | Adott kérdőív adatainak szerkesztése | A szerkesztés megfelelően működött | Siker | - | Vereb Barna | 2021.12.14
29 | Adott kérdőív adatainak szerkesztése jogosultásgok nélkül | A szerkesztés menüpont nem elérhető felhasználóként| Siker | - | Vereb Barna | 2021.12.14
30 | Adott kérdőív adatainak szerkesztése string tipusú idvel | Az oldal ellenőrizte, hogy a paraméterként kapott id int-e| Siker | - | Vereb Barna | 2021.12.14
31 | Adott kérdőív adatainak szerkesztése negatív idvel | A negatív paraméter nem volt kezelve | Sikertelen | Paraméter vizsgálattal könnyen megoldható | Vereb Barna | 2021.12.14
32 | Adott kérdőív adatainak szerkesztése negatív idvel | A negatív számok vizsgálata hozzáadva a paraméterhez  | Siker | - | Vereb Barna | 2021.12.14
33 | Felhasználói adatok szerkesztése, jelszó változtatása | Jelszó változtatás | Siker | - | Vereb Barna | 2021.12.14
34 | Felhasználói adatok szerkesztése, email változtatása | Email változtatás | Siker | Az email cím változtatás megtörtént, a régi email cím mező nem frissül | Vereb Barna | 2021.12.14
35 | Új kérdés felvétel a rendszerbe | Kérdés név validálása | Sikertelen | A kérdés értékét vizsgáltam, nem a hosszát | Vereb Barna | 2022.05.06
36 | Új kérdés felvétel a rendszerbe | Kérdés név validálása | Sikeres | Kód javítása, strlen használata | Vereb Barna | 2022.05.06
37 | Navbar | Navbar megjelenítése kijelentkezett állapotban | Sikertelen | A hibát a session okozta, ekkor még nem létezik és az uid kulcs került lekérdezése | Vereb Barna | 2022.05.06
38 | Navbar | Navbar megjelenítése kijelentkezett állapotban | Sikeres | Csak a session vizsgálata megoldotta a hibát, nincs szükség kulcsra | Vereb Barna | 2022.05.06
39 | reCAPTCHA | reCAPTCHA működése | Sikertelen | A hibát a site key és a secret key hiánya okozta | Vereb Barna | 2022.05.06
