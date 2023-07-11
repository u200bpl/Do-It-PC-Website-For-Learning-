@if ($performances->count() > 0)
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
                    <div class="info-container">
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
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<style>
.performance {
    margin-top: 150px;
    padding: 50px 0;
    background-color: var(--white);
}

.performance .description {
    margin: 0 auto;
    text-align: center;
    margin-bottom: 50px;
    width: 75%;
}

.performance .description > h2 {
    font-size: 28px;
    font-weight: 800;
    margin-bottom: 10px;
}

.performance .description > h2 > span {
    color: var(--primary);
}

.performance .game-container {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    gap: 20px;
}

.performance .game-container > .game {
    display: flex;
    align-items: center;
    flex-grow: 1;
    width: 25%;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

.performance .game-container > .game > img {
    height: 100%;
    width: 75px;
    object-fit: cover;
    border-radius: 8px;
}

.performance .game-container > .game > .info-container {
    width: 100%;
    height: 100%;
    margin: 15px;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
}

.performance .game-container > .game > .info-container > .info {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    max-width: 100%;
    position: relative;
    min-width: 50px;
}

.performance .game-container > .game > .info-container > .info::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: var(--primary);
    height: 4px;
    border-radius: 10px;
}
</style>