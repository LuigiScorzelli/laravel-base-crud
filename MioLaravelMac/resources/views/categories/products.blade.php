@extends('layout.app')

@section('content')

    <div class="container">
        <h1>Indice di tutti i prodotti associati ad una categoria : {{ $category->name}}</h1>

        <ul>
            @foreach ($category->products as $product)
                <li> {{ $product->title }} </li>
            @endforeach
        </ul>
    </div>
@endsection
