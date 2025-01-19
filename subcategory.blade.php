@extends('layouts.main')
@push('title')
    <title>Sub Category</title>
@endpush
@section('content')
<div class="container-fluid bg-light p-5">
    <h1 class="text-center"><i class="fa-solid fa-layer-group"></i>Sub Category</h1>
</div>

<section class="py-5">
    <div class="container">
      <div class="row theme-product">
          <div class="col-sm-3 mb-4">
              <div class="card">
                  <a href="{{url('category/electronics/tv/detail')}}"><img src="{{asset ('assets/images/product/shoes.avif') }}" class="card-img-top" alt="..." style="height: 250px;"></a>
                  <div class="card-body">
                    <h6 class="card-title text-center"><a href="{{url('category/electronics/tv/detail')}}" class="text-dark text-decoration-none">Shoes</a></h6>
                    <h5 class="card-title text-center">₹ 2,999.00</h5>
                  </div>
          </div>
      </div>
  
      <div class="col-sm-3 mb-4">
          <div class="card">
              <a href="{{url('category/electronics/tv/detail')}}"><img src="{{asset ('assets/images/product/chair.jpg') }}" class="card-img-top" alt="..." style="height: 250px;"></a>
              <div class="card-body">
                <h6 class="card-title text-center"><a href="{{url('category/electronics/tv/detail')}}" class="text-dark text-decoration-none">Chair</a></h6>
                <h5 class="card-title text-center">₹ 999.00</h5>
              </div>
      </div>
  </div>
  
  <div class="col-sm-3 mb-4">
      <div class="card">
          <a href="{{url('category/electronics/tv/detail')}}"><img src="{{asset ('assets/images/product/watch.jpg') }}" class="card-img-top" alt="..." style="height: 250px;"></a>
          <div class="card-body">
            <h6 class="card-title text-center"><a href="{{url('category/electronics/tv/detail')}}" class="text-dark text-decoration-none">Watch</a></h6>
            <h5 class="card-title text-center">₹ 4,999.00</h5>
          </div>
  </div>
  </div>
  
  <div class="col-sm-3 mb-4">
      <div class="card">
          <a href="{{url('category/electronics/tv/detail')}}"><img src="{{asset ('assets/images/product/cap.jpg') }}" class="card-img-top img-fluid" alt="..." style="height: 250px;"></a>
          <div class="card-body">
            <h6 class="card-title text-center"><a href="{{url('category/electronics/tv/detail')}}" class="text-dark text-decoration-none">Cap</a></h6>
            <h5 class="card-title text-center">₹ 599.00</h5>
          </div>
  </div>
  </div>

  <div class="col-sm-3 mb-4">
    <div class="card">
        <a href="{{url('category/electronics/tv/detail')}}"><img src="{{asset ('assets/images/product/cap.jpg') }}" class="card-img-top img-fluid" alt="..." style="height: 250px;"></a>
        <div class="card-body">
          <h6 class="card-title text-center"><a href="{{url('category/electronics/tv/detail')}}" class="text-dark text-decoration-none">Cap</a></h6>
          <h5 class="card-title text-center">₹ 599.00</h5>
        </div>
</div>
</div>

<div class="col-sm-3 mb-4">
    <div class="card">
        <a href="{{url('category/electronics/tv/detail')}}"><img src="{{asset ('assets/images/product/cap.jpg') }}" class="card-img-top img-fluid" alt="..." style="height: 250px;"></a>
        <div class="card-body">
          <h6 class="card-title text-center"><a href="{{url('category/electronics/tv/detail')}}" class="text-dark text-decoration-none">Cap</a></h6>
          <h5 class="card-title text-center">₹ 599.00</h5>
        </div>
</div>
</div>

<div class="col-sm-3 mb-4">
    <div class="card">
        <a href="{{url('category/electronics/tv/detail')}}"><img src="{{asset ('assets/images/product/cap.jpg') }}" class="card-img-top img-fluid" alt="..." style="height: 250px;"></a>
        <div class="card-body">
          <h6 class="card-title text-center"><a href="{{url('category/electronics/tv/detail')}}" class="text-dark text-decoration-none">Cap</a></h6>
          <h5 class="card-title text-center">₹ 599.00</h5>
        </div>
</div>
</div>

<div class="col-sm-3 mb-4">
    <div class="card">
        <a href="{{url('category/electronics/tv/detail')}}"><img src="{{asset ('assets/images/product/cap.jpg') }}" class="card-img-top img-fluid" alt="..." style="height: 250px;"></a>
        <div class="card-body">
          <h6 class="card-title text-center"><a href="{{url('category/electronics/tv/detail')}}" class="text-dark text-decoration-none">Cap</a></h6>
          <h5 class="card-title text-center">₹ 599.00</h5>
        </div>
</div>
</div>
  
    </div>
  </section>
@endsection

