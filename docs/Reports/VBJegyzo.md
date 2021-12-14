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
12 | Bejelentkezés | A bejelentkező oldal megjelenik | Siker | - | Vereb Barna | 2021.10.03
13 | Bejelentkezés | A bejelentkezés rossz adatok esetén nem működik | Siker | - | Vereb Barna | 2021.10.03
14 | Bejelentkezés | Helyes adatok esetén a bejelentkezés sikeres | Siker | - | Vereb Barna | 2021.10.03
15 | Bejelentkezés | Oldal betöltés sikertenel bejelentkezés után | Sikertelen | szintaktikai hiba miatt az oldal nem töltött be egy másikra | Vereb Barna | 2021.10.03
16 | Bejelentkezés | Bejelentkezés után a bejelentkező adatai elmentődnek | Siker | külön változókban van eltárolva a felhasználók adatai | Vereb Barna | 2021.10.03
17 |Téma rögzítése adminként felület megjelenése | Az oldal sikeresen megjelenik | Siker | - | Vereb Barna | 2021.10.03
18 | Új Téma rögzítése adminként | Helyes adatokkal ezek feltöltése | Siker | - | Vereb Barna | 2021.10.03
19 | Új Téma rögzítése adminként helytelen adatokkal | Az adatok feltöltésének nem kellene teljesülnie helytelen adatokkal | Siker | Nem írja ki, hogy nem töltötte fel. Kiírhatná. | Vereb Barna | 2021.10.03
20 | Kérdőív felvétele | Ezen az oldalon a megfelelő gombra kattintva eltárolja az adatbázisban| Siker | - | Vereb Barna | 2021.10.03
21 | Kérdőív megjelenítése | Kérdőív megjelenik, minden felvett kérdőív olvashatóan, átláthatóan lehet értelmezni | Siker | - | Vereb Barna | 2021.10.03
22 | Kérdőív megjelenítése| Órarendem megjelenik, minden felvett kérdőív olvashatóan, átláthatóan lehet értelmezni akkor is, ha nincs kérdés | Sikertelen | Egybe folyik a szöveg elválasztás nélkül | Vereb Barna | 2021.10.03
