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

    .img {
        display: block;
        margin: 0 auto;
        margin-top: 10px;
        width: 25%;
        height: 10%;
        border: 1px solid #000000;
    }

    .text-center mt-4{
        font-size: 20px;
        font-weight: bold;
    }

    .brand-image {
        margin: 0 auto;
        margin-top: 10px;
        margin-bottom: 10px;
        width: 10em;
        height: 4em;
        border: 1px solid #000000;
    }
</style>

<h2 class="text-center mt-4">TOP 5 BRANDS</h2>

<div class="container">
    <div class="row">
        @foreach($brands as $brand)
        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset($brand->image_path) }}" alt="Brand Image" class="brand-image">
                    <h5 class="card-title">{{ $brand->brand_name }}</h5>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="{{ route('brand-details.index', $brand->id) }}" class="btn btn-sm btn-outline-secondary">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection