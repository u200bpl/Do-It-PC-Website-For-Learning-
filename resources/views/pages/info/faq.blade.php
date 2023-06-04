@extends('layouts.base')
@section('content')

<section class="faq">
    <div class="container">
        <div class="faq-container">
            <h1>Veelgestelde vragen</h1>
            <div class="category">
                <div onclick="section1()" id="sec1-text"><p>Afterservice <i class="fa-solid fa-gear"></i></p></div>
                <div onclick="section2()" id="sec2-text"><p>Algemeen <i class="fa-solid fa-star"></i></p></div>
                <div onclick="section3()" id="sec3-text"><p>Bestelstatussen <i class="fa-regular fa-clock"></i></p></div>
                <div onclick="section4()" id="sec4-text"><p>Betalen <i class="fa-regular fa-clock"></i></p></div>
                <div onclick="section5()" id="sec5-text"><p>Bezorging & Levering <i class="fa-solid fa-truck"></i></p></div>
                <div onclick="section6()" id="sec6-text"><p>Game PC kopen <i class="fa-solid fa-display"></i></p></div>
                <div onclick="section7()" id="sec7-text"><p>Game PC tool <i class="fa-solid fa-wrench"></i></p></div>
                <div onclick="section8()" id="sec8-text"><p>Garantie <i class="fa-solid fa-check"></i></p></div>
                <div onclick="section9()" id="sec9-text"><p>Ruilen & retourneren <i class="fa-solid fa-check"></i></p></div>
            </div>

            <section class="sec1" id="sec1">
                <div class="question">
                    <button class="dropdown-btn-two">Waar kan ik de drivers vinden? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Die staan al op je PC, in Nvidia GeForce Experience of AMD Adrenalin kun je je drivers eenvoudig updaten (geadviseerd).</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Hoe verander ik de kleuren van mijn RGB? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Bij goedkopere modellen meestal door op de reset/LED knop te drukken op de kast en bij meer high-end modellen via de software van de fabrikant van het moederbord of videokaart. Wanneer het laatste het geval is, staat deze software al geïnstalleerd op je PC.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Waarom werken niet alle ports van mijn PC? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Poorten zoals die van de monitor kunnen uitgeschakeld zijn. Bijvoorbeeld wanneer je een PC hebt met een videokaart waarmee de poorten van de geïntegreerde gpu op het moederbord worden uitgeschakeld.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Waarom werkt mijn beeldscherm niet? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Het kan zijn dat je de verkeerde poort op de PC gebruikt, raadpleeg de handleiding die bijgeleverd is bij de PC.</p>
                    </div>
                </div>
            </section>

            <section class="sec2" id="sec2">
                <div class="question">
                    <button class="dropdown-btn-two">Hebben jullie ook een showroom? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Nee. Wij hebben momenteel geen showroom.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Kan ik mijn order na het plaatsen nog aanpassen? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Dat is mogelijk, neem dan binnen 24 uur contact met ons op via e-mail. Vergeet je bestelnummer niet te vermelden zodat we snel je aanpassing kunnen doorvoeren (voordat je bestelling al is verstuurd).</p>
                    </div>
                </div>
                
                <div class="question">
                    <button class="dropdown-btn-two">Hoe kan ik contact opnemen? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Contact opnemen kun je via verschillende kanalen: E-mail, telefoon, whatsapp, Discord, Instagram, Facebook, Twitter, you name it!</p>
                    </div>
                </div>
                
                <div class="question">
                    <button class="dropdown-btn-two">Hoe snel leveren jullie? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Wij proberen om jouw pc binnen 2 weken te verzenden! Dit is echter niet altijd mogelijk. Als het langer duurt dan 2 weken word er contact met jouw opgenomen.</p>
                    </div>
                </div>
                
                <div class="question">
                    <button class="dropdown-btn-two">Hoe kan het dat de prijzen van de artikelen zijn gewijzigd? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>De prijzen van computerhardware veranderen dagelijks. Wij proberen onze prijzen zolang mogelijk gelijk te houden, maar op een gegeven moment zullen wij ook onze prijs moeten aanpassen.</p>
                    </div>
                </div>
                
                <div class="question">
                    <button class="dropdown-btn-two">Hoe kan het zijn dat de levertijd van een product is gewijzigd? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Als de levertijd is gewijzigd van een product, dan kan dit zijn omdat we te horen hebben gekregen van een leverancier dat een bepaald onderdeel niet op tijd geleverd gaat worden of dat het niet bekend is wanneer deze geleverd gaat worden. Wij passen dan de levertijd aan naar wat wij denken wat waarschijnlijk is.</p>
                    </div>
                </div>
                
                <div class="question">
                    <button class="dropdown-btn-two">Ik heb een fout gevonden op de website, waar kan i kdit melden? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Fijn dat je ons wilt helpen met het verbeteren van onze website! Stuur het in een mailtje naar ons, screenshots zijn ontzettend handig trouwens</p>
                    </div>
                </div>
                
                <div class="question">
                    <button class="dropdown-btn-two">Ik heb een vraag, hoe kan ik deze indienen? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Vragen kun je aan ons stellen via meerdere kanalen: E-mail en de Live Chat.</p>
                    </div>
                </div>
                
                <div class="question">
                    <button class="dropdown-btn-two">Ik heb een suggestie, hoe kan ik deze indienen? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Fijn dat je ons wilt helpen met het verbeteren! Stuur het in een mailtje naar ons!</p>
                    </div>
                </div>
                
                <div class="question">
                    <button class="dropdown-btn-two">Ik heb tijdens het bestellen geen aacount aangemaakt, kan dit achteraf nog steeds? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Je kunt altijd nog een account aanmaken, zodra jij jouw account aanmaakt met de zelfde e-mail als waar jij jouw bestelling mee hebt geplaatst worden de vorige bestellingen automatisch aan jouw account toegevoegd!</p>
                    </div>
                </div>
                
                <div class="question">
                    <button class="dropdown-btn-two">Kan ik mijn orderhistorie zien? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Natuurlijk kun je je orderhistorie zien, dit kun je simpelweg in je account zien. Let wel op dat je zorgt dat je je bestellingen ook op dit account doet.</p>
                    </div>
                </div>
                
                <div class="question">
                    <button class="dropdown-btn-two">Kunnen jullie mij sponsoren? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Wij krijgen deze vraag meerdere keren per dag en iemand sponsoren doen we niet zomaar. Daar moet natuurlijk wel iets tegenoverstaan. Als je denk dat jij in aanmerking komt om een partner/affiliate van ons te worden, dan stuur een mailtje naar ons marketing team: marketing@doitpc.nl</p>
                    </div>
                </div>
            </section>

            <section class="sec3" id="sec3">
                <div class="question">
                    <button class="dropdown-btn-two">Wat betekend de status "Afgerond"? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Deze status betekent dat je bestelling is verzonden en je ontvangt dan een track & trace in je e-mail.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Wat betekend de bestelling "Klaar voor verzending"? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Deze status betekent dat je bestelling wordt ingepakt en verzonden gaat worden.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Wat betekend de status "Word geïnstalleerd"? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Deze status betekent dat je PC wordt geïnstalleerd, geupdate en getest.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Wat betekend de status "Word gebouwd"? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Deze status betekent dat je PC door onze assembleurs wordt gebouwd.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Wat betekend de status "Word verzameld"? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Deze status betekent dat je de onderdelen voor je bestelling worden verzameld, het kan zijn dat deze nog niet helemaal compleet is en nog wacht op onderdelen.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Wat betekend de status "In behandeling"? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Deze status betekent dat je bestelling en betaling succesvol was en wij je bestelling in behandeling nemen.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Welke status updates kan ik verwachten? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>De statussen die een bestelling van een PC doorloopt zijn: “in behandeling”, “wordt verzameld”, “wordt gebouwd”, “wordt geïnstalleerd”, “klaar voor verzending” en “afgerond”.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Hoe word ik op de hoogte gehouden van de status van mijn bestelling? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Je krijgt van ons e-mails met een status update van je bestelling zodra er iets veranderd. Ook kan jij jouw status volgen via jouw account!</p>
                    </div>
                </div>
            </section>

            <section class="sec4" id="sec4">
                <div class="question">
                    <button class="dropdown-btn-two">Hoe kan ik zien of mijn bestelling is gelukt? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Zodra je bestelling en betaling gelukt zijn, zal je bestelling de status “in behandeling” krijgen, dit krijg je van ons bevestigd in je e-mail.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Mijn bestelling is mislukt, hoe kan ik alsnog betalen? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Je krijgt automatisch een e-mail met een betaallink vanuit de betaalprovider waarmee je alsnog kunt betalen.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Zijn er extra kosten verbonden aan bepaalde betaalmogelijkheden? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>iDeal, overboeking en Bancontact zijn gratis, de andere betaalopties brengen transactiekosten met zich mee.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Welke betaalmogelijkheden zijn er? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Bij ons kun je betalen via iDeal, PayPal, Credit Card, Overboeking, Bancontact, In3 en SprayPay.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Er staat "gaming" of "game" op mijn factuur, kan ik dit nog wel op de zaak boeken? Of heb ik een aangepaste factuur nodig? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Nee, dit geeft geen problemen. Een ‘game pc’ blijft nog altijd een PC en een ‘gaming toetsenbord’ blijft nog altijd een toetsenbord, deze kunnen dus ook simpelweg voor zakelijk gebruik dienen. De fiscus zal dus geen probleem maken van deze benaming.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Ik wil een zakelijke bestelling doen vanuit het buitenland, kan dit zonder BTW? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Ja, dit gaat zelfs automatisch op onze afreken-pagina. Zorg ervoor dat je je bedrijfsnaam precies zo invult als deze is registreerd samen met het BTW-nummer hiervan. De BTW wordt dan van de bestelling afgehaald.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Kan ik een factuur krijgen van de bestelling? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Je krijgt altijd automatisch de factuur in je e-mail na succesvolle betaling.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Zijn de prijzen inclusief of exlusief BTW? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Onze prijzen zijn altijd inclusief BTW.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Kan ik bij jullie op locatie ook contant betalen? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Nee, dit is helaas niet mogelijk.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Krijg ik een BKR-registratie bij gespreid betalen? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Ja, je krijgt ten alle tijden een BKR-registratie. Echter wordt deze pas negatief wanneer je meer dan twee maanden achterloopt in je betalingen.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Hoe oud moet ik zijn om gespreid te kunnen betalen? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>23 jaar of ouder.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">In hoeveel termijnen betreft het gespreid betalen? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Dat kan in 12, 18, 24 of 36 maanden via SprayPay, of in 2 maanden via In3.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Kan ik bij gespreid betalen ook eerder afbetalen? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Eerder of sneller aflossen is altijd mogelijk. Hiermee verlaag je het maandbedrag en het rente bedrag maar niet de looptijd.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Waarom kan ik niet kiezen voor gespreid betalen? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Gespreid betalen loopt via SprayPay of In3, deze betaalproviders bieden hun services alleen aan in Nederland, dus wanneer je niet in Nederland woonachtig bent, dan kun je hier geen gebruik van maken.</p>
                    </div>
                </div>
            </section>

            <section class="sec5" id="sec5">
                <div class="question">
                    <button class="dropdown-btn-two">Wat is de levertijd naar België? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Voor zendingen naar België maken we gebruik van DHL. Vanuit Do-It PC streven wij er naar om jouw computer binnen 2 weken op te sturen! Zodra jouw pc is opgehaald door DHL is het afhankelijk van DHL wanneer jouw pc word bezorgd.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Hoe moet ik mijn product inpakken als ik deze wil retourneren? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Zoals je hem hebt ontvangen, wij adviseren daarom altijd om alle verpakkingen te bewaren. Mocht je toch je verpakking hebben weggegooid, zorg dan dat het zo is ingepakt dat het niet stuk kan gaan tijdens transport.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Ik heb een retourlabel van jullie ontvangen, maar ik heb geen printer. Wat nu? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Vraag vrienden, kennissen, de buren of print bij de bibliotheek. Onze tip: koop een printer.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Ik zie dat de ingevoerde adresgegevens niet kloppen, wat nu? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Neem dan contact met ons op via info@doitpc.nl vanuit het e-mail adres waarmee je besteld hebt en geef ons door naar welk adres het wel moet.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Kan ik mijn bezorgdatum zelf kiezen? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Als je bestelling via DHL is verzonden, dan is dat na ontvangst van de track & trace code mogelijk via de website van DHL.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Mijn bestelling is incompleet, wat nu? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Laat het ons weten via een mailtje naar info@doitpc.nl.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Ik heb een mail gekregen dat mijn bestelling is verzonden, maar heb nog geen Track & trace, wat nu? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Check je spam/junk folder, waarschijnlijk zit hij daarin. Mocht dat niet zo zijn, neem dan even contact met ons op via info@doitpc.nl</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Wat zijn de verzendkosten? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Bestellingen tot 250 EUR kosten €6,95 naar Nederland en €8,95 naar België. Bestellingen van 250 EUR of hoger worden gratis verzonden naar zowel Nederland als België, Duitsland en Luxemburg. Verzending naar andere Europese landen kosten €20,-.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Wat als mijn bestelling kwijt raakt tijdens de verzending? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Meld dit dan via info@doitpc.nl en stuur ons de bevestiging van de bezorgdienst waarin gemeld wordt dat het pakket kwijt is. Wij gaan er dan voor zorgen dat jij een nieuw product van ons ontvangt.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Wat als mijn bestelling kapot gaat tijdens de verzending? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Maak dan direct foto’s van de schade en de verpakking en stuur deze binnen 3 dagen naar info@doitpc.nl! Je pakket is verzekerd, dus geen zorgen je krijgt je bestelling 100% in orde in huis.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Kan ik de status van mijn bestelling zien? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Ja, je ontvangt altijd een track & trace wanneer je bestelling wordt verzonden. Vergeet niet je spam folder te checken, daar kan die wel eens in terecht komen.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Kan ik zelf kiezen hoelaat mijn pakket word afgeleverd? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Wanneer je pakket wordt verzonden, dan kun je zodra je je track & trace hebt ontvangen, via de website van DHL het bezorgmoment aanpassen of kiezen om het pakket te laten afleveren bij de buren of bij een DHL service punt bij jou in de buurt. </p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Kan ik mijn pakket ook ophalen? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Ja, je kunt het komen ophalen bij een DHL service punt.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Leveren jullie ook buiten Nederland? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Ja, wij leveren in heel Europa!</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Wat betekend levertijd onbekend? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Deze levertijd betekent dat we niet weten wanneer een product gaat binnen komen. Dit zou in theorie meerdere maanden kunnen duren en doorgaans langer dan 1 maand.</p>
                    </div>
                </div>
            </section>

            <section class="sec6" id="sec6">
                <div class="question">
                    <button class="dropdown-btn-two">Als ik een extra schijf, extra RAM of een Wi-Fi kaart kies, bouwen jullie deze dan in? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Jazeker, al onze PC’s worden kant en klaar geleverd, dus ook uitbreidingen en upgrades worden gemonteerd en geïnstalleerd.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Worden alle benodigde kabels meegeleverd? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Ja, alle kabels zoals de stroomkabel, SATA kabels, etc. worden meegeleverd. Net zoals reserve onderdelen en alle schroefjes die nog over zijn!</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Hebben de PCs ook WiFi? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Niet alle PC’s hebben standaard WiFi, dit staat aangeven op de product pagina van de PC of deze dit wel of niet heeft. Indien deze dit niet heeft, kun je de optie ‘uitbreiden’ kiezen om een wifi-module toe te voegen, die wij vervolgens monteren en installeren.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Wordt de PC ook door jullie getest? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Ja, elke PC die wij uitleveren krijgt een stresstest waarbij alle onderdelen van de PC goed getest worden zodat we zeker zijn dat we een goed werkende PC naar je opsturen.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Kunnen jullie mijn systeem ook overklokken? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Nee, overclocking levert tegenwoordig niet meer genoeg op in verhouding tot het verhoogde stroomverbruik en het risico op instabiliteit dat het met zich mee kan brengen. Daarom bieden wij dit niet meer aan.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Ik heb via de optie "uitbreiden" onderdelen aan mijn pc toegevoegd. Worden deze ook geïnstalleerd/ingebouwd? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Ja, alles wat je hebt geselecteerd wordt ingebouwd/geïnstalleerd.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Ik heb software bij mijn PC toegevoegd, word deze ook geïnstalleerd? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Software wordt ook door ons geïnstalleerd. Alleen niet wanneer een privé account nodig is om de software mee te activeren. In dat geval zetten wij de activatie-code op het bureaublad waarmee je met je eigen privé account de software kunt activeren en koppelen aan je account.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Waarom kan ik mijn PC niet zelf samenstellen? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Dit zorgt ervoor dat wij de laagste prijs kunnen aanbieden! Ook onze monteurs bouwen sneller de systemen die ze gewend zijn om te bouwen, wat ook weer kosten bespaart!</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Moet ik nog drivers installeren op de PC? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Nee, wij installeren die al voor jou!</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Kan ik mijn PC later nog upgraden? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Dat mag, je kan het zelf doen maar je mag ook een mail sturen naar info@doitpc.nl om een afspraak te maken!</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Kan ik onderdelen wisselen bij mijn PC? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Bepaalde onderdelen kun je upgraden, zoals geheugen (RAM) of toevoegen, zoals een harde-shijf. Verder kun je helaas niets aanpassen, want zo houden wij onze prijzen zo laag!</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Kan ik de PC direct gebruiken als ik hem binnen krijg? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Natuurlijk! Al onze PC’s worden plug & play geleverd. Stekker erin en gaan met die banaan!</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">kan met een Game PC ook (huis)werk gedaan worden? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Jazeker, een Game PC is simpelweg een normale PC, maar dan veel krachtiger. Dus taken die gedaan moeten worden waarbij bijvoorbeeld Microsof Office nodig is, kan gewoon gedaan worden op een Game PC. Nog sneller zelfs!</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Staat er Windows op de PC? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Yes! Op al onze PC’s wordt Windows geïnstalleerd en geactiveerd.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Wordt de PC voor mij in elkaar gezet? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Jazeker, wij zetten elke PC in elkaar, installeren deze en zorgen voor alle updates!</p>
                    </div>
                </div>
            </section>

            <section class="sec7" id="sec7">
                <div class="question">
                    <button class="dropdown-btn-two">Hoe kan ik de FPS zien van een spel die niet in jullie tool staat? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Zoek op YouTube de game naam + processor + videokaart en je krijgt gameplay video’s waarin je precies ziet hoe veel FPS je haalt met die configuratie in dat spel.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Wat is RGB? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Dit is een lichteffect dat op dit moment verwerkt zit in de meeste PC onderdelen voor een fraai effect. RGB staat voor Rood, Groen en Blauw. Deze kleuren kunnen samen alle kleuren van de regenboog maken en dat leidt tot fraaie effecten!</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Hoeveel FPS wordt er aanbevolen? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Minstens 60 voor een goede game ervaring. Wanneer je een monitor hebt die een Hertz (Hz) heeft die hoger ligt (75, 120, 144, 165 of meer) dan adviseren wij een FPS aan die overeen komt met het aantal Hz van je monitor. Hoger is natuurlijk altijd beter!</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Waarom word performance uitgedrukt in FPS? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Omdat dit de beste referentie is voor hoe krachtig een PC is voor een specifiek spel.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Wat is FPS? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>FPS is frames per seconden oftewel beelden per seconde. Hoe meer, hoe beter. Want hoe meer beelden je PC per seconde kan tonen, hoe soepeler het beeld uitziet.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Op welke settings is de FPS gebaseerd? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Bij al onze modellen is dit gebaseerd op standaart instellingen, behalve de modellen met integrated graphics, hierbij wordt uitgegaan van lage settings.</p>
                    </div>
                </div>
            </section>

            <section class="sec8" id="sec8">
                <div class="question">
                    <button class="dropdown-btn-two">Hoe kan ik aanspraak doen op mijn garantie? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Mail je probleem naar ons en wij zorgen ervoor dat je probleem wordt opgelost.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Hoelang duurt mijn reparatie? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Dit ligt aan de ernst van het probleem, bij simpele problemen die gemakkelijk op te lossen zijn kan je 3 tot 5 werkdagen verwachten. (2-14 werkdagen bij drukte). Wanneer het een gecompliceerd probleem betreft kan het langer duren (10+ werkdagen) en wanneer het defecte onderdeel een onderdeel is wat wij niet langer in ons assortiment hebben of bij een defect wat wij niet kunnen/mogen repareren(GPU, CPU, Mobo, Waterkoeler) en je hebt standaard garantie, dan ligt het aan de verwerkingstijd van de fabrikant. Dit kan een aantal weken tot 28 dagen duren.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Mijn product is na de garantieperiode kapo gegaan, wat nu? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Dan kun je dit alsnog melden bij ons via e-mail en dan kijken wij wat er mogelijk is.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Wat valt er niet onder de garantie? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Alles wat bij ons is gekocht, valt onder onze garantie. Je garantie komt te vervallen wanneer er schade aan wordt toe gericht nadat het product bij jou is afgeleverd. Denk bijvoorbeeld aan schade die je zelf toe richt, maar ook door externe factoren zoals brand, storm, waterschade, etc. Ook wanneer je het product gebruikt voor doeleinden waar deze niet voor bedoeld is. Bij videokaarten en voedingen vervalt de garantie wanneer het product wordt gebruikt voor doeleinden waar dit primair niet voor bedoeld is, zoals gpu mining. Coil Whine valt ook niet onder de garantie. Voor meer informatie, check onze algemene voorwaarden.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Behoud ik garantie op mijn PC als ik onderdelen heb vervangen? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Ja, je behoudt de garantie op de PC minus de onderdelen die je zelf hebt geplaatst en niet bij ons zijn gekocht, mits je niets kapot hebt gemaakt.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Behoud ik garantie op mijn PC als ik de kast heb opengemaakt? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Ja, zolang je maar niets kapot maakt. We gaan ervanuit dat wanneer je de kast gaat open maken dat je verstand van zaken hebt. We gaan ervanuit dat je weet wat je doet als je je kast openmaakt.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Wat kan ik doen als mijn PC kapot is? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Meld dit direct bij onze klantenservice via e-mail. Zij helpen je het probleem op afstand op te lossen, indien dat niet lukt krijg je verdere informatie over de vervolgstappen. Ons doel is dat je weer zo snel mogelijk aan de slag kunt met je PC.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Wat houdt premium garantie in? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Premium garantie houdt in dat wanneer je problemen hebt met je PC en wij je PC moeten gaan repareren, wij de PC gratis bij je laten ophalen. Indien een onderdeel vervangen moet worden, doen wij dit direct en hoef je dus niet te wachten op een RMA proces waarbij het onderdeel terug wordt gestuurd naar de fabrikant en door hen wordt gerepareerd of vervangen (dit kan vaak meer dan een maand duren). Mits wij het product niet meer op voorraad hebben.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Hoe lang heb ik garantie op mijn product? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Standaard heb je 3 jaar garantie op alle PC’s die wij aanbieden. Hierbij kun je nog premium garantie toevoegen tegen betaling voor 1, 2 of 3 jaar. Op alle andere artikelen zit minimaal 2 jaar garantie, tenzij anders aangegeven.</p>
                    </div>
                </div>
            </section>

            <section class="sec9" id="sec9">
                <div class="question">
                    <button class="dropdown-btn-two">Binnen hoeveel dagen kan ik mijn product retourneren? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>30 dagen na levering.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Mag ik een gebruikt product retourneren? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Ja, zolang het product en de verpakking maar in orginele staat verkeert.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Welke producten kan ik niet retourneren? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Software met een licentiecode.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Kan ik mijn order annuleren als ik deze nog niet ontvangen heb? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Ja, stuur binnen 24 uur na betaling een mailtje naar info@doitpc.nl met je annulering vanuit het e-mail adres waarmee je hebt besteld. Je verzoek kan pas voltooid worden nadat Do-It PC het retourneerde product heeft ontvangen.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Hoe kan ik de producten retourneren? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Wij regelen dat je een label van ons ontvangt waarmee je het pakket kunt versturen, de kosten hiervan bedragen circa €6,99 per pakket inclusief verzekering voor zendingen vanuit Nederland en €13,25 vanuit België. Je kunt er ook voor kiezen om zelf te verzenden zonder een label van ons, in dat geval raadpleeg de website van je vervoerder voor de exacte tarieven.</p>

                        <section>
                            <h3>Bestelling veilig terugsturen</h3>
                            <p>Let op dat je de pc goed verpakt! Wij adviseren altijd de verpakking van je bestelling bij je te houden. Als je deze hebt bewaard, adviseren wij het schuim dat in de pc zat terug te stoppen. Dit zorgt ervoor dat de videokaart niet kan bewegen. Het is namelijk belangrijk dat de kaart niet afbreekt in het moederbord. Heb je dit schuim niet meer, dan kun je iets anders onder de videokaart stoppen om het te beschermen, denk aan: bal van krantenpapier, handdoek etc. <span>Stuur A.U.B. geen kabels of andere accessoires mee, aangezien deze kwijt kunnen raken.</span></p>

                            <p><span>Mocht er een wachtwoord op de pc staan, vragen wij je deze eraf te halen of met ons te delen voor een sneller verloop van de reparatie</span></p>

                            <p>Verder is het belangrijk dat je de pc in de originele doos met het piepschuim doet, deze bied namelijk de optimale bescherming voor de pc. Het is van belang dat er een dubbele doos (zoals hij ook is aangekomen bij jou) omheen zit, zodat de kans op schade beperkt blijft en schade die eventueel ontstaat verzekerd wordt. Zonder de 2e doos wordt de schadeclaim namelijk automatisch afgekeurd.</p>

                            <p>Heb je geen originele verpakking meer? Gebruik dan 2 andere dozen (bijvoorbeeld van de supermarkt). Gebruik één kleinere/smalle doos waar de pc net in past en vul de speling op met handdoeken/dekens. Doe daar dan een tweede doos omheen die eventueel schade opvangt. Vul ook deze doos weer met voldoende opvulmateriaal. LET OP: Alle kussens, dekens, handdoeken etc. die worden meegestuurd zullen wij niet bewaren, maar weggooien.</p>

                            <p><span>Mocht er schade ontstaan tijdens het transport als gevolg van een onjuiste verpakkingsmethode, behouden wij ons recht deze schade in rekening te brengen en of het geleverde product niet te accepteren voor garantie/reparaties.</span></p>
                        </section>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Hoelang duurt het voordat ik mijn bestelling terug krijg? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Binnen 14 dagen na ontvangst van je retour. Retouren en/of terugbetalingen worden altijd gedaan via de betaalmethoden waar de oorspronkelijke order mee is betaald.</p>
                    </div>
                </div>

                <div class="question">
                    <button class="dropdown-btn-two">Ik ben niet tevreden over mijn aankoop, wat nu? <i class="fa-solid fa-plus"></i></button>
                    <div class="dropdown-container">
                        <p>Mail dan naar info@doitpc.nl voor een oplossing of om je product als retour aan te melden.</p>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

