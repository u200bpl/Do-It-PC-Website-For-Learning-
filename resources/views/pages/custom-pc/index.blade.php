@extends('layouts.base')
@section('content')

<section class="repair">
    <div class="container">
        <div class="repair-container">
            <h1>Custom Gaming PC met Do-It PC</h1>
            <section class="sec1">
                <p>Om jouw Game PC bij Do-It PC aan te melden, hanteren wij de volgende stappen:</p>
                <ol>
                    <li>Aanmelding:</li>
                    <ul>
                        <li>Neem contact op met Do-It PC en verstrekt gedetailleerde informatie over het probleem waarmee je te maken hebt. Ons deskundige team staat klaar om je te assisteren.</li>
                    </ul>
                </ol>
            </section>

            <section class="sec2">
                <h3>Neem contact met ons op</h3>
                <div class="repair-flex">
                    <div class="repair-content">
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
                                <label for="price">Prijs</label>
                                <input type="number" name="price" id="price" placeholder="2950" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="message">Bericht</label>
                                <textarea name="message" id="message" cols="30" rows="10" placeholder="Ik wil graag een gamepc met ....." class="form-control"></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Verstuur</button>
                            </div>
                        </form>
                    </div>

                    <div class="repair-content">
                        <h3>Do-it PC</h3>
                        <a href="">info@doitpc.nl</a>
                        <p>Benthuizenstraat 27 (Geen bezoek)</p>
                        <p><span>T:</span> 06........</p>
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
.repair {
    padding-top: 150px;
}

.repair > .container > .repair-container {
    background-color: #ffffff;
    padding: 50px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.repair > .container > .repair-container > section {
    margin: 50px 0 0 0;
}

.repair > .container > .repair-container > .btn-primary {
    max-width: fit-content;
}

.repair > .container > .repair-container h1 {
    margin: 25px 0;
    font-size: 28px;
}

.repair > .container > .repair-container h3 {
    font-size: 18px;
}

.repair > .container > .repair-container p {
    font-size: 16px;
    padding: 10px 0;
}

.repair > .container > .repair-container p span {
    font-weight: bold;
}

.repair > .container > .repair-container ol {
    margin: 0 0 0 35px;
}

.repair > .container > .repair-container ul {
    margin: 0 0 0 35px;
}

.repair > .container > .repair-container strong {
    font-weight: bold;
}

.repair > .container > .repair-container .art6 .par {
    margin: 10px 0 0 -35px;
}

.repair > .container > .repair-container > .date {
    margin: -35px 0 0 0;
}

.repair > .container > .repair-container form > .form-group {
    margin: 10px 0;
    width: 100%;
}

.repair > .container > .repair-container form > .form-group label {
    font-weight: bold;
}

.repair > .container > .repair-container form > .form-group textarea {
    padding: 10px;
    border: 1px solid var(--grey);
    border-radius: 8px;
    outline: none;
}

.repair > .container > .repair-container form > .form-group textarea:focus {
    border: 1px solid var(--primary);
}

.repair > .container > .repair-container .repair-flex {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 75px;
}

.repair > .container > .repair-container .repair-flex > .repair-content {
    width: 100%;
}

.repair > .container > .repair-container .repair-flex > .repair-content p {
    padding: 5px 0;
}

.repair > .container > .repair-container .repair-flex > .repair-content a {
    display: block;
    margin: 5px 0;
    color: var(--primary);
}
</style>