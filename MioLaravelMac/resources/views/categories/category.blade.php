@extends('layout.app')

@section('content')
    <div class="container">
        <h2>Categorie prodotti</h2>
        <button type="button" class="btn"><a href="{{ route('createCategory') }}">Crea una nuova categoria</a></button>

        {{-- mostra le categorie --}}

        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>name</th>
                    <th>Descrizione</th>
                    <th>Is_active</th>
                    <th>Slug</th>
                    <th>Prodotti associati</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categorys as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ str_limit($category->description, 20, '[...]') }}</td>
                        <td>{{ $category->is_active }}</td>
                        <td>{{ $category->category_slug }}</td>
                        <td><a href=" {{ route('productsCategory', ['category' => $category]) }} ">prodotti</a></td>
                        <td>
                            <button type="button" name="button" class="btn">
                                <a href="{{ route('editCategory', $category->id) }}">edit</a>
                            </button>
                        </td>
                        <td>
                            <button type="button" name="button" class="btn btn-bkg">
                                <a href="{{ route('deleteCategory',  $category->id) }}">delete</a>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