@endsection

<script>
window.onload = section1;

function section1() {
    var a = document.getElementById("sec1");
    var at = document.getElementById("sec1-text");

    var b = document.getElementById("sec2");
    var bt = document.getElementById("sec2-text");

    var c = document.getElementById("sec3");
    var ct = document.getElementById("sec3-text");

    var d = document.getElementById("sec4");
    var dt = document.getElementById("sec4-text");

    var e = document.getElementById("sec5");
    var et = document.getElementById("sec5-text");

    var f = document.getElementById("sec6");
    var ft = document.getElementById("sec6-text");

    var g = document.getElementById("sec7");
    var gt = document.getElementById("sec7-text");

    var h = document.getElementById("sec8");
    var ht = document.getElementById("sec8-text");

    var i = document.getElementById("sec9");
    var it = document.getElementById("sec9-text");

    a.style.display = "flex";
    at.style.color = "var(--primary)";
    at.style.border = "1px solid var(--primary)";

    b.style.display = "none";
    bt.style.color = "var(--black)";
    bt.style.border = "1px solid var(--black)";

    c.style.display = "none";
    ct.style.color = "var(--black)";
    ct.style.border = "1px solid var(--black)";

    d.style.display = "none";
    dt.style.color = "var(--black)";
    dt.style.border = "1px solid var(--black)";

    e.style.display = "none";
    et.style.color = "var(--black)";
    et.style.border = "1px solid var(--black)";

    f.style.display = "none";
    ft.style.color = "var(--black)";
    ft.style.border = "1px solid var(--black)";

    g.style.display = "none";
    gt.style.color = "var(--black)";
    gt.style.border = "1px solid var(--black)";

    h.style.display = "none";
    ht.style.color = "var(--black)";
    ht.style.border = "1px solid var(--black)";

    i.style.display = "none";
    it.style.color = "var(--black)";
    it.style.border = "1px solid var(--black)";
}

