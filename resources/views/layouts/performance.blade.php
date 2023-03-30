<section class="performance">
    <div class="container">
        <div class="description">
            <h2>Hoe <span>performt</span> mijn game?</h2>
            <p>Al de games die je hier onder ziet zijn getest op de standaard instellingen van de game. De performanmce en of fps kan verschillen per instelling.</p>
        </div>

        <div class="game-container">
            @foreach ($performances as $performance)
                <div class="game">
                    <img src="{{ asset('img/game-covers/'.$performance->game->name.'.jpg') }}" alt="{{ $performance->game->name }}">
                    <div class="info" style="width: calc({{ $performance->teneighty }}% / 2);">
                        <h5>1080p</h5>
                        <div class="fps @if ($performance->teneighty <= 30) fps-error @elseif ($performance->teneighty < 60) fps-warning @endif">
                            <p>{{ $performance->teneighty }}</p>
                        </div>
                    </div>

                    <div class="info" style="width: calc({{ $performance->fortiethfortieth }}% / 2);">
                        <h5>1440p</h5>
                        <div class="fps @if ($performance->fortiethfortieth <= 30) fps-error @elseif ($performance->fortiethfortieth < 60) fps-warning @endif">
                            <p>{{ $performance->fortiethfortieth }}</p>
                        </div>
                    </div>

                    <div class="info" style="width: calc({{ $performance->fourthousand }}% / 2);">
                        <h5>4k</h5>
                        <div class="fps @if ($performance->fourthousand <= 30) fps-error @elseif ($performance->fourthousand < 60) fps-warning @endif">
                            <p>{{ $performance->fourthousand }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>