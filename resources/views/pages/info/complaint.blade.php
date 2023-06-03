@extends('layouts.base')
@section('content')

<section class="complaint">
    <div class="container">
        <div class="complaint-container">
            <h1>Heeft u een klacht?</h1>
            <section class="sec1">
                <p>We raden je aan om klachten eerst bij ons kenbaar te maken door te mailen naar info@doitpc.nl. Leidt dit niet tot een oplossing, dan is het mogelijk om je geschil aan te melden voor bemiddeling via Stichting WebwinkelKeur. Vanaf 15 februari 2016 is het voor consumenten in de EU ook mogelijk om klachten aan te melden via het ODR-platform van de Europese Commissie. Dit ODR-platform is te vinden op <a href="http://ec.europa.eu/odr">http://ec.europa.eu/odr</a>. Wanneer je klacht nog niet elders in behandeling is dan staat het je vrij om je klacht te deponeren via het platform van de Europese Unie.</p>
            </section>
        </div>
    </div>
</section>

@endsection

<style>
.complaint {
    padding-top: 150px;
}

.complaint > .container > .complaint-container {
    background-color: #ffffff;
    padding: 50px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.complaint > .container > .complaint-container > section {
    margin: 50px 0 0 0;
}

.complaint > .container > .complaint-container > .btn-primary {
    max-width: fit-content;
}

.complaint > .container > .complaint-container h1 {
    margin: 25px 0;
    font-size: 28px;
}

.complaint > .container > .complaint-container h3 {
    font-size: 18px;
}

.complaint > .container > .complaint-container p {
    font-size: 16px;
    padding: 10px 0;
}

.complaint > .container > .complaint-container p span {
    font-weight: bold;
}

.complaint > .container > .complaint-container ol {
    margin: 0 0 0 35px;
}

.complaint > .container > .complaint-container ul {
    margin: 0 0 0 35px;
}

.complaint > .container > .complaint-container strong {
    font-weight: bold;
}

.complaint > .container > .complaint-container .art6 .par {
    margin: 10px 0 0 -35px;
}

.complaint > .container > .complaint-container > .date {
    margin: -35px 0 0 0;
}
</style>