## 1. Áttekintés

A rendszer egy online teszt kitöltő oldalt valósít meg. A rendszert teljes mértékben online módon kell megvalósítani, weblap keretében. A weboldalon a regisztrált és regisztráció nélküli felhasználók kérdésekre tudnak válaszolni. Ezt a felhasználói válaszokat a rendszer eltárolja és ez képes lesz kimutatni, hogy az emberek többsége mit gondol egya adott témáról. Ez egy átlagot fog mutatni minden egyes kérdésnél. Az oldal ingyenes lesz és csak adatbegyűjtésre lesz alkalmas lényegében. A kérdések például időjárással, kriptovalutákkal vagy bankjegyek értékével kapcsolatosak lesznek.

## 2. Jelenlegi helyzet

A mai világban nagyon sokat számítanak az adatok,információk és azok minősége, gondoljunk itt akár az álhírekre és ezek súlyára.
Minden az online térben mozog, félrevezető információk, átverések. Gondoljuk csak el hány olyan hirdetéssel találkoztunk, ahol közel semmi pénz befektetésével a befizetett pénzünk akár 10-20 szorosát ígérik, akár valami startup kriptovaluta projekten, vagy valami mágikus algoritmus segítségével.
Hatalmas kényelmet és biztonságot jelentene az embereknek, ha lenne egy olyan egységes rendszer, ahol az információ valós, így jön szóba ez a rendszer.
A felhasználók kérdéseket kapnak egy adott témában, azt a rendszer kiértékeli, elemzi és a többségi arány alapján lehet majd megtekinteni az eredményeket. A rendszer mind mobilon, mind weben elérhető lesz, így nem kell azoknak sem aggódniuk, akiknek nincs számítógépük vagy esetleg okostelefonjuk, a rendszer univerzális megoldást hoz mindkét esetre, hogy a felhasználók minőségi információkhoz jussanak.
A minőségi információt biztosítja a CAPTCHA amely védi az adatok minőségét oly módon, hogy egy kis teszt keretében ki kell választani a korrekt megoldást, ezzel ellehetlenítve a botok iránti adatrontás esélyét. Ilyen kis teszt például, hogy válasszuk ki amelyik képkockákon vonat található, esetleg fordítsunk el egy figurát a korrekt irányba.

## 3. Vágyálom rendszer 

A project célja olyan felület biztosítása ahol a gépi tanulást megpróbáljuk valamilyen szinten megvalósítani. Ezt egy internetes weboldalként tervezzük megcsinálni ahol az emberek kitölthetnek kérdőíveket.
Ezt meg tudják majd tenni bejelentkezve felhasználói fiókkal vagy fiók nélkül is. Annyi haszna lesz annak, hogy valakinek van fiókja, hogy ki tudja törölni és tudja módosítani saját válaszait, és persze meg tudja tekinteni őket. Felhasználói fiók nélkül ezt nem lenne egyszerű megvalósítani így annak, aki csak "vendég"-ként tölti ki a kérdőíveket a későbbiekben nem tudja szerkeszteni saját válaszait, sem törölni őket.
A weblap maga egy letisztult oldal a lehető legjobban átlátható, könnyen kezelhető, mindenki számára egyértelmű működéssel bírjon.


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