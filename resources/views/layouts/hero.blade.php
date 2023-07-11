<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="test1">
                <div class="mennus">
                    <p>Vind de game pc die bij jou past!</p>
                    <a href="gaming-pc" class="btn-primary">Bekijk alle game pc's</a>
                </div>
            </div>

            <div class="test2">
                <h3>Game PC A56 RT36</h3>
                <img src="{{ asset('img/game-pc-normal.png') }}" alt="Featured PC">
                <a href="gaming-pc/2" class="btn-primary">Bekijk PC</a>
            </div>
        </div>
    </div>
</section>

<style>
.hero {
    padding-top: 135px;
}

.hero > .container > .hero-content {
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    flex-wrap: wrap;
    gap: 18px;
    height: 380px;
}

.hero > .container > .hero-content > .test1 {
    flex-grow: 3;
    box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);
    border-radius: 8px;
    background-color: var(--white);
    height: 100%;
    max-width: 859px;
    background-image: url("{{ asset('img/hero-banner.jpg') }}");
    background-size: cover;
    background-position: center;
}

.hero > .container > .hero-content > .test1 > .mennus {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    height: 100%;
    margin: 25px;
}

.hero > .container > .hero-content > .test1 > .mennus > p {
    font-size: 45px;
    color: var(--white);
    font-weight: 500;
    padding: 10px;
    text-shadow: 2px 2px 18px #000000;
    text-transform: uppercase;
    width: 400px;
    line-height: 1;
    font-weight: 600;
}

.hero > .container > .hero-content > .test1 > .mennus > a {
    display: block;
    margin: 5px 10px 10px 10px;
}

.hero > .container > .hero-content > .test2 {
    flex-grow: 1;
    box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);
    border-radius: 8px;
    background-color: var(--white);
    height: 100%;
    text-align: center;
    max-width: 273px;

    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.hero > .container > .hero-content > .test2 > img {
    height: 250px;
    object-fit: cover;
}

.hero > .container > .hero-content > .test2 > h3 {
    font-size: var(--font-size-h3);
    font-weight: 600;
    margin-top: 10px;
}

.hero > .container > .hero-content > .test2 > p {
    font-size: var(--font-size-p);
    color: var(--primary);
    font-weight: 500;
}

.hero > .container > .hero-content > .test2 > a {
    display: block;
    margin: 5px 10px 10px 10px;
}
</style>