function section2() {
    var a = document.getElementById("sec1");
    var at = document.getElementById("sec1-text");

    var b = document.getElementById("sec2");
    var bt = document.getElementById("sec2-text");

    var c = document.getElementById("sec3");
    var ct = document.getElementById("sec3-text");

    var d = document.getElementById("sec4");
    var dt = document.getElementById("sec4-text");

    var e = document.getElementById("sec5");
    var et = document.getElementById("sec5-text");

    var f = document.getElementById("sec6");
    var ft = document.getElementById("sec6-text");

    var g = document.getElementById("sec7");
    var gt = document.getElementById("sec7-text");

    var h = document.getElementById("sec8");
    var ht = document.getElementById("sec8-text");

    var i = document.getElementById("sec9");
    var it = document.getElementById("sec9-text");

    a.style.display = "none";
    at.style.color = "var(--black)";
    at.style.border = "1px solid var(--black)";

    b.style.display = "flex";
    bt.style.color = "var(--primary)";
    bt.style.border = "1px solid var(--primary)";

    c.style.display = "none";
    ct.style.color = "var(--black)";
    ct.style.border = "1px solid var(--black)";

    d.style.display = "none";
    dt.style.color = "var(--black)";
    dt.style.border = "1px solid var(--black)";

    e.style.display = "none";
    et.style.color = "var(--black)";
    et.style.border = "1px solid var(--black)";
    f.style.display = "none";
    ft.style.color = "var(--black)";
    ft.style.border = "1px solid var(--black)";

    g.style.display = "none";
    gt.style.color = "var(--black)";
    gt.style.border = "1px solid var(--black)";

    h.style.display = "none";
    ht.style.color = "var(--black)";
    ht.style.border = "1px solid var(--black)";

    i.style.display = "none";
    it.style.color = "var(--black)";
    it.style.border = "1px solid var(--black)";
}

