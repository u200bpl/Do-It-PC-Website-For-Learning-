@extends('layouts.base')
@section('content')

<section class="admin">
    <div class="container">
        <section class="admin-item-nav">
            <div class="admin-item-nav-container">
                <div onclick="myFunction()" id="admin-item-order-text" class="admin-item-nav-item">
                    <p>Orders</p>
                </div>

                <div onclick="myFunction2()" id="admin-item-computer-text" class="admin-item-nav-item">
                    <p>Computers</p>
                </div>

                <div onclick="myFunction3()" id="admin-item-user-text" class="admin-item-nav-item">
                    <p>Users</p>
                </div>
            </div>
        </section>

        <!-- ORDER SECTION -->
        <section class="admin-item-computer" id="admin-item-order">
            <div class="admin-item-info">
                <div class="admin-item-left">
                    <p><span>1 Order</span></p>
                </div>
            </div>
            <table>
                <tr>
                    <th>Order ID</th>
                    <th>User</th>
                    <th>Computer</th>
                    <th>Price</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>Game PC Pro</td>
                    <td>€ 1999,00</td>
                    <td>Processing</td>
                </tr>
            </table>
        </section>

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
                        <td>{{ $gamingpc->stock }}</td>
                        <td style="color: var(--primary)">{{ $gamingpc->price }}</td>
                        <td>
                            <div class="admin-table-actions">
                                <a href="/admin/{{ $gamingpc->id }}/edit"><i class="fa-solid fa-pen-to-square"></i></a>
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

        <!-- USER SECTION -->
        <section class="admin-item-computer" id="admin-item-user">
            <div class="admin-item-info">
                <div class="admin-item-left">
                    @if ($users->count() > 1)
                        <p><span>{{ $users->count() }} Users</span></p>
                    @else
                        <p><span>{{ $users->count() }} User</span></p>
                    @endif
                </div>
            </div>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Admin</th>
                </tr>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        @if ($user->is_admin == 1)
                            <td>Yes</td>
                        @else
                            <td>No</td>
                        @endif
                    </tr>
                @endforeach
            </table>
        </section>
    </div>
</section>

<script>
    window.onload = myFunction;

    function myFunction() {
        var x = document.getElementById("admin-item-order");
        var xp = document.getElementById("admin-item-order-text");
        var y = document.getElementById("admin-item-computer");
        var yp = document.getElementById("admin-item-computer-text");
        var z = document.getElementById("admin-item-user");
        var zp = document.getElementById("admin-item-user-text");
        x.style.display = "block";
        y.style.display = "none";
        z.style.display = "none";

        xp.style.color = "var(--primary)";
        yp.style.color = "var(--tertiary)";
        zp.style.color = "var(--tertiary)";
    }

    function myFunction2() {
        var x = document.getElementById("admin-item-order");
        var xp = document.getElementById("admin-item-order-text");
        var y = document.getElementById("admin-item-computer");
        var yp = document.getElementById("admin-item-computer-text");
        var z = document.getElementById("admin-item-user");
        var zp = document.getElementById("admin-item-user-text");
        x.style.display = "none";
        y.style.display = "block";
        z.style.display = "none";

        xp.style.color = "var(--tertiary)";
        yp.style.color = "var(--primary)";
        zp.style.color = "var(--tertiary)";
    }

    function myFunction3() {
        var x = document.getElementById("admin-item-order");
        var xp = document.getElementById("admin-item-order-text");
        var y = document.getElementById("admin-item-computer");
        var yp = document.getElementById("admin-item-computer-text");
        var z = document.getElementById("admin-item-user");
        var zp = document.getElementById("admin-item-user-text");
        x.style.display = "none";
        y.style.display = "none";
        z.style.display = "block";

        xp.style.color = "var(--tertiary)";
        yp.style.color = "var(--tertiary)";
        zp.style.color = "var(--primary)";
    }
</script>

@endsection