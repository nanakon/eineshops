<div class="telo"></div><section class="about"><br>
<h2 id="about_h2">EIN-e-shops</h2>
<div><br> EIN-e-shops je internetový e-shop založený ako východisková práca pre predmet Ročníkový projekt(1) a Ročníkový projekt(2) fakulty Matematiky, Fyziky a Informatiky
Univerzity Komenského v Bratisave. Jeho autorom je Martin Straka, študent druhého ročníka študijného odboru 9.2.9. Aplikovaná Informatika na hore uvedenej fakulte.
Projekt ako taký má ponúkať nielen demonštráciu funkčnosti framework-build riešenia internetovej aplikácie ale aj príjemný dizajn v súlade s predmetom Webovská Grafika
vyučovaným na tejto fakulte. Kompletnú dokumentáciu si môžete pozrieť <a href="<?php echo base_url();?>files/Specifikacia_rocnikoveho_projektu_EIN_e_shops_Martin_Straka.pdf" target="_blank" class="link">tu</a>.
</div>
<br><h2>Sitemap </h2><br>
<div>
<h3>Home:</h3>
<p>Defaultnou homepage je v prvej etape nastavená stránka s výpisom obsahu databázy produktov - tovar_page. Tlačidlo "home" v navigácii stránku ako aj logo stránky oba odkazujú na
túto stránku. Vo finálnej podobe by sa však na home stránke mala objaviť nejaká propagačná štruktúra stránky, prípadne highlighty nejakých akcií, či tipy na funkčnosť.</p>
<p>Táto stránka je dostupná už od prvej etapy</p>
<h3>O projekte:</h3> 
<p>Práve zobrazovaná stránka (about). Oficiálna dokumentačná stránka projektu. Sú tu zverejnené informácie o funkčnosti projektu, ako aj kompletná špecifikácia projektu, ktorá je
jeho povinnou súčasťou. V ďalších etapách tu budú pribúdať detaily o rozšíreniach projektu čí pridaných nových funkčnostiach, a takisto aj naplnenie časového plánu a body za jednotlivé 
etapy.</p><p>Táto stránka je dostupná už od prvej kontrolnej etapy.</p>
<h3>Ako nakupovať:</h3>
<p>Keďže EIN-e-shops nie je skutočný eshop a nedá sa na ňom naozaj nakupovať, na tejto stránke budú dostupné technické detaily príadne kusy kódu ktorý sa týka funkčnosti stránky ako obchodu. 
Nákup nebude možný, no vykonávať falošné operácie nakupovania budú existovať a na tejto stránke sa bude nachádzať návod ako na ich testovanie.
</p><p>Táto stránka pribudne v 2. alebo 3.kontrolnej etape.</p>
<h3>Registrácia:</h3>
<p>Registračná stránka bude obsahuje formulár pomocou ktorého je možné zaregistrovať nového používateľa. Formulár vyžaduje údaje ako každý štandardný e-shop, teda prihlasovacie meno,
heslo, email, meno, priezvisko, bydlisko - mesto, ulica, poštové smerovacie číslo, popisné číslo a číslo telefónu. Číslo telefónu nie je povinné, všetky ostatné údaje áno. Samozrejmosťou
sú kontroly nevhodných znakov, správnosti dĺžok (napr. meno kratšie ako 2 znaky, telefónne číslo 10 znakov ak je vyplnené), správnosti formátov (email etwas@etwas.etwas), XSSClear, StripTag či zhodné
zadanie hesla a konfirmačného hesla. </p><p>Táto stránka existuje od 2. kontrolnej etapy.</p>
</div>
<br><h2>Prihlasovanie užívateľa</h2>
<br><div>V prvej kontrolnej etape ešte nebolo možné registrovať nových užívateľov, avšak prihlasovanie / odhlasovanie sa na stránku už fungovalo. V druhej etape už však pribudla možnosť
registrácie. Pre prihlasovanie
je vytvorený malý formulár v navigačnej sekcii stránky. <p>Pri zadaní správnych údajov je používateľ prihlásený a namiesto prihlasovacieho formulára sa zobrazí
údaj o tom, kto je prihlásený a tlačidlo na jeho odhlásenie. Po prihlaseni je užívateľ presmerovaný na domovskú stránku. Verifikácia prihlásenia prebieha v modeli login_model a testuje zhodu username a výstupu enkrypcie MD5 zadaného hesla
s akýmkoľvek jedným riadkom databázy užívateľov. Pri úspechu je vytvorená session s údajmi užívateĺa podľa databázy a informáciou, že niekto je prihlásený. 
Pri zadaní nesprávnych údajov sa vypíše chybová hláška, pole s heslom sa vyčistí a v poli s užívateľským menom ostane
údaj z posledného pokusu o prihlásenie. Pri prepnutí sa na inú stránku hláška o neúspechu prihlásenia mizne. Ak sa užívateľ prihlási na jednej stránke automaticky zostáva prihlásený
aj na všetkých ostatných stránkach, to isté platí o odhlásení.</p><p> Pre účely testovania je vytvorený dummy užívateľ <span>guest</span> s heslom <span>"guest"</span> avšak je možné zaregistrovať si vlastného užívateľa.
Okrem zmeny login baru nebol prihlásením užívateľa v prvej etape ovplyvnený žiaden iný element stránky. V druhej etape je prihlásením sa možné pridávať komentáre k jednotlivým tovarom a mazať svoje vlastné komentáre.</p>
</div>
<br><h2>Tovar</h2>
<br><div>Pri načítaní domovskej stránky sa zobrazí výpis všetkého tovaru v databáze realizovaný formou mriežky. Na každý z vypísaných tovarov je možné kliknúť a prejsť tak na jeho detailný pohľad.
<h3>Detail:</h3><p>Pri detailnom zobrazení tovaru sa objaví ikona daného tovaru s krátkym popisom vedľa a uvedením ceny s DPH a bez DPH. Pod nimi sa nachádza mini navigácia ktorá
umožňuje prechádzať medzi rôznymi stránkami detailného náhľadu <span>Popis, Detaily, Foto, Hodnotenia</span>.</p>
<h3>Popis:</h3><p>Táto stránka zobrazí kompletný popis daného notebooku, ktorý je uložený ako text v databáze.</p>
<h3>Detaily:</h3><p>Tu sa zobrazuje jednoduchá tabuľka s údajmi o notebooku z databázy</p>
<h3>Foto:</h3><p>Na tejto stránke sa vykreslia všetky fotografie k danému notebooku v zmenšenej veľkosti. Pre zobrazenie obrázka v maximálnej veľkosti naň stačí kliknúť.</p>
<h3>Hodnotenia:</h3><p>Stránka s užívateľskými recenziami. po prihlásení je možné pridávať svoje vlastné komentáre. Maximálna dĺžka komentára je 900znakov. Svoj vlastný komentár je takisto 
možné zmazať kliknutím na tlačidlo odstrániť ktoré sa zobrazí len pri tých komentároch, ktoré patria práve prihlásenému užívateľovi. Už existujúce komentare sú zobrazované od najnovších na vrchu
k najstarším na spodku stránky. Nový komentár je vždy pridány úplne navrch.</p>
<h3>Filtrácia tovaru:</h3><p>Tovar je tiež možné filtrovať podľa vybraných kritérii a to procesor, grafická karta, RAM, disk, veľkosť a výrobca. Ku každej z týchto kategórií spadá niekoľko
 podkategórií, napríklad procesory sú rozdelené podľa značky na Intel a AMD. Intel sú ďalej rozdelené na Corei3, Corei5, Corei7 a Pentium. Takisto disky a ram sú delené podľa veľkosti.
 Filtrácia je ralizovaná ako aside v ľavej časti stránky</p>