function section3() {
    var a = document.getElementById("sec1");
    var at = document.getElementById("sec1-text");

    var b = document.getElementById("sec2");
    var bt = document.getElementById("sec2-text");

    var c = document.getElementById("sec3");
    var ct = document.getElementById("sec3-text");

    var d = document.getElementById("sec4");
    var dt = document.getElementById("sec4-text");

    var e = document.getElementById("sec5");
    var et = document.getElementById("sec5-text");

    var f = document.getElementById("sec6");
    var ft = document.getElementById("sec6-text");

    var g = document.getElementById("sec7");
    var gt = document.getElementById("sec7-text");

    var h = document.getElementById("sec8");
    var ht = document.getElementById("sec8-text");

    var i = document.getElementById("sec9");
    var it = document.getElementById("sec9-text");

    a.style.display = "none";
    at.style.color = "var(--black)";
    at.style.border = "1px solid var(--black)";

    b.style.display = "none";
    bt.style.color = "var(--black)";
    bt.style.border = "1px solid var(--black)";

    c.style.display = "flex";
    ct.style.color = "var(--primary)";
    ct.style.border = "1px solid var(--primary)";

    d.style.display = "none";
    dt.style.color = "var(--black)";
    dt.style.border = "1px solid var(--black)";

    e.style.display = "none";
    et.style.color = "var(--black)";
    et.style.border = "1px solid var(--black)";

    f.style.display = "none";
    ft.style.color = "var(--black)";
    ft.style.border = "1px solid var(--black)";

    g.style.display = "none";
    gt.style.color = "var(--black)";
    gt.style.border = "1px solid var(--black)";

    h.style.display = "none";
    ht.style.color = "var(--black)";
    ht.style.border = "1px solid var(--black)";

    i.style.display = "none";
    it.style.color = "var(--black)";
    it.style.border = "1px solid var(--black)";
}

