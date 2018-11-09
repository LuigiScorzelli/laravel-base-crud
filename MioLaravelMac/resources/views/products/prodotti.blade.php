@extends('layout.app')

@section('content')
    <div class="container">
        <h1>indice dei prodotti</h1>
        <button  class="btn" type="button" name="button"><a href="{{ route('createProduct') }}">Crea un nuovo prodotto<a></button>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Titolo</th>
                    <th>categoria</th>
                    <th>Descrizione</th>
                    <th>Prezzo</th>
                    <th>Slug</th>
                    <th>Edit</th>
                    <th>Delete</th>

                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>

                        <td> {{ $product->id }} </td>
                        <td> {{ $product->title }} </td>
                        <td> {{ $product->category->name }} </td>
                        <td> {{ str_limit($product->description, 20, '[...]') }} </td>
                        <td> {{ $product->price }} </td>
                        <td> {{ $product->slug }} </td>

                        <td>
                            <button type="button" name="button" class="btn">
                                <a href="{{ route('edit', [ 'id' => $product->id]) }}">edit</a>
                            </button>
                        </td>

                        <td>
                            <button type="button" name="button" class=" btn btn-bkg">
                                <a href="{{ route('delete', [ 'id' => $product->id]) }}">delete</a>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
