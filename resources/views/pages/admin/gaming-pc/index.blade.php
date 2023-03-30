@extends('layouts.base')
@section('content')

@include('layouts.admin.navbar')

<section class="admin" style="margin-left:0%;">
    <div class="admin-container">

        <!-- COMPUTER SECTION -->
        <section class="admin-item-computer" id="admin-item-computer">
            <div class="admin-item-info">
                <div class="admin-item-left">
                    @if ($gamingpcs->count() > 1)
                        <p><span>{{ $gamingpcs->count() }} Computers</span></p>
                    @else
                        <p><span>{{ $gamingpcs->count() }} Computer</span></p>
                    @endif
                </div>

                <div class="admin-item-right">
                    <a href="/gaming-pc/create"><i class="fa-solid fa-plus"></i> Create</a>
                </div>
            </div>
            <table>
                <tr>
                    <th>Computer</th>
                    <th>Processor</th>
                    <th>Graphics Card</th>
                    <th>RAM</th>
                    <th>SSD</th>
                    <th>Stock</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
                @foreach ($gamingpcs as $gamingpc)
                    <tr>
                        <td>{{ $gamingpc->name }}</td>
                        <td>{{ $gamingpc->processor->name }}</td>
                        <td>{{ $gamingpc->graphicscard->name }}</td>
                        <td>{{ $gamingpc->ram->name }}</td>
                        <td>{{ $gamingpc->ssd->name }}</td>
                        @if ($gamingpc->stock > 0)
                            <td>{{ $gamingpc->stock }}</td>
                        @else
                            <td style="color: var(--danger)">Out of stock</td>
                        @endif
                        <td>{{ $gamingpc->price }}</td>
                        <td>
                            <div class="admin-table-actions">
                                <a href="/gaming-pc/{{ $gamingpc->id }}/edit"><i class="fa-solid fa-pen-to-square"></i></a>
                                <form action="{{route('gamingpc.destroy', $gamingpc->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </section>
    </div>
</section>

@endsection