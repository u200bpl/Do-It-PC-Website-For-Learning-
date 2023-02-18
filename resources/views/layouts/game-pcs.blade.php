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
                                <p><span>€{{ $gamingpc->price }}</span> <strike>€499,00</strike></p>
                                <a class="btn-grey" href="">Bekijk PC</a>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>