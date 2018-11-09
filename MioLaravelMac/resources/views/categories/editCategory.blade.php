@extends('layout.app')

@section('content')
    <div class="container">
        <div class="title">
            <h1>Modifica la categoria- </h1><small> {{ $category->name}}</small>
        </div>

        <div class="box-form">
            <form method="post" action="{{ route('changeCategory', $category) }}">

                {{ csrf_field() }}

                <label for="name">Nome</label>
                <input type="text" name="name" value="{{ $category->name }}" required/>

                <label for="is_active">La categoria è attiva?</label>
                <input type="checkbox" name="is_active" value= 'ok' @if ($category->is_active == true) checked @endif>

                <label for="description">Descrizione</label>
                <textarea name="description" rows="12" cols="200" placeholder="inserisci una descrizione">{{ $category->description }}</textarea>


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
