@extends('layouts.base')
@section('content')

<section class="admin">
    <div class="container">
        <section class="admin-item-nav">
            <div class="admin-item-nav-container">
                <div onclick="myFunction()" id="admin-item-order-text" class="admin-item-nav-item">
                    <p>Gegevens</p>
                </div>

                <div onclick="myFunction2()" id="admin-item-computer-text" class="admin-item-nav-item">
                    <p>Bestellingen</p>
                </div>

                <div onclick="myFunction3()" id="admin-item-user-text" class="admin-item-nav-item">
                    <p>Instellingen</p>
                </div>
            </div>
        </section>

        <!-- GEGEVENS SECTION -->
        <section class="admin-item-computer" id="admin-item-order">
            <div class="admin-item-info">
                <div class="admin-item-left">
                    <form action="{{route('account.update', Auth::user()->id)}}" method="POST">
                        @csrf
                        @method('patch')

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

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

                <div class="admin-item-right">
                    <form action="{{route('account.update', Auth::user()->id)}}" method="POST">
                        @csrf
                        @method('patch')

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

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
                                    <option value="{{ $country->id }}" {{ $country->id == Auth::user()->country_id ? 'selected' : '' }}>{{ $country->name }}</option>
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

        <!-- COMPUTER SECTION -->
        <section class="admin-item-computer" id="admin-item-computer">
            <div class="admin-item-info">
                <div class="admin-item-left">
                    <p><span>Bestellingen</span></p>
                </div>
            </div>
        </section>

        <!-- USER SECTION -->
        <section class="admin-item-computer" id="admin-item-user">
            <div class="admin-item-info">
                <div class="admin-item-left">
                    <p><span>Instellingen</span></p>
                </div>
            </div>
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