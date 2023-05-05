@extends('layout.main')

@section('content')
<style>
  .container {
    margin: auto;
    padding: auto;
  }

  img {
    display: block;
    margin: auto;
    width: 200%;
    height: auto;
    border: 1px solid #ccc;
  }

  h1, h2, h4 {
    margin-top: 20px;
    margin-bottom: 10px;
  }

  .item-detail-description-section h1 {
    font-size: 60px;
    font-weight: bold;
  }

  h2 {
    font-size: 24px;
    font-weight: bold;
  }

  h4 {
    font-size: 18px;
    font-weight: bold;
  }

  .product-detail-brand-name {
    font-size: 35px;
    color: grey;
  }

  .product-detail-price {
    text-decoration: underline;
  }

  .row {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 10%;
    margin-bottom: 17.7%;
  }

  .item-detail-description-section {
    margin-left: 60px;
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

<div class="container">
  <div class="row">
    <div class="col-md-4">
      <img src="{{ asset($item->image_path) }}" alt="Product Image" class="product-image">
    </div>
    <div class="col-md-8">
        <div class="item-detail-description-section">
            <h1 class="product-detail-item-name">{{ $item->item_name }}</h1>
            <h2 class="product-detail-brand-name">{{ $item->brand->brand_name }}</h2>
            <h2 class="product-detail-price">Rp. {{ $item->price }}/piece</h2>
            <h4>Description</h4>        
            <p>{{ $item->description }}</p>
        </div>
    </div>
  </div>
</div>

@endsection