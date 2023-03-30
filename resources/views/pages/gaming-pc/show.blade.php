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
                    <p><span>€{{ $gamingpc->price }}</span></p>
                </div>
                <hr>
                <div class="show-spec">
                    <p><i class="icon fa-solid fa-microchip"></i> <span>CPU</span> {{ $gamingpc->processor->name }}</p>
                    <p><i class="icon fa-solid fa-display"></i> <span>GPU</span> {{ $gamingpc->graphicscard->name }}</p>
                    <p><i class="icon fa-solid fa-memory"></i> <span>RAM</span> {{ $gamingpc->ram->name }}</p>
                    <p><i class="icon fa-solid fa-hard-drive"></i> <span>SSD</span> {{ $gamingpc->ssd->name }}</p>
                    <p><i class="icon fa-brands fa-windows"></i> <span>OS</span> Windows 11 Home</p>
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