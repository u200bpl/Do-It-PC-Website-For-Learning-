@extends('layouts.base')
@section('content')

<form class="form" method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-section">
        <div class="form-layout">
            <label for="email">Email</label>
            <input type="text" id="email" type="email" name="email">
        </div>

        <div class="form-layout">
            <label for="password">Wachtwoord</label>
            <input type="password" id="password" name="password">
        </div>

        <div class="form-layout">
            <input type="submit" value="Inloggen" class="btn-secondary">
        </div>
        
        <div class="form-layout">
            <a href="/register">Nog geen account?</a>
        </div>
    </div>
</form>

@endsection