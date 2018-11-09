@extends('layout.app')

@section('content')
    <div class="container">
        <div class="title">
            <h1>Modifica prodotto - </h1>
            <small> {{ $product->title}}</small>
        </div>
        <div class="box-form">
            <form method="post" action="{{ route('change', ['id' => $product->id]) }}">
                {{ csrf_field() }}


                <label for="title">Nome</label>
                <input type="text"  value="{{ $product->title}}" name="title" placeholder="Inserisci il nome del prodotto" required/>

                <label for="price">Prezzo</label>
                <input type="number" value="{{ $product->price}}" name="price" placeholder="inserisci il prezzo del prodotto" required/>

                <label for="slug">Slug</label>
                <input type="text" value="{{ $product->slug}}" name="slug" placeholder="inserisci lo slug prodotto"/>

                <label for="description">Descrizione</label>
                <textarea name="description" rows="12" cols="200" placeholder="inserisci una descrizione">{{ $product->description}}</textarea>

                <label for="is_active">Vuoi visualizzare nella home questo prodotto?</label>
                <input type="checkbox" name="is_active" value="ok" @if ($product->is_active == true) checked @endif />

                    <label for="special">Prodotto in evidenza?</label>
                    <input type="checkbox" name="special" value="ok" @if ($product->special == true) checked @endif />

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