</div>
<br><h2>Nákupný košík</h2>
<br><div>V tretej fáze tohto projektu pribudol nákupný košík. Ide o tabuľkový výpis tovaru, ktorý by si potencionálny zákazník chcel kúpiť a teda vložil do košíka. Košík realizuje FW
trieda codeignitera. Táto trieda košík realizuje ako temporary_table v samostatnej tabulke databázy. Aj neprihlásený užívateľ si môže dávať tovar do košíka. Ak si do košíka naraz vložia 
tovar dvaja neprihlásený užívateľia, vytvorí košík dva riadky v tabuľke. Viacerí neevidovaní užívateľia si teda môžu pridávať tovar bez toho, aby sa obsah košíkov miešal. 
<h3>Do košíka</h3><p>Tlačidlo do košíka sa zobrazuje pri každom detailnom náhlade tovaru. Vedľa tohto tlačídla sa nachádza aj input box s možnosťou zadať, koľko kusov tovaru si 
kupujúci praje dať do košíka</p>
<h3>Pohľad do košíka</h3><p>V aside sekcii vľavo dole je každému užívateľovi prístupné malý element nákupný košík, ktorý zobrazuje počet položiek v košíku a celkovú hodnotu týchto 
položiek. Kliknutím na tento element je užívateľ presmerovaný na pohľad do košíka, kde sú vo forme tabuľky vypísané všetky údaje o položkách v košiku aj s cenami a celkovým súčtom 
"k zaplateniu". Je tu implementovaná aj možnosť vyprázdniť košík, čo je realizované tlačidlom vyprázdniť. Pri každom tovare je v input boxe uvedený počet kusov daného 
tovaru práve v košíku. Tento počet je možné zmeniť prepísaním hodnoty a kliknutím na tlačidlo "Upraviť košík". Ak je zadaná nula, daný tovar je z košíka odobratý.</p>
<br></div>
<br><h2>Administrácia užívateľov</h2>
<br><div><h3>Admin corner</h3><p>Táto možnosť taktiež pribudla v tretej etape a je prístupná iba užívateľom, ktorí majú status admina. Podobne ako nákupný košík, aj "admin corner" 
je realizovaný ako element aside v lavej dolnej časti stránky, ktorý je však viditeľný (a vôbec generovaný) len ak je prihlásený admin. V tomto elemente sa vypisuje správa o tom, 
koľko užívateľov je momentálne na stránke registrovaných.</p>
<h3>Admin user view</h3><p>Kliknutím na element admin prechádza do admin view užívateľov, kde sú v tabuľke vypísané informácie o každom registrovanom 
užívateľovi. V každom riadku sú generované dve tlačidlá, "Odstrániť" a "Upraviť". Pomocou tlačidla odstrániť je možné vymazať daného užívateľa, teda zmazať jeho účet. Tlačidlo "Upraviť" 
so sebou nesie aj checkbox, ktorý je na default zaškrtnutý, ak užívateľ v danom riadku je admin. Pri zmene hodnoty checkboxu a stisnutí tlačidla "Upravit" sa danému užívateľovi status 
admina buď pridá, alebo odoberie</p>
</div>
<br><br>
</section>