@extends('shop.layouts.main')

@section('title')
    Laravel Shopping Cart
@endsection


@section('content')
    @include('shop.partials.carousel')
    <div class="container">
        <div class="content-section">
            @foreach($products->chunk(4) as $productChunk)
                <div class="cards">
                    @foreach($productChunk as $product)
                        <div class="card">
                            <div class="card-image">
                                <img src="{{ $product->imagePath }}" alt="..." class="img-responsive">
                            </div>
                            <div class="card-content">
                                <h3>{{ $product->title }}</h3>
                                <p class="description">{{ $product->description }}</p>
                                <div class="clearfix">
                                    <div class="pull-left price">${{ $product->price }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
@endsection