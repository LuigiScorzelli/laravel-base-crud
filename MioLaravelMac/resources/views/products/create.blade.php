@extends('layout.app')

@section('content')
    <div class="container">
        <h1>inserisci un nuovo prodotto</h1>
        <div class="box-form">
            <form method="post" action="{{ route('saveProduct') }}">
                {{ csrf_field() }}

                <label for="img">Inserisci immagine</label>
                <input type="text" name="img" placeholder="INSERISCI UN URL VALIDO .JPG"></input>

                <label for="title">Nome</label>
                <input type="text" name="title" placeholder="Inserisci il nome del prodotto" required/>

                <label for="price">Prezzo</label>
                <input type="number" name="price" placeholder="inserisci il prezzo del prodotto" required/>

                <label for="description">Descrizione</label>
                <textarea name="description" rows="12" cols="200" placeholder="inserisci una descrizione"></textarea>


                <div class="box-button">
                    <button type="button" name="button" class="btn-save btn-back">
                        <a href=" {{ route('products') }}">indietro</a>
                    </button>
                    <button type="submit" name="button" class="btn-save">Salva</button>
                </div>

            </form>
        </div>
    </div>
@endsection
