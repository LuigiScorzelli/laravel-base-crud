@extends('layout.layoutShop.appShop')
{{-- @php
dd($category->products);
@endphp --}}
@section('content')

    <div class="container">

        <div class="container-main">

            @foreach($products as $product)

            <div class=" @if($product->special) card-special @else card @endif ">
                <h2>{{ $product['title'] }}</h2>
                <p>{{ $product['price'] }}</p>
                {{-- <p>{{ $categories->name }}</p> --}}
                <div class="card-div"><p> {{ str_limit($product['description'], 40, '[...]') }}</p></div>
            </div>

            @endforeach

        </div>

        {{-- <div class="container-main">
            <ul>
                @foreach ($category->products as $product)
                    <li>{{ $product->title }}</li>
                @endforeach
            </ul>

        </div> --}}

    </div>

@endsection
