@extends('layouts.base')
@section('content')

<section class="aboutus">
    <div class="container">
        <div class="aboutus-container">
            <h1>Wie is Do-It PC?</h1>
            <p>Wij van Do-It PC worden ontzettend enthousiast van gamen, of dat nou op de PC is of een andere console. Daarom hebben wij een aanbod geselecteerd waar we achterstaan; Hierbij gaan we natuurlijk voor de beste samenstellingen van onze PC’s, waarbij je de beste kwaliteit mag verwachten tegen de beste prijs. Verder doen wij wat we zeggen, geen onzin en geen kleine lettertjes.</p>

            <p>Ons streven is dat jij de perfecte PC vindt voor alle applicaties en games die jij wilt spelen. Daarbij wordt gebruik gemaakt van onze handige tools voor zowel gaming PC’s als PC’s voor content creators. Maar om helemaal zeker te weten welke pc de juiste voor jou is, kun je gebruik maken van onze live-chat waar onze specialisten je graag helpen met je keuze.</p>

            Bij Do-It PC krijg je naast <span>gratis verzending boven de €250</span> het volgende:
            <section class="sec1">
                <h3>3 jaar garantie</h3>
                
                <p>Wij staan bij Do-It PC voor service. Bij ons ontvang je standaard 3 jaar garantie op je PC. Is er iets stuk of werkt iets niet maar heb je zelf al eens je case opengemaakt? Wij doen er niet moeilijk over, je garantie vervalt hierdoor niet. Wij proberen je juist zo snel mogelijk te helpen, dit gebeurt in eerste instantie op afstand zodat eenvoudige problemen snel kunnen worden opgelost. Is het op deze manier niet gelukt? Dan kan je je PC naar ons opsturen zodat wij hem kunnen repareren. Dit doen we zo snel mogelijk, zodat je weer zo snel mogelijk kan genieten van je games.</p>

                <p>Extra snel je PC terug bij je thuis? Dan bieden we een premium garantie waarbij de wachttijd op een reparatie wordt verkort. Defecte onderdelen worden dan namelijk direct vervangen, wij gaan in dit geval niet wachten op RMA-afhandeling vanuit onze leverancier. Dit is bij de standaard garantie wel het geval. De meerprijs voor premium garantie is €60,-</p>
            </section>

            <section class="sec2">
                <h3>30 Dagen Bedenktijd</h3>
                <p>Doet het systeem niet wat we je beloofd hebben? Of heb je je simpelweg bedacht? Dan kun je het binnen 30 dagen na levering gewoon naar ons terugsturen, altijd! Voor meer informatie hierover ga je naar onze verzending/retours pagina. Wel is het natuurlijk begrijpelijk dat het product in dezelfde staat moet worden geretourneerd als dat het geleverd is geworden.</p>
            </section>

            <section class="sec3">
                <h3>Wij vinden jouw feedback belangrijk!</h3>
                <p>Hoe goed je het als bedrijf ook probeert te doen, wij geloven dat er altijd plek is voor verbetering. Heb jij feedback voor ons? Neem dan zeker contact met ons op.</p>
            </section>
        </div>
    </div>
</section>

@endsection

<style>
.aboutus {
    padding-top: 150px;
}

.aboutus > .container > .aboutus-container {
    background-color: #ffffff;
    padding: 50px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.aboutus > .container > .aboutus-container > section {
    margin: 50px 0 0 0;
}

.aboutus > .container > .aboutus-container > .btn-primary {
    max-width: fit-content;
}

.aboutus > .container > .aboutus-container h1 {
    margin: 25px 0;
    font-size: 28px;
}

.aboutus > .container > .aboutus-container h3 {
    font-size: 18px;
}

.aboutus > .container > .aboutus-container p {
    font-size: 16px;
    padding: 10px 0;
}

.aboutus > .container > .aboutus-container p span {
    font-weight: bold;
}

.aboutus > .container > .aboutus-container ol {
    margin: 0 0 0 35px;
}

.aboutus > .container > .aboutus-container ul {
    margin: 0 0 0 35px;
}

.aboutus > .container > .aboutus-container strong {
    font-weight: bold;
}

.aboutus > .container > .aboutus-container .art6 .par {
    margin: 10px 0 0 -35px;
}

.aboutus > .container > .aboutus-container > .date {
    margin: -35px 0 0 0;
}
</style>