function section4() {
    var a = document.getElementById("sec1");
    var at = document.getElementById("sec1-text");

    var b = document.getElementById("sec2");
    var bt = document.getElementById("sec2-text");

    var c = document.getElementById("sec3");
    var ct = document.getElementById("sec3-text");

    var d = document.getElementById("sec4");
    var dt = document.getElementById("sec4-text");

    var e = document.getElementById("sec5");
    var et = document.getElementById("sec5-text");

    var f = document.getElementById("sec6");
    var ft = document.getElementById("sec6-text");

    var g = document.getElementById("sec7");
    var gt = document.getElementById("sec7-text");

    var h = document.getElementById("sec8");
    var ht = document.getElementById("sec8-text");

    var i = document.getElementById("sec9");
    var it = document.getElementById("sec9-text");

    a.style.display = "none";
    at.style.color = "var(--black)";
    at.style.border = "1px solid var(--black)";

    b.style.display = "none";
    bt.style.color = "var(--black)";
    bt.style.border = "1px solid var(--black)";

    c.style.display = "none";
    ct.style.color = "var(--black)";
    ct.style.border = "1px solid var(--black)";

    d.style.display = "flex";
    dt.style.color = "var(--primary)";
    dt.style.border = "1px solid var(--primary)";

    e.style.display = "none";
    et.style.color = "var(--black)";
    et.style.border = "1px solid var(--black)";

    f.style.display = "none";
    ft.style.color = "var(--black)";
    ft.style.border = "1px solid var(--black)";

    g.style.display = "none";
    gt.style.color = "var(--black)";
    gt.style.border = "1px solid var(--black)";

    h.style.display = "none";
    ht.style.color = "var(--black)";
    ht.style.border = "1px solid var(--black)";

    i.style.display = "none";
    it.style.color = "var(--black)";
    it.style.border = "1px solid var(--black)";
}

