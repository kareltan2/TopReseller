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
  }

  h4 {
    font-size: 18px;
    font-weight: bold;
  }

  .company-text {
    font-size: 15px;
    color: grey;
  }

  .company-subtitle {
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

</style>

<div class="container">
  <div class="row">
    <div class="col-md-4">
      <img src="{{ asset('img/banner.png') }}" alt="Picture Company" class="img-fluid">
    </div>
    <div class="col-md-8">
        <div class="item-detail-description-section">
            <h1 class="company-name">Top Reseller</h1>
            <h2 class="company-subtitle">Address</h2>
            <h2 class="company-text">Binus Anggrek</h2>
            <h2 class="company-text">Jl. Raya Kb. Jeruk No.27, RT.1/RW.9, Kb. Jeruk, Kec. Kb. Jeruk,</h2>
            <h2 class="company-text"> Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11530</h2>
            <h2 class="company-text">Email: reseller-midterm@binus.ac.id</h2>
            <h2 class="company-text">Phone: 021-234567890</h2>
            <h2 class="company-subtitle">Open Hours</h2>
            <h2 class="company-text">Daily (include weekend) - 08.00 AM - 05.00 PM</h2>
        </div>
    </div>
  </div>
</div>

@endsection