@extends('layouts.main')
@push('title')
    <title>Home page</title>
@endpush
@section('content')
<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('assets/images/slider1.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('assets/images/slider3.jpg') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset ('assets/images/slider2.png') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!--start card-->
  <section class="py-5">
  <div class="container">
    <div class="d-flex">
        <div class="flex-grow-1"><h2>Top Deal's</h2></div>
        <div><a href="{{url('category/electronics')}}" class="btn text-light theme-green-btn btn-sm rounded-pill px-3 py-2">View all</a></div>
        
      </div>
    <div class="row theme-product">
        <div class="col-sm-3">
            <div class="card">
                <a href="{{url('category/electronics/tv')}}"><img src="{{asset ('assets/images/product/shoes.avif') }}" class="card-img-top" alt="..." style="height: 250px;"></a>
                <div class="card-body">
                  <h6 class="card-title text-center"><a href="{{url('category/electronics/tv')}}" class="text-dark text-decoration-none">Shoes</a></h6>
                  <h5 class="card-title text-center">₹ 2,999.00</h5>
                </div>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="card">
            <a href="{{url('category/electronics/tv')}}"><img src="{{asset ('assets/images/product/chair.jpg') }}" class="card-img-top" alt="..." style="height: 250px;"></a>
            <div class="card-body">
              <h6 class="card-title text-center"><a href="{{url('category/electronics/tv')}}" class="text-dark text-decoration-none">Chair</a></h6>
              <h5 class="card-title text-center">₹ 999.00</h5>
            </div>
    </div>
</div>

<div class="col-sm-3">
    <div class="card">
        <a href="{{url('category/electronics/tv')}}"><img src="{{asset ('assets/images/product/watch.jpg') }}" class="card-img-top" alt="..." style="height: 250px;"></a>
        <div class="card-body">
          <h6 class="card-title text-center"><a href="{{url('category/electronics/tv')}}" class="text-dark text-decoration-none">Watch</a></h6>
          <h5 class="card-title text-center">₹ 4,999.00</h5>
        </div>
</div>
</div>

<div class="col-sm-3">
    <div class="card">
        <a href="{{url('category/electronics/tv')}}"><img src="{{asset ('assets/images/product/cap.jpg') }}" class="card-img-top img-fluid" alt="..." style="height: 250px;"></a>
        <div class="card-body">
          <h6 class="card-title text-center"><a href="{{url('category/electronics/tv')}}" class="text-dark text-decoration-none">Cap</a></h6>
          <h5 class="card-title text-center">₹ 599.00</h5>
        </div>
</div>
</div>

  </div>
</section>
  <!--end card-->

<!--start electronics-->
<section class="py-5">
    <div class="container">
      <div class="d-flex">
          <div class="flex-grow-1"><h2>Best of electronic's</h2></div>
          <div><a href="{{url('category/electronics/tv')}}" class="btn text-light theme-green-btn btn-sm rounded-pill px-3 py-2">View all</a></div>
          
        </div>
      <div class="row theme-product">
          <div class="col-sm-3">
              <div class="card">
                  <a href="{{url('category/electronics/tv')}}"><img src="{{asset ('assets/images/electronics/1.avif') }}" class="card-img-top" alt="..." style="height: 250px;"></a>
                  <div class="card-body">
                    <h6 class="card-title text-center"><a href="{{url('category/electronics/tv')}}" class="text-dark text-decoration-none">Soney camera</a></h6>
                    <h5 class="card-title text-center">₹ 12,999.00</h5>
                  </div>
          </div>
      </div>
  
      <div class="col-sm-3">
          <div class="card">
              <a href="{{url('category/electronics/tv')}}"><img src="{{asset ('assets/images/electronics/4.jpeg') }}" class="card-img-top" alt="..." style="height: 250px;"></a>
              <div class="card-body">
                <h6 class="card-title text-center"><a href="{{url('category/electronics/tv')}}" class="text-dark text-decoration-none">Cooler</a></h6>
                <h5 class="card-title text-center">₹ 10,999.00</h5>
              </div>
      </div>
  </div>
  
  <div class="col-sm-3">
      <div class="card">
          <a href="{{url('category/electronics/tv')}}"><img src="{{asset ('assets/images/electronics/3jpg.jpg') }}" class="card-img-top" alt="..." style="height: 250px;"></a>
          <div class="card-body">
            <h6 class="card-title text-center"><a href="{{url('category/electronics/tv')}}" class="text-dark text-decoration-none">Fan</a></h6>
            <h5 class="card-title text-center">₹ 1,999.00</h5>
          </div>
  </div>
  </div>
  
  <div class="col-sm-3">
      <div class="card">
          <a href="{{url('category/electronics/tv')}}"><img src="{{asset ('assets/images/electronics/2.png') }}" class="card-img-top img-fluid" alt="..." style="height: 250px;"></a>
          <div class="card-body">
            <h6 class="card-title text-center"><a href="{{url('category/electronics/tv')}}" class="text-dark text-decoration-none">Apple watch</a></h6>
            <h5 class="card-title text-center">₹ 5,999.00</h5>
          </div>
  </div>
  </div>
  
    </div>
  </section>
<!--end electronics-->

<!--start popular categories-->
<section class="py-5">
    <div class="container">
      <div class="d-flex">
          <div class="flex-grow-1"><h2>Popular categories</h2></div>
          <div><a href="{{url('category/electronics')}}" class="btn text-light theme-green-btn btn-sm rounded-pill px-3 py-2">View all</a></div>
          
        </div>
      <div class="row theme-product">
          <div class="col-sm-3">
              <div class="card">
                  <a href="{{url('category/electronics/tv')}}"><img src="{{asset ('assets/images/product/p1.avif') }}" class="card-img-top" alt="..." style="height: 250px;"></a>
                  <div class="card-body">
                    <h6 class="card-title text-center"><a href="{{url('category/electronics/tv')}}" class="text-dark text-decoration-none">lady bag</a></h6>
                    <h5 class="card-title text-center">₹ 999.00</h5>
                  </div>
          </div>
      </div>
  
      <div class="col-sm-3">
          <div class="card">
              <a href="{{url('category/electronics/tv')}}"><img src="{{asset ('assets/images/product/p3.jpg') }}" class="card-img-top" alt="..." style="height: 250px;"></a>
              <div class="card-body">
                <h6 class="card-title text-center"><a href="{{url('category/electronics/tv')}}" class="text-dark text-decoration-none">Watch</a></h6>
                <h5 class="card-title text-center">₹ 599.00</h5>
              </div>
      </div>
  </div>
  
  <div class="col-sm-3">
      <div class="card">
          <a href="{{url('category/electronics/tv')}}"><img src="{{asset ('assets/images/product/p4.jpg') }}" class="card-img-top" alt="..." style="height: 250px;"></a>
          <div class="card-body">
            <h6 class="card-title text-center"><a href="{{url('category/electronics/tv')}}" class="text-dark text-decoration-none">Cover</a></h6>
            <h5 class="card-title text-center">₹ 199.00</h5>
          </div>
  </div>
  </div>
  
  <div class="col-sm-3">
      <div class="card">
          <a href="{{url('category/electronics/tv')}}"><img src="{{asset ('assets/images/product/p2.jpeg') }}" class="card-img-top img-fluid" alt="..." style="height: 250px;"></a>
          <div class="card-body">
            <h6 class="card-title text-center"><a href="{{url('category/electronics/tv')}}" class="text-dark text-decoration-none">Laptop bag</a></h6>
            <h5 class="card-title text-center">₹ 599.00</h5>
          </div>
  </div>
  </div>
  
    </div>
  </section>
<!--end popular categories-->

  <!--start recent viewed-->
  <section class="py-5">
    <div class="container">
      <div class="d-flex">
          <div class="flex-grow-1"><h2>Recent Viewed</h2></div>
          <div><a href="{{url('category/electronics/tv')}}" class="btn text-light theme-orange-btn btn-sm rounded-pill px-3 py-2">View all</a></div>
          
        </div>
      <div class="row theme-product">
          <div class="col-sm-3">
              <div class="card">
                  <a href="{{url('category/electronics/tv')}}"><img src="{{asset ('assets/images/product/R3.avif') }}" class="card-img-top" alt="..." style="height: 250px;"></a>
                  <div class="card-body">
                    <h6 class="card-title text-center"><a href="{{url('category/electronics/tv')}}" class="text-dark text-decoration-none">Washing machine</a></h6>
                    <h5 class="card-title text-center">₹ 8,999.00</h5>
                  </div>
          </div>
      </div>
  
      <div class="col-sm-3">
          <div class="card">
              <a href="{{url('category/electronics/tv')}}"><img src="{{asset ('assets/images/product/R1.jpg') }}" class="card-img-top" alt="..." style="height: 250px;"></a>
              <div class="card-body">
                <h6 class="card-title text-center"><a href="{{url('category/electronics/tv')}}" class="text-dark text-decoration-none">Lady shoes</a></h6>
                <h5 class="card-title text-center">₹ 599.00</h5>
              </div>
      </div>
  </div>
  
  <div class="col-sm-3">
      <div class="card">
          <a href="{{url('category/electronics/tv')}}"><img src="{{asset ('assets/images/product/R2.jpg') }}" class="card-img-top" alt="..." style="height: 250px;"></a>
          <div class="card-body">
            <h6 class="card-title text-center"><a href="{{url('category/electronics/tv')}}" class="text-dark text-decoration-none">LED TV</a></h6>
            <h5 class="card-title text-center">₹ 9,999.00</h5>
          </div>
  </div>
  </div>
  
  <div class="col-sm-3">
      <div class="card">
          <a href="{{url('category/electronics/tv')}}"><img src="{{asset ('assets/images/product/R4.avif') }}" class="card-img-top img-fluid" alt="..." style="height: 250px;"></a>
          <div class="card-body">
            <h6 class="card-title text-center"><a href="{{url('category/electronics/tv')}}" class="text-dark text-decoration-none">Wooden chair</a></h6>
            <h5 class="card-title text-center">₹ 1,999.00</h5>
          </div>
  </div>
  </div>
  
    </div>
  </section>
  <!--end recent viewed-->

@endsection
  