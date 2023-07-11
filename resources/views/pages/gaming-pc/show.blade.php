@extends('layouts.base')
@section('content')

<section class="show-gamingpc">
    <div class="container">
        <div class="show-flex">
            <div class="show-left">
                <img src="{{ asset('img/'.$gamingpc->image) }}" alt="{{ $gamingpc->name }}">
            </div>

            <div class="show-right">
                <h1>{{ $gamingpc->name }}</h1>
                <div class="price">
                    <p><span>€{{ $gamingpc->price }},00</span></p>
                </div>
                <hr>

                <div class="show-spec">
                    <div class="accordion-item">
                        <button class="accordion"><i class="icon fa-solid fa-microchip"></i> <span>CPU</span> {{ $gamingpc->processor->name }}</button>
                        <div class="panel">
                            <p>De processor is het hart van jouw Game PC en bepaalt de snelheid.</p>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="accordion"><i class="icon fa-solid fa-display"></i> <span>GPU</span> {{ $gamingpc->graphicscard->name }}</button>
                        <div class="panel">
                            <p>De videokaart zorgt ervoor hoe games eruit zien en draaien.</p>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="accordion"><i class="icon fa-solid fa-hard-drive"></i> <span>SSD</span> {{ $gamingpc->ssd->name }}</button>
                        <div class="panel">
                            <p>Bestanden zoals foto's en videos worden opgeslagen op een hardeschijf of ssd.</p>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="accordion"><i class="icon fa-solid fa-memory"></i> <span>RAM</span> 16GB DDR5</button>
                        <div class="panel">
                            <p>Het geheugen is belangrijk voor de snelheid van de processen.</p>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="accordion"><i class="icon fa-brands fa-windows"></i> <span>OS</span> Windows 11 Home</button>
                        <div class="panel">
                            <p>De besturingssysteem zorgt ervoor dat jij eenvoudig gebruik kan maken van jouw Game PC.</p>
                        </div>
                    </div>

                </div>

                <div class="buttons">
                    @if ($gamingpc->stock > 0)
                        <button class="primary">In winkelwagen</button>
                        <button class="secondary">Wijzig specificaties</button>
                    @else
                        <button class="primary">Out of Stock</button>
                        <button class="secondary">Wijzig specificaties</button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.performance')

@endsection

<style>
.show-gamingpc {
    padding-top: 150px;
}

.show-flex {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
}

.show-left {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
}

.show-left img {
    height: 500px;
}

.show-right {
    width: 100%;
}

.show-right hr {
    margin: 10px 0;
    width: 50px;
    color: var(--primary);
}

.show-right > .price {
    font-size: var(--font-size-p);
    font-weight: 500;
}

.show-right h1 {
    font-size: 30px;
    font-weight: 800;
}

.show-spec p {
    font-size: var(--font-size-p);
    font-weight: 300;
    margin: 5px 0;
}

.show-spec span {
    font-weight: 500;
}

.show-spec .icon {
    font-size: 18px;
}

.show-right .buttons {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 10px;
}

.show-right .buttons .primary {
    background-color: var(--primary);
    color: var(--white);
    border: 2px solid var(--primary);
    border-radius: 8px;
}

.show-right .buttons .secondary {
    background-color: var(--white);
    color: var(--primary);
    border: 2px solid var(--primary);
    border-radius: 8px;
}

.show-right .buttons button {
    width: 49%;
    border-radius: 0px;
    font-size: var(--font-size-p);
    font-weight: 500;
    padding: 5px 0;
    cursor: pointer;
}

/* ACCORDION */
.show-gamingpc > .container > .show-flex > .show-right > .show-spec > .accordion-item {
    margin: 10px 0;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 100%;
}

.show-gamingpc > .container > .show-flex > .show-right > .show-spec > .accordion-item > .accordion {
    background-color: var(--white);
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: var(--font-size-p);
    font-weight: 500;
    border-radius: 8px;
}

.show-gamingpc > .container > .show-flex > .show-right > .show-spec > .accordion-item > .accordion > i {
    color: var(--primary);
}

.show-gamingpc > .container > .show-flex > .show-right > .show-spec > .accordion-item > .accordion > span {
    color: var(--primary);
    font-weight: 500;
}

.show-gamingpc > .container > .show-flex > .show-right > .show-spec > .accordion-item > .active, .accordion:hover {
    transition: 0s;
    border-bottom: 1px solid var(--primary);
    border-radius: 8px 8px 0 0;
}

.show-gamingpc > .container > .show-flex > .show-right > .show-spec > .accordion-item > .accordion:after {
    content: '\';
    font-family: "Font Awesome 5 Free";
    font-weight: bold;
    float: right;
    margin-left: 5px;
    transition-duration: 200ms;
}

.show-gamingpc > .container > .show-flex > .show-right > .show-spec > .accordion-item > .active:after {
    transform: rotate(90deg);
    transition-duration: 200ms;
    color: var(--primary);
}

.show-gamingpc > .container > .show-flex > .show-right > .show-spec > .accordion-item > .panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    border-radius: 0 0 8px 8px;
}

.show-gamingpc > .container > .show-flex > .show-right > .show-spec > .accordion-item > .panel > p {
    margin: 5px 0;
}
</style>