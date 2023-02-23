<section class="gamingpcs">
    <div class="container">
        <div class="gamingpcs">
            <div class="gamingpcs-text">
                <a href="/gaming-pc">Game PC’s</a>
                <p>Kies één van onze Game PC’s</p>
            </div>

            <div class="gamingpcs-show">
                <div class="gamingpcs-show-container">
                    @foreach ($gamingpcs as $gamingpc)
                        <div class="gamingpcs-show-item">
                            <a href="/gaming-pc">
                                <img src="{{ asset('img/'.$gamingpc->image) }}" alt="{{ $gamingpc->name }}">
                                <h3>{{ $gamingpc->name }}</h3>
                                <p>{{ $gamingpc->description }}</p>
                                <div class="gamingpcs-show-info">
                                    <p><i class="fa-solid fa-microchip"></i> <span>CPU</span> {{ $gamingpc->processor->name }}</p>
                                    <p><i class="fa-solid fa-display"></i> <span>GPU</span> {{ $gamingpc->graphicscard->name }}</p>
                                    <p><i class="fa-solid fa-memory"></i> <span>RAM</span> {{ $gamingpc->ram->name }}</p>
                                    <p><i class="fa-solid fa-hard-drive"></i> <span>SSD</span> {{ $gamingpc->ssd->name }}</p>

                                    <hr>
                                    <div class="test">
                                        <p><span>€{{ $gamingpc->price }}</span></p>
                                        <p class="btn-grey">Bekijk PC</p>
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