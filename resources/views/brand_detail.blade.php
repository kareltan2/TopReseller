@extends('layout.main')

@section('content')
<style>
    .root-container {
        justify-content: center;
        align-items: center;
    }

    .container {
        margin-bottom: 0px;
        margin: auto;
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

    .brand-image {
        margin: 0 auto;
        margin-top: 10px;
        margin-bottom: 10px;
        width: 100%;
        height: 100%;
        border: 1px solid #000000;
    }

    h1, h2, h4 {
        margin-top: 20px;
        margin-bottom: 10px;
    }

    .item-detail-description-section h1 {
        font-size: 45px;
        font-weight: bold;
    }

    h2 {
        font-size: 20px;
    }

    h4 {
        font-size: 18px;
        font-weight: bold;
    }

    .company-text {
        font-size: 15px;
        color: grey;
    }

    .row {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 10%;
        margin-bottom: 5%;
    }

    .item-detail-description-section {
        margin-left: 60px;
    }

    .text-center {
        margin: 0%;
    }

    .show-maximal-item {
        margin-top: 2%;
    }

    .product-image {
        margin: 0 auto;
        margin-top: 10px;
        margin-bottom: 10px;
        width: 17em;
        height: 17em;
        border: 1px solid #000000;
    }
    
</style>

<div class="root-container">
    <div class="container">
        <div class="row brand-detail-container">
          <div class="col-md-4">
            <img src="{{ asset($brands->image_path) }}" alt="Brand Image" class="brand-image">
          </div>
          <div class="col-md-8">
              <div class="item-detail-description-section">
                  <h1 class="company-name">{{ $brands->brand_name }}</h1>
                  <h2>Address: Palmerah - Indonesia</h2>
                  <h2>Email: {{ $brands->brand_name }}@binus.ac.id</h2>
                  <h2>Description: </h2>
                  <h2 class="company-text">{{ $brands->description }}</h2>
              </div>
          </div>
        </div>
    </div>
    
    <h2 class="text-center mt-4">{{ $brands->brand_name }}'s Item</h2>
    
    <div class="container">
        <div class="row show-maximal-item">
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
</div>

@endsection