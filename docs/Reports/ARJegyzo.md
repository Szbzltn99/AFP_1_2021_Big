# Teszt jegyzőkönyv
#### Készítette: WIP - Ács Róbert

Lépés | Funkció | Tesztelés leírása | Státusz | Megjegyzés | Aláírás | Időpont
--- | --- | --- | --- | --- | --- | --- 
1 | Új kérdés rögzítése adminként felület megjelenése | Az oldal sikeresen megjelenik | Siker | - | Ács Róbert | 2021.12.12
2 | Új kérdés rögzítése adminként | Helyes adatokkal ezek feltöltése | Siker | A kérdésekre válaszokat javasolt lenne szövegként is eltárolni | Ács Róbert | 2021.12.12
3 | Új kérdés rögzítése adminként helytelen adatokkal | Az adatok feltöltésének nem kellene teljesülnie helytelen adatokkal | Siker | Nem írja ki, hogy nem töltötte fel. Kiírhatná. | Ács Róbert | 2021.12.12
4 | kérdés felvétele az adatbázisba | Ezen az oldalon a megfelelő gombra kattintva eltárolja azt, hogy vannak új kérdőívek | Siker | - | Ács Róbert | 2021.12.12
5 | kérdések megjelenítése | kérdések megjelennek, minden kitöltendő kérdőívet olvashatóan, átláthatóan lehet értelmezni | Siker | - | Ács Róbert | 2021.12.12
6 | kérdések megjelenítése kérdésütközés esetén | kérdések megjelennek, minden megválaszolt kérdőívet olvashatóan, átláthatóan lehet értelmezni akkor is, ha kérdésütközés történik | Sikertelen | Egybe folyik a szöveg elválasztás nélkül | Ács Róbert | 2021.12.12
7 | kérdések megjelenítése kérdésütközés esetén (új teszt) | kérdések megjelennek, minden megválaszolt kérdőívet olvashatóan, átláthatóan lehet értelmezni akkor is, ha kérdésütközés történik | Sikeres | Egy [Enter] hiány volt] | Ács Róbert | 2021.12.12
8 | Regisztráció | A regisztrációs oldal megjelenik | Siker | - | Ács Róbert | 2021.12.12
9 | Regisztráció | A regisztráció rossz adatok esetén nem működik | Siker | - | Ács Róbert | 2021.12.12
10 | Regisztráció | Helyes adatok esetén, minden mező kitöltése esetén a regisztráció sikeres | Siker | - | Ács Róbert | 2021.12.12
11 | Kérdés megválaszolás | A kérdés megválaszoló oldal megjelenik, listázza a kérdéseket | Sikertelen | A hibát az SQL kód helytelen szintaxisa okozta | Ács Róbert | 2021.12.12
12 | Kérdés megválaszolás | A felhasználó sikeresen meg tudja válaszolni a kérdéseket | Siker | - | Ács Róbert | 2021.12.12
13 | Admin felület | A felhasználók hibamentesen vannak listázva | Sikertelen | A bejelentkezett admin felhasználót is kilistázta, hibás volt a lekérdezés | Ács Róbert | 2021.12.12
14 | Admin felület | A felhasználókat lehet törölni az adatbázisból | Siker | - | Ács Róbert | 2021.12.12
15 | Admin felület | Új témát, kérdőívet és kérdést lehet hozzáadni az adatbázishoz | Siker | - | Ács Róbert | 2021.12.12
16 | Oldal fejléc megjelenése | A fejléc reszponzív | Siker | - | Ács Róbert | 2021.12.12
17 | Oldal fejléc megjelenése | Adott oldalon levő menüpont osztály aktívvá tétele | Sikertelen | feltételeket kellett beletenni, hogy működjön | Ács Róbert | 2021.12.12
18 | Oldal fejléc megjelenése | Minden oldal elérhető ami a menüponton található | Siker | - | Ács Róbert | 2021.12.12
19 | Bejelentkezés | A bejelentkező oldal megjelenik | Siker | - | Ács Róbert | 2021.12.12
20 | Bejelentkezés | A bejelentkezés rossz adatok esetén nem működik | Siker | - | Ács Róbert | 2021.12.12
21 | Bejelentkezés | Helyes adatok esetén a bejelentkezés sikeres | Siker | - | Ács Róbert | 2021.12.12
22 | Bejelentkezés | Oldal betöltés sikertenel bejelentkezés után | Sikertelen | szintaktikai hiba miatt az oldal nem töltött be egy másikra | Ács Róbert | 2021.12.12
23 | Bejelentkezés | Bejelentkezés után a bejelentkező adatai elmentődnek | Siker | külön változókban van eltárolva a felhasználók adatai | Ács Róbert | 2021.12.12
24 | Új kérdés rögzítése adminként felület megjelenése | Az oldal sikeresen megjelenik | Siker | - | Ács Róbert | 2021.12.12
25 | Új kérdés rögzítése adminként helytelen adatokkal | Az adatok feltöltésének nem kellene teljesülnie helytelen adatokkal | Siker | Nem írja ki, hogy nem töltötte fel. Kiírhatná. | Ács Róbert | 2021.12.12
26 | Új kérdés rögzítése adminként helytelen adatokkal figyelmeztetés | Az adatok feltöltésének nem kellene teljesülnie helytelen adatokkal | Siker | Nem figyelmeztet, hogy nem töltött fel semmit | Ács Róbert | 2021.12.12
27 | kérdés felvétele az kérdésekbe | Ezen az oldalon a megfelelő gombra kattintva eltárolja az adatbázisban, hogy nekem van ilyen órám | Siker | - | Ács Róbert | 2021.12.12
28 | Megválaszolt kérdések megjelenítése | kérdés megjelenik, minden megválaszolt kérdőívet olvashatóan, átláthatóan lehet értelmezni | Siker | - | Ács Róbert | 2021.12.12
29 | Megválaszolt kérdések megjelenítése kérdésütközés esetén | kérdés megjelenik, minden megválaszolt kérdőívet olvashatóan, átláthatóan lehet értelmezni akkor is, ha kérdésütközés történik | Sikertelen | Egybe folyik a szöveg elválasztás nélkül | Ács Róbert | 2021.12.12
30 | Megválaszolt kérdések megjelenítése kérdésütközés esetén (új teszt) | kérdések megjelenik, minden megválaszolt kérdőívet olvashatóan, átláthatóan lehet értelmezni akkor is, ha kérdésütközés történik | Sikeres | Egy [Enter] hiány volt | Ács Róbert | 2021.12.12
31 | Tárgy törlése jogosultság nélkül | Az oldal nem jelenik meg az admin jog hiányában | Siker | - | Ács Róbert | 2021.12.13
32 | Tárgy törlése jogosultsággal | Az oldal megfelelően működik | Siker | - | Ács Róbert | 2021.12.13
33 | kérdés törlése a rendszerből, ami fel van véve az kérdésrendbe | SQL hiba | Sikertelen | A hibát a kapcsolótábla okozta, először onnan kell törölni | Ács Róbert | 2021.12.13
34 | kérdés törlése a rendszerből, ami fel van véve az kérdésrendbe | SQL hiba javítva | Siker | - | Ács Róbert | 2021.12.13
35 | Adott kérdés adatainak szerkesztése | A szerkesztés megfelelően működött | Siker | - | Ács Róbert | 2021.12.13
36 | Adott kérdés adatainak szerkesztése jogosultásgok nélkül | A szerkesztés menüpont nem elérhető felhasználóként| Siker | - | Ács Róbert | 2021.12.13
37 | Adott kérdés adatainak szerkesztése string tipusú idvel | Az oldal ellenőrizte, hogy a paraméterként kapott id int-e| Siker | - | Ács Róbert | 2021.12.13
38 | Adott kérdés adatainak szerkesztése negatív idvel | A negatív paraméter kezelve volt | Sikeres | Paraméter vizsgálattal könnyen megoldható | Ács Róbert | 2021.12.14
39 | Adott kérdés adatainak szerkesztése negatív idvel | A negatív számok vizsgálata hozzáadva a paraméterhez  | Siker | - | Ács Róbert | 2021.12.14
40 | Felhasználói adatok szerkesztése, jelszó változtatása | Jelszó változtatás | Siker | - | Ács Róbert | 2021.12.14 