function section5() {
    var a = document.getElementById("sec1");
    var at = document.getElementById("sec1-text");

    var b = document.getElementById("sec2");
    var bt = document.getElementById("sec2-text");

    var c = document.getElementById("sec3");
    var ct = document.getElementById("sec3-text");

    var d = document.getElementById("sec4");
    var dt = document.getElementById("sec4-text");

    var e = document.getElementById("sec5");
    var et = document.getElementById("sec5-text");

    var f = document.getElementById("sec6");
    var ft = document.getElementById("sec6-text");

    var g = document.getElementById("sec7");
    var gt = document.getElementById("sec7-text");

    var h = document.getElementById("sec8");
    var ht = document.getElementById("sec8-text");

    var i = document.getElementById("sec9");
    var it = document.getElementById("sec9-text");

    a.style.display = "none";
    at.style.color = "var(--black)";
    at.style.border = "1px solid var(--black)";

    b.style.display = "none";
    bt.style.color = "var(--black)";
    bt.style.border = "1px solid var(--black)";

    c.style.display = "none";
    ct.style.color = "var(--black)";
    ct.style.border = "1px solid var(--black)";

    d.style.display = "none";
    dt.style.color = "var(--black)";
    dt.style.border = "1px solid var(--black)";

    e.style.display = "flex";
    et.style.color = "var(--primary)";
    et.style.border = "1px solid var(--primary)";

    f.style.display = "none";
    ft.style.color = "var(--black)";
    ft.style.border = "1px solid var(--black)";

    g.style.display = "none";
    gt.style.color = "var(--black)";
    gt.style.border = "1px solid var(--black)";

    h.style.display = "none";
    ht.style.color = "var(--black)";
    ht.style.border = "1px solid var(--black)";

    i.style.display = "none";
    it.style.color = "var(--black)";
    it.style.border = "1px solid var(--black)";
}

