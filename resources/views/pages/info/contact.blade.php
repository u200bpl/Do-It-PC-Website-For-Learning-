@extends('layouts.base')
@section('content')

<section class="contact">
    <div class="container">
        <div class="contact-container">
            <h1>Contact met Do-It PC</h1>
            <section class="sec1">
                <p>Om onze klanten zo goed mogelijk te faciliteren hebben wij diverse mogelijkheden om contact met ons op te nemen. Goede gestroomlijnde communicatie vinden wij belangrijk, wij zullen dus zo snel en goed mogelijk antwoord geven zodat jij snel en goed geholpen bent.</p>
                <p><span>Live-Chat:</span> Wanneer je vragen hebt kun je het beste bij ons terecht via onze live-chat op de website. Deze vind je rechts onderin het scherm. Wanneer we online zijn kun je direct met onze helpdesk chatten, wanneer we niet online zijn kun je een bericht achterlaten samen met je e-mail adres en dan nemen we binnen 24 uur contact met je op (met uitzondering van het weekend).</p>
                <p><span>Email:</span> Reguliere manieren van contact zijn natuurlijk ook mogelijk, stuur je e-mails naar info@doitpc.nl.</p>
            </section>

            <section class="sec2">
                <h3>Neem contact met ons op</h3>
                <div class="contact-flex">
                    <div class="contact-content">
                        <form action="">
                            <div class="form-group">
                                <label for="name">Naam</label>
                                <input type="text" name="name" id="name" placeholder="John Doe" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="text" name="email" id="email" placeholder="johndoe@gmail.com" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="subject">Onderwerp</label>
                                <input type="text" name="subject" id="subject" placeholder="Vraag over ...." class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="message">Bericht</label>
                                <textarea name="message" id="message" cols="30" rows="10" placeholder="Ik heb een vraag over de ....." class="form-control"></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Verstuur</button>
                            </div>
                        </form>
                    </div>

                    <div class="contact-content">
                        <h3>Do-it PC</h3>
                        <a href="">info@doitpc.nl</a>
                        <p><span>T:</span> 06........</p>
                        <p>Benthuizenstraat 27 (Geen bezoek)</p>
                        <p>KVK: ........</p>
                        <p>BTW: ..............</p>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

@endsection

<style>
.contact {
    padding-top: 150px;
}

.contact > .container > .contact-container {
    background-color: #ffffff;
    padding: 50px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.contact > .container > .contact-container > section {
    margin: 50px 0 0 0;
}

.contact > .container > .contact-container > .btn-primary {
    max-width: fit-content;
}

.contact > .container > .contact-container h1 {
    margin: 25px 0;
    font-size: 28px;
}

.contact > .container > .contact-container h3 {
    font-size: 18px;
}

.contact > .container > .contact-container p {
    font-size: 16px;
    padding: 10px 0;
}

.contact > .container > .contact-container p span {
    font-weight: bold;
}

.contact > .container > .contact-container ol {
    margin: 0 0 0 35px;
}

.contact > .container > .contact-container ul {
    margin: 0 0 0 35px;
}

.contact > .container > .contact-container strong {
    font-weight: bold;
}

.contact > .container > .contact-container .art6 .par {
    margin: 10px 0 0 -35px;
}

.contact > .container > .contact-container > .date {
    margin: -35px 0 0 0;
}

.contact > .container > .contact-container form > .form-group {
    margin: 10px 0;
    width: 100%;
}

.contact > .container > .contact-container form > .form-group label {
    font-weight: bold;
}

.contact > .container > .contact-container form > .form-group textarea {
    padding: 10px;
    border: 1px solid var(--grey);
    border-radius: 8px;
    outline: none;
}

.contact > .container > .contact-container form > .form-group textarea:focus {
    border: 1px solid var(--primary);
}

.contact > .container > .contact-container .contact-flex {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 75px;
}

.contact > .container > .contact-container .contact-flex > .contact-content {
    width: 100%;
}

.contact > .container > .contact-container .contact-flex > .contact-content p {
    padding: 5px 0;
}

.contact > .container > .contact-container .contact-flex > .contact-content a {
    display: block;
    margin: 5px 0;
    color: var(--primary);
}
</style>