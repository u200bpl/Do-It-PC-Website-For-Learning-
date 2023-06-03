<footer>
    <div class="container">
        <div class="footer-flex">
            <div class="footer-content">
                <h5>Informatie</h5>
                <a href="/contact">Contact</a>
                <a href="/over-ons">Over ons</a>
                <a href="/veelgestelde-vragen">Veelgestelde Vragen</a>
                <a href="/algemene-voorwaarden">Algemene voorwaarden</a>
                <a href="/privacy-verklaring">Privacy Verklaring</a>
                <a href="/klachten">Klachten</a>
            </div>

            <div class="footer-content">
                <h5>Informatie</h5>
                <a href="">Contact</a>
                <a href="">Over ons</a>
                <a href="">Veelgestelde Vragen</a>
                <a href="/algemene-voorwaarden">Algemene voorwaarden</a>
                <a href="">Privacy Verklaring</a>
            </div>

            <div class="footer-content">
                <h5>Informatie</h5>
                <a href="">Contact</a>
                <a href="">Over ons</a>
                <a href="">Veelgestelde Vragen</a>
                <a href="/algemene-voorwaarden">Algemene voorwaarden</a>
                <a href="">Privacy Verklaring</a>
            </div>

            <div class="footer-content">
                <h5>Do-It PC</h5>
                <a href="">info@foitpc.nl</a>
                <p>Tel: <a href="">06........</a></p>
                <p>Benthuizenstraat 27 (Geen bezoek)</p>
                <p>KVK: ........</p>
                <p>BTW: ..............</p>
            </div>
        </div>
    </div>
<script src="{{asset('js/main.js')}}"></script>
</footer>

<style>
footer {
    background-color: #ffffff;
    padding: 20px 0;
    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
    margin-top: 75px;
}

footer > .container > .footer-flex {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

footer > .container > .footer-flex > .footer-content {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

footer > .container > .footer-flex > .footer-content > h5 {
    font-size: 21px;
    font-weight: 600;
    margin-bottom: 10px;
}

footer > .container > .footer-flex > .footer-content > a {
    font-size: 16px;
    font-weight: 400;
    margin-bottom: 5px;
    color: #000000;
    text-decoration: none;
}

footer > .container > .footer-flex > .footer-content > a:hover {
    color: var(--primary);
}

footer > .container > .footer-flex > .footer-content > p {
    font-size: 16px;
    font-weight: 400;
    margin-bottom: 5px;
    color: #000000;
}

footer > .container > .footer-flex > .footer-content > p > a {
    color: #000000;
    text-decoration: none;
}

footer > .container > .footer-flex > .footer-content > p > a:hover {
    color: var(--primary);
}
</style>