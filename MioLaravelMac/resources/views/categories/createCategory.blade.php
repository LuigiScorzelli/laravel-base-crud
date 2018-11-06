@extends('layout.app')

@section('content')
    <div class="container">
        <h1>inserisci una nuova categoria</h1>
        <div class="box-form">
            <form method="post" action="{{ route('saveCategory') }}">

                {{ csrf_field() }}

                <label for="name">Nome</label>
                <input type="text" name="name" placeholder="Inserisci il nome della categoria" required/>

                {{-- <label for="is_active">La categoria è attiva?</label>
                <input type="text" name="is_active" placeholder="inserisci TRUE o FALSE" required/> --}}

                <label for="description">Descrizione</label>
                <textarea name="description" rows="12" cols="200" placeholder="inserisci una descrizione"></textarea>

                {{-- <input type="submit"  value="Salva" /> --}}

                <div class="box-button">
                    <button type="button" name="button" class="btn-save btn-back">
                        <a href=" {{ route('categories') }}">indietro</a>
                    </button>
                    <button type="submit" name="button" class="btn-save">Salva</button>
                </div>

            </form>
        </div>

    </div>
@endsection
