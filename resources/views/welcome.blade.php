@extends('layouts.base')
@section('content')

@include('layouts.hero')
@include('layouts.voordelen')
<section class="gamingpcs">
    <div class="container">
        <div class="gamingpcs">
            <div class="gamingpcs-text">
                <a href="/gaming-pc">Game PC’s</a>
                <p>Bekijk meer van onze Game PC’s</p>
            </div>

            <div class="gamingpcs-show">
                <div class="gamingpcs-show-container">
                    @foreach ($gamingpcs->take(5) as $gamingpc)
                        <div class="gamingpcs-show-item">
                            <a href="/gaming-pc/{{$gamingpc->id}}">
                                <img src="{{ asset('img/'.$gamingpc->image) }}" alt="{{ $gamingpc->name }}">
                                <h3>{{ $gamingpc->name }}</h3>
                                <!-- <p>{{ $gamingpc->description }}</p> -->
                                <div class="gamingpcs-show-info">
                                    <p><i class="fa-solid fa-microchip"></i> <span>CPU</span> {{ $gamingpc->processor->name }}</p>
                                    <p><i class="fa-solid fa-display"></i> <span>GPU</span> {{ $gamingpc->graphicscard->name }}</p>
                                    <p><i class="fa-solid fa-memory"></i> <span>RAM</span> {{ $gamingpc->ram->name }}</p>
                                    <p><i class="fa-solid fa-hard-drive"></i> <span>SSD</span> {{ $gamingpc->ssd->name }}</p>

                                    <hr>
                                    <div class="test">
                                        <p><span>€{{ $gamingpc->price }},00</span></p>
                                        @if ($gamingpc->stock > 0)
                                            <p class="btn-secondary">Bekijk PC</p>
                                        @else
                                            <p class="btn-grey">Out of stock</p>
                                        @endif
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

<style>
.gamingpcs {
    padding-top: 10px;
}

.gamingpcs-text {
    display: flex;
    justify-content: flex-start;
    align-items: first baseline;
}

.gamingpcs-text > a {
    margin-right: 5px;
}

.gamingpcs a {
    text-decoration: none;
    color: var(--black);
    font-size: var(--font-size-a);
    font-weight: 500;
}

.gamingpcs-text > a:hover {
    color: var(--primary);
}

.gamingpcs p {
    font-size: var(--font-size-p-secondary);
}

.gamingpcs-show-container {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    flex-wrap: wrap;
    margin-top: 10px;
    gap: 18px;
}

.gamingpcs-show-item {
    background-color: var(--secondary);
    border-radius: 8px;
    width: 215px;
    padding: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.gamingpcs-show-item h3 {
    font-size: var(--font-size-h3);
    font-weight: 600;
    margin-top: 10px;
}

.gamingpcs-show-item a {
    width: 100%;
    height: 100%;
}

.gamingpcs-show-item img {
    max-height: 150px;
    height: 150px;
    display: block;
    margin: 0 auto;
}

.gamingpcs-show-item p {
    margin: 10px 0;
}

.gamingpcs-show-item p span {
    font-size: var(--font-size-p);
    color: var(--primary);
    font-weight: 500;
}

.gamingpcs-show-item p span strike {
    font-weight: 300;
}

.gamingpcs-show-item hr {
    color: var(--primary);
}

.gamingpcs-show-item:hover {
    transform: scale(1.05);
}

.gamingpcs-show-info > p {
    font-size: var(--font-size-p-secondary);
    font-weight: 300;
}

.gamingpcs-show-info > p span {
    font-size: var(--font-size-p-secondary) !important;
    font-weight: 500;
}
</style>