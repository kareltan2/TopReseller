@extends('layout.main')

@section('content')
<style>
    .container {
        margin-top: 57px;
    }

    .button {
        background-color: #fff;
        color: #000;
        border: 2px solid #000;
        padding: 10px 20px;
        font-size: 16px;
        text-transform: uppercase;
        letter-spacing: 2px;
        transition: all 0.3s ease;
    }

    .button:hover {
        background-color: #000;
        color: #fff;
    }

    .banner-image {
        display: block;
        margin: 0 auto;
        margin-top: 10px;
        width: 25%;
        height: 10%;
        border: 1px solid #000000;
    }

    .product-image {
        margin: 0 auto;
        margin-top: 10px;
        margin-bottom: 10px;
        width: 100%;
        height: 100%;
        border: 1px solid #000000;
    }
</style>

<div class="banner">
    <img src="{{ asset('img/banner.png') }}" alt="Banner Image" class="banner-image">
</div>

<h2 class="text-center mt-4">All Items</h2>

<div class="container">
    <div class="row">
        @foreach($items as $item)
        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset($item->image_path) }}" alt="Product Image" class="product-image">
                    <h5 class="card-title">Name: {{ $item->item_name }}</h5>
                    <p class="card-text">Brand: {{ $item->brand->brand_name}}</p>
                    <p class="card-text">Price: {{ $item->price }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="{{ route('item-details.show', $item->id) }}" class="btn btn-sm btn-outline-secondary">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection