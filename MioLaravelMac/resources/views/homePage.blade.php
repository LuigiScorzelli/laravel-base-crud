@extends('layout.app')

@section('content')
    <div class="container">

            <div class="box-cards">

                @foreach($products as $product)
                 <div class="card">
                     <h2>{{ $product['title'] }}</h2>
                     <p>{{ $product['price'] }}</p>
                     <p> {{ str_limit($product['description'], 50, '[..]') }}</p>
                 </div>
             @endforeach

            </div>

    </div>
@endsection
