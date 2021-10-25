## 1. Áttekintés

A rendszer egy online teszt kitöltő oldalt valósít meg. A rendszert teljes mértékben online módon kell megvalósítani, weblap keretében. A weboldalon a regisztrált és regisztráció nélküli felhasználók kérdésekre tudnak válaszolni. Ezt a felhasználói válaszokat a rendszer eltárolja és ez képes lesz kimutatni, hogy az emberek többsége mit gondol egya adott témáról. Ez egy átlagot fog mutatni minden egyes kérdésnél. Az oldal ingyenes lesz és csak adatbegyűjtésre lesz alkalmas lényegében. A kérdések például időjárással, kriptovalutákkal vagy bankjegyek értékével kapcsolatosak lesznek.

## 2. Jelenlegi helyzet

## 3. Vágyálom rendszer 

## 4. Funkcionális követelmények

## 5. Rendszerre vonatkozó törvények, szabványok, ajánlások

Opensource szoftver. Bárki által letölthető és felhasználható. Az értékesítése nem megengedett!

## 6. Jelenlegi üzleti folyamatok modellje

## 7. Igényelt üzleti folyamatok modellje

    7.1 Bejelentkezés
            7.1.1 Témakörök megjelenítése
                    7.1.1.1 Új témakör megválszolása
                    7.1.1.2 Általam kitöltött kérdőívek válaszainak megjelenítése
                    7.1.1.3 Általam kitöltött kérdőívek válaszainak módosítása
                    7.1.1.4 Általam kitöltött kérdőívek válaszainak törlése
            7.1.2 Kijelentkezés
    7.2 Bejelentkezés nélküli felhasználók jogai:
            7.2.1 Témakörök megjelenítése
                    7.2.1.1 Új témakör megválszolása
            7.2 Regisztráció
            7.3 Felhasználók átlag válaszainak megjelenítése
## 8. Követelménylista

Modul | ID | Név | Kifejtés
--- | --- | --- | ----------------------------------------------------------------------
Jogosultság | K1 | Bejelentkezési felület | A felhasználó a felhasználónevével és jelszava segítségével jelentkezhet be. Nem megfelelő felhasználónév vagy jelszó esetén, a felhasználó hibaüzenetet kap.
Jogosultság | K2 | Regisztrációs felület | A felhasználó felhasználónév, e-mail cím és jelszó megadásával regisztrálhatja magát. A jelszó tárolása titkosított formában történik az adatbázisban. Bármely adat hiánya vagy a követelményeknek való nem megfelelése esetén, a felhasználó hibaüzenetet kap.
Jogosultság | K3 | Jogosultsági szintek | -Admin: Teljes hozzáférése van a weboldalhoz, kilistázhatja és törölheti a felhasználók adatait, új kérdőíveket tud létrehozni, majd felhsználóhoz rendelni. <br> -Felhasználó: A felasználóhoz hozzárendelt kérdéseket tudja megválaszolni, megválaszolás után látja az összes válasz eredményét.
Felület | K4 | Felhasználók listája | Admin jogosultsággal megtekinthető és törölhető a felhasználó.
Felület | K5 | Kérdőív létrehozás | Admin jogosultsággal lehet kérdőíveket létrehozni.
Felület | K6 | Kérdőívek | Regisztrált felhasználó tud kérdőíveket kitölteni.


## 9. Fogalomtár

- **UML** - Unified Modeling Language
- **Reszponzív felület** - Mobilon, Tableten, PC-n igazodik a
képernyőhöz a felület mérete, azaz több eszközön is probléma nélkül
üzemelhet
- **Releváns** - fontos, lényeges, meghatározó, jelentős
- **Corrective Maintenance:** A felhasználók által felfedezett és "user reportban"
elküldött hibák kijavítása.
- **Adaptive Maintenance:** A program naprakészen tartása és finomhangolása.
- **Perfective Maintenance:** A szoftver hosszútávú használata érdekében végzett
módosítások, új funkciók, a szoftver teljesítményének és működési
megbízhatóságának javítása.
- **Preventive Maintenance:** Olyan problémák elhárítása, amelyek még nem
tűnnek fontosnak, de később komoly problémákat okozhatnak.