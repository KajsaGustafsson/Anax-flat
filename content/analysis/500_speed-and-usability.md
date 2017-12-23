Laddningstid
===============================
Jag valde att göra analysen på webbplatser som jag själv ofta besöker. Både Ernstform.se och Chamois.se innehåller ganska stora mängder bilder att ladda så det kan vara intressant att se hur snabba de är.

Jag använde mig av verktyget Google Pagespeed Insights och webbläsarens devtools för att genomföra analysen. Jag använde mig sedan av Google kalkylark för att sammanställa alla mätvärden. [Länk till excelark.](https://docs.google.com/spreadsheets/d/1tSDcyVasc5eG1hM11ojGIIRbAsMQZv0MlytUz2Lut-Y/edit?usp=sharing)

Jag har gjort analysen ensam.

E-handel.se
---------------------
![Hemsida E-handel.se](./img/ehandel.png)

![Resultat E-handel.se](./img/result-ehandel.png)

* [http://www.ehandel.se/](http://www.ehandel.se/)
* [http://www.ehandel.se/event/](http://www.ehandel.se/event/)
* [http://www.ehandel.se/?compare=statistik](http://www.ehandel.se/?compare=statistik)

E-handel.se kan förbättras genom att utnyttja cachelagring i webbläsare, optimera bilder, ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten samt minifiera HTML, CSS och JavaScript.

Ernstform.se
---------------------
![Hemsida Ernstform](./img/ernst.png)

![Resultat Ernstform](./img/result-ernst.png)

* [http://ernstform.se/](http://ernstform.se)
* [http://ernstform.se/produkter/](http://ernstform.se/produkter/)
* [http://ernstform.se/katalog/](http://ernstform.se/katalog/)

Ernstform.se kan förbättras genom att optimera bilder, ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten, utnyttja cachelagring i webbläsare och minifiera HTML, CSS och JavaScript.


Chamois.se
---------------------
![Hemsida Chamois](./img/chamois.png)

![Resultat Chamois](./img/result-chamois.png)

* [http://www.chamois.se/](http://www.chamois.se/)
* [http://www.chamois.se/collections/](http://www.chamois.se/collections/)
* [http://www.chamois.se/accessories/](http://www.chamois.se/accessories/)


Chamois.se kan förbättras genom att aktivera komprimering, ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten, optimera bilder, minska svarstiden från servern, utnyttja cachelagring i webbläsare och minifiera CSS och JavaScript.

Sammanfattning
---------------------
Samtliga webbplatser jag analyserade hade ungefär samma problem. De behöver allihop optimera bilder, ta bort JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten, utnyttja cachelagring i webbläsare och minifiera CSS och JavaScript.

Rangordning
---------------------
1. Ernstform.se
2. E-handel.se
3. Chamois.se

Jag tycker att Ernstform laddar relativt snabbt med tanke på alla bilder och även e-handel laddar relativt snabbt bortsett från startsidan som är segladdad. Chamois däremot är väldigt seg överlag så den hamnar utan tvekan på sista plats.

Jag tycker att en webbplats bör ladda på omkring 2 sek men jag tycker även att accepterbar laddningstid beror lite på vad syftet med webbplatsen är. Exempelvis så har jag mer överseende med att en webbplats med mycket bilder och liknande laddar långsamt än vad jag har med andra wepplatser. Men samtliga av de webbplatser jag analyserat har mycket innahåll att ladda och jag upplever dem därför inte oacceptabelt långsamma. Chamois är dock i segaste laget.
