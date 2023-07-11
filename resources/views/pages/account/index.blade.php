@extends('layouts.base')
@section('content')

<section class="user">
    <div class="container">
        <section class="user-item-nav">
            <div class="user-item-nav-container">
                <div onclick="myFunction()" id="user-item-order-text" class="user-item-nav-item">
                    <p>Gegevens</p>
                </div>

                <div onclick="myFunction2()" id="user-item-computer-text" class="user-item-nav-item">
                    <p>Bestellingen</p>
                </div>

                <div onclick="myFunction3()" id="user-item-user-text" class="user-item-nav-item">
                    <p>Instellingen</p>
                </div>
            </div>
        </section>

        <!-- GEGEVENS SECTION -->
        <section class="user-item-computer" id="user-item-order">
            <div class="user-item-info">
                <div class="user-item-left">
                    <form action="">
                        @csrf

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" value="{{ Auth::user()->email }}">
                        </div>

                        <div class="form-group">
                            <label for="???">Huidig wachtwoord</label>
                            <input type="password" id="???" name="???">
                        </div>

                        <div class="form-group">
                            <label for="???">Nieuw wachtwoord</label>
                            <input type="password" id="???" name="???">
                        </div>

                        <div class="form-group">
                            <label for="???">Herhaal nieuw wachtwoord</label>
                            <input type="password" id="???" name="???">
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Opslaan" class="btn-secondary">
                        </div>
                    </form>
                </div>

                <div class="user-item-right">
                    <form action="{{route('account.update', Auth::user()->id)}}" method="POST">
                        @csrf
                        @method('patch')

                        <div class="form-group">
                            <label for="first_name">Voornaam</label>
                            <input type="text" id="first_name" name="first_name" value="{{ Auth::user()->first_name }}">
                        </div>

                        <div class="form-group">
                            <label for="last_name">Achternaam</label>
                            <input type="text" id="last_name" name="last_name" value="{{ Auth::user()->last_name }}">
                        </div>

                        <div class="form-group">
                            <label for="phone">Telefoon</label>
                            <input type="text" id="phone" name="phone" value="{{ Auth::user()->phone }}">
                        </div>

                        <div class="form-group">
                            <label for="zip">Postcode</label>
                            <input type="text" id="zip" name="zip" value="{{ Auth::user()->zip }}">
                        </div>

                        <div class="form-group">
                            <label for="address">Straatnaam</label>
                            <input type="text" id="address" name="address" value="{{ Auth::user()->address }}">
                        </div>

                        <div class="form-group">
                            <label for="number">Huisnummer</label>
                            <input type="text" id="number" name="number" value="{{ Auth::user()->number }}">
                        </div>

                        <div class="form-group">
                            <label for="city">Stad</label>
                            <input type="text" id="city" name="city" value="{{ Auth::user()->city }}">
                        </div>

                        <div class="form-group">
                            <label for="country_id">Land</label>
                            <select name="country_id" id="country_id" class="form-control">
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}" {{ $country->id == Auth::user()->country_id ? 'selected' : '' }}>{{ $country->placeholder }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Opslaan" class="btn-secondary">
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!-- ORDER HISTORY SECTION -->
        <section class="user-item-computer" id="user-item-computer">
            <div class="user-item-info">
                <div class="user-item-left" style="margin-left: 50px">
                    <p><span>1 Bestelling</span></p>
                </div>
            </div>

            <table>
                <tr>
                    <th>Order ID</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Game PC Pro</td>
                    <td>€ 1999,00</td>
                    <td>Building</td>
                </tr>
            </table>
        </section>

        <!-- USER SECTION -->
        <section class="user-item-computer" id="user-item-user">
            <div class="user-item-info">
                <div class="user-item-left">
                    <p><span>Instellingen</span></p>
                </div>
            </div>
        </section>
    </div>
</section>

<script>
    window.onload = myFunction;

    function myFunction() {
        var x = document.getElementById("user-item-order");
        var xp = document.getElementById("user-item-order-text");
        var y = document.getElementById("user-item-computer");
        var yp = document.getElementById("user-item-computer-text");
        var z = document.getElementById("user-item-user");
        var zp = document.getElementById("user-item-user-text");
        x.style.display = "block";
        y.style.display = "none";
        z.style.display = "none";

        xp.style.color = "var(--primary)";
        yp.style.color = "var(--black)";
        zp.style.color = "var(--black)";
    }

    function myFunction2() {
        var x = document.getElementById("user-item-order");
        var xp = document.getElementById("user-item-order-text");
        var y = document.getElementById("user-item-computer");
        var yp = document.getElementById("user-item-computer-text");
        var z = document.getElementById("user-item-user");
        var zp = document.getElementById("user-item-user-text");
        x.style.display = "none";
        y.style.display = "block";
        z.style.display = "none";

        xp.style.color = "var(--black)";
        yp.style.color = "var(--primary)";
        zp.style.color = "var(--black)";
    }

    function myFunction3() {
        var x = document.getElementById("user-item-order");
        var xp = document.getElementById("user-item-order-text");
        var y = document.getElementById("user-item-computer");
        var yp = document.getElementById("user-item-computer-text");
        var z = document.getElementById("user-item-user");
        var zp = document.getElementById("user-item-user-text");
        x.style.display = "none";
        y.style.display = "none";
        z.style.display = "block";

        xp.style.color = "var(--black)";
        yp.style.color = "var(--black)";
        zp.style.color = "var(--primary)";
    }
</script>

@endsection

<style>
.user {
    position: relative;
    padding-top: 150px;
}

.user-item-nav-container {
    display: flex;
    border-bottom: 2px solid var(--grey);
}

.user-item-nav-item {
    margin: 0 10px;
    font-weight: 500;
    cursor: pointer;
}

.user-item-nav-container > .active {
    color: var(--primary);
}

.user-item-info {
    margin: 10px 0;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.user-item-info form {
    width: 560px;
    margin: 0 auto;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    background-color: var(--secondary);
    border-radius: 8px;
}

.user-item-left {
    margin: 0 10px 0 0;
}

.user-item-right {
    margin: 0 0 0 10px;
}

.user-item-info span {
    font-weight: 600;
}

.user-item-info a {
    color: var(--grey-dark);
    font-weight: 500;
    text-decoration: none;
}

.user table {
    background-color: var(--secondary);
    width: 100%;
    border-collapse: collapse;
    text-align: left;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

.user table th {
    color: var(--black);
    padding: 10px 0 10px 15px;
}

.user table td {
    border-top: 2px solid var(--grey);
    padding: 10px 0 10px 15px;
}

.user-table-actions {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.user table td a {
    text-decoration: none;
    color: var(--black);
}

.user table td button {
    cursor: pointer;
    background: transparent;
    border: none;
    color: var(--danger);
}
</style>