function section6() {
    var a = document.getElementById("sec1");
    var at = document.getElementById("sec1-text");

    var b = document.getElementById("sec2");
    var bt = document.getElementById("sec2-text");

    var c = document.getElementById("sec3");
    var ct = document.getElementById("sec3-text");

    var d = document.getElementById("sec4");
    var dt = document.getElementById("sec4-text");

    var e = document.getElementById("sec5");
    var et = document.getElementById("sec5-text");

    var f = document.getElementById("sec6");
    var ft = document.getElementById("sec6-text");

    var g = document.getElementById("sec7");
    var gt = document.getElementById("sec7-text");

    var h = document.getElementById("sec8");
    var ht = document.getElementById("sec8-text");

    var i = document.getElementById("sec9");
    var it = document.getElementById("sec9-text");

    a.style.display = "none";
    at.style.color = "var(--black)";
    at.style.border = "1px solid var(--black)";

    b.style.display = "none";
    bt.style.color = "var(--black)";
    bt.style.border = "1px solid var(--black)";

    c.style.display = "none";
    ct.style.color = "var(--black)";
    ct.style.border = "1px solid var(--black)";

    d.style.display = "none";
    dt.style.color = "var(--black)";
    dt.style.border = "1px solid var(--black)";

    e.style.display = "none";
    et.style.color = "var(--black)";
    et.style.border = "1px solid var(--black)";

    f.style.display = "flex";
    ft.style.color = "var(--primary)";
    ft.style.border = "1px solid var(--primary)";

    g.style.display = "none";
    gt.style.color = "var(--black)";
    gt.style.border = "1px solid var(--black)";

    h.style.display = "none";
    ht.style.color = "var(--black)";
    ht.style.border = "1px solid var(--black)";

    i.style.display = "none";
    it.style.color = "var(--black)";
    it.style.border = "1px solid var(--black)";
}

function section7() {
    var a = document.getElementById("sec1");
    var at = document.getElementById("sec1-text");

    var b = document.getElementById("sec2");
    var bt = document.getElementById("sec2-text");

    var c = document.getElementById("sec3");
    var ct = document.getElementById("sec3-text");

    var d = document.getElementById("sec4");
    var dt = document.getElementById("sec4-text");

    var e = document.getElementById("sec5");
    var et = document.getElementById("sec5-text");

    var f = document.getElementById("sec6");
    var ft = document.getElementById("sec6-text");

    var g = document.getElementById("sec7");
    var gt = document.getElementById("sec7-text");
    
    var h = document.getElementById("sec8");
    var ht = document.getElementById("sec8-text");

    var i = document.getElementById("sec9");
    var it = document.getElementById("sec9-text");

    a.style.display = "none";
    at.style.color = "var(--black)";
    at.style.border = "1px solid var(--black)";

    b.style.display = "none";
    bt.style.color = "var(--black)";
    bt.style.border = "1px solid var(--black)";

    c.style.display = "none";
    ct.style.color = "var(--black)";
    ct.style.border = "1px solid var(--black)";

    d.style.display = "none";
    dt.style.color = "var(--black)";
    dt.style.border = "1px solid var(--black)";

    e.style.display = "none";
    et.style.color = "var(--black)";
    et.style.border = "1px solid var(--black)";

    f.style.display = "none";
    ft.style.color = "var(--black)";
    ft.style.border = "1px solid var(--black)";

    g.style.display = "flex";
    gt.style.color = "var(--primary)";
    gt.style.border = "1px solid var(--primary)";

    h.style.display = "none";
    ht.style.color = "var(--black)";
    ht.style.border = "1px solid var(--black)";

    i.style.display = "none";
    it.style.color = "var(--black)";
    it.style.border = "1px solid var(--black)";
}

function section8() {
    var a = document.getElementById("sec1");
    var at = document.getElementById("sec1-text");

    var b = document.getElementById("sec2");
    var bt = document.getElementById("sec2-text");

    var c = document.getElementById("sec3");
    var ct = document.getElementById("sec3-text");

    var d = document.getElementById("sec4");
    var dt = document.getElementById("sec4-text");

    var e = document.getElementById("sec5");
    var et = document.getElementById("sec5-text");

    var f = document.getElementById("sec6");
    var ft = document.getElementById("sec6-text");

    var g = document.getElementById("sec7");
    var gt = document.getElementById("sec7-text");
    
    var h = document.getElementById("sec8");
    var ht = document.getElementById("sec8-text");

    var i = document.getElementById("sec9");
    var it = document.getElementById("sec9-text");

    a.style.display = "none";
    at.style.color = "var(--black)";
    at.style.border = "1px solid var(--black)";

    b.style.display = "none";
    bt.style.color = "var(--black)";
    bt.style.border = "1px solid var(--black)";

    c.style.display = "none";
    ct.style.color = "var(--black)";
    ct.style.border = "1px solid var(--black)";

    d.style.display = "none";
    dt.style.color = "var(--black)";
    dt.style.border = "1px solid var(--black)";

    e.style.display = "none";
    et.style.color = "var(--black)";
    et.style.border = "1px solid var(--black)";

    f.style.display = "none";
    ft.style.color = "var(--black)";
    ft.style.border = "1px solid var(--black)";

    g.style.display = "none";
    gt.style.color = "var(--black)";
    gt.style.border = "1px solid var(--black)";

    h.style.display = "flex";
    ht.style.color = "var(--primary)";
    ht.style.border = "1px solid var(--primary)";

    i.style.display = "none";
    it.style.color = "var(--black)";
    it.style.border = "1px solid var(--black)";
}

function section9() {
    var a = document.getElementById("sec1");
    var at = document.getElementById("sec1-text");

    var b = document.getElementById("sec2");
    var bt = document.getElementById("sec2-text");

    var c = document.getElementById("sec3");
    var ct = document.getElementById("sec3-text");

    var d = document.getElementById("sec4");
    var dt = document.getElementById("sec4-text");

    var e = document.getElementById("sec5");
    var et = document.getElementById("sec5-text");

    var f = document.getElementById("sec6");
    var ft = document.getElementById("sec6-text");

    var g = document.getElementById("sec7");
    var gt = document.getElementById("sec7-text");
    
    var h = document.getElementById("sec8");
    var ht = document.getElementById("sec8-text");

    var i = document.getElementById("sec9");
    var it = document.getElementById("sec9-text");

    a.style.display = "none";
    at.style.color = "var(--black)";
    at.style.border = "1px solid var(--black)";

    b.style.display = "none";
    bt.style.color = "var(--black)";
    bt.style.border = "1px solid var(--black)";

    c.style.display = "none";
    ct.style.color = "var(--black)";
    ct.style.border = "1px solid var(--black)";

    d.style.display = "none";
    dt.style.color = "var(--black)";
    dt.style.border = "1px solid var(--black)";

    e.style.display = "none";
    et.style.color = "var(--black)";
    et.style.border = "1px solid var(--black)";

    f.style.display = "none";
    ft.style.color = "var(--black)";
    ft.style.border = "1px solid var(--black)";

    g.style.display = "none";
    gt.style.color = "var(--black)";
    gt.style.border = "1px solid var(--black)";

    h.style.display = "none";
    ht.style.color = "var(--black)";
    ht.style.border = "1px solid var(--black)";

    i.style.display = "flex";
    it.style.color = "var(--primary)";
    it.style.border = "1px solid var(--primary)";
}
</script>

<style>
.faq {
    padding-top: 150px;
}

.faq > .container > .faq-container {
    background-color: #ffffff;
    padding: 50px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.faq > .container > .faq-container > section {
    margin: 50px 0 0 0;
}

.faq > .container > .faq-container > .btn-primary {
    max-width: fit-content;
}

.faq > .container > .faq-container h1 {
    margin: 25px 0;
    font-size: 28px;
}

.faq > .container > .faq-container h3 {
    font-size: 18px;
}

.faq > .container > .faq-container p {
    font-size: 16px;
    padding: 10px 0;
}

.faq > .container > .faq-container p span {
    font-weight: bold;
}

.faq > .container > .faq-container ol {
    margin: 0 0 0 35px;
}

.faq > .container > .faq-container ul {
    margin: 0 0 0 35px;
}

.faq > .container > .faq-container strong {
    font-weight: bold;
}

.faq > .container > .faq-container > .date {
    margin: -35px 0 0 0;
}

.faq > .container > .faq-container > .category {
    display: flex;
    flex-wrap: wrap;
    gap: 25px;
    padding-bottom: 50px;
    border-bottom: 2px solid var(--primary);
}

.faq > .container > .faq-container > .category div {
    cursor: pointer;
    padding: 0 10px;
    border-radius: 50px;
    border: 1px solid var(--black);
}

.faq > .container > .faq-container .question button {
    border: none;
    outline: none;
    background: none;
    cursor: pointer;
    font-size: 18px;
    font-weight: bold;
    font-family: 'Poppins', sans-serif;
    width: 100%;
    text-align: left;
}

.faq > .container > .faq-container .question button i {
    float: right;
    margin: 3px 0 0 0;
    color: var(--primary);
}

.faq > .container > .faq-container .question {
    padding: 10px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border: 1px solid var(--primary);
    width: 100%;
}

.faq > .container > .faq-container > section {
    display: flex;
    flex-direction: column;
    gap: 25px;
}

.faq > .container > .faq-container .dropdown-container {
    display: none;
}
</style>