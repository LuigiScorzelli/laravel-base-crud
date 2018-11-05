@extends('layout.app')

@section('content')
    <div class="container">

        <div class="styleContact">
            <label for="name"><h3>Nome</h3></label>
            <input type="text" name="name" placeholder="Inserisci il tuo nome">

            <label for="mail"><h3>Mail</h3></label>
            <input type="text" name="mail" placeholder="Inserisci la tua email">

            <label for="testo"><h3>Inserisci la tua richiesta</h3></label>
            <textarea name="name" rows="8" cols="120"></textarea>
            {{-- <button type="button" name="button" class="btn">Invia</button> --}}
            <input type="button" value="Invia">

        </div>

    </div>
@endsection
