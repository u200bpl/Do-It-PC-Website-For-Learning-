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
                    <button class="dropdown-btn-two">Wat betekend de status "In verzameld"? <i class="fa-solid fa-plus"></i></button>
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