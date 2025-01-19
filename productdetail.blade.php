@extends('layouts.main')
@push('title')
    <title>Product</title>
@endpush
@section('content')
<div class="container-fluid bg-light p-5">
    <h1 class="text-center"><i class="fa-solid fa-layer-group"></i>Product Detail's</h1>
</div>

<section>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
            
                <img src="{{asset ('assets/images/product/shoes.avif') }}" class="border rounded img-fluid">
        </div>

        <div class="col-lg-8">
           
            <div>
                <h2>Mens shoes</h2>
                <h5>₹ 2,999.00</h5>
                <div>
                    <div class="d-flex flex-row mb-3">
                        <div>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <div class=" mx-2">
                            <h6>(2 Customer Raiting)</h6>
                       </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita voluptatem animi, suscipit laborum quibusdam molestiae exercitationem? Quidem cum incidunt quibusdam, at dolorem voluptate. Sequi ipsa cupiditate ut. Quasi, autem dolor.</p>
                <div>
                    <div class="d-flex flex-row mb-3">
                        <div class="p-1"><h6>Quantity</h6></div>
                            <div class="p-1">
                                <span class="btn btn-secondary rounded-start-pill btn-sm"><i class="fa-solid fa-minus"></i></span>
                                <span class="mx-2">01</span>
                                <span class="btn btn-secondary rounded-end-pill btn-sm"><i class="fa-solid fa-plus"></i></span>
                            </div>
                       
                      </div>
                </div>
                <div>
                    <a href="{{ url('cart-list/product') }}" class="btn theme-green-btn text-light rounded-pill me-1 px-3 py-2">Add to cart</a>
                    <a href="#" class="theme-orange-btn btn text-light rounded-pill  px-3 py-2">Buy Now</a>
                </div>
            </div>
         
        </div>
        
    </div>
    <div class="py-4">
        <h4>Product Description</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In neque aliquam quis sit ipsa delectus eveniet saepe quidem nesciunt sed aspernatur facere, adipisci tempora odit quisquam et sunt explicabo repudiandae?</p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate tempore repudiandae repellat ea, dignissimos nulla deserunt eum? Iure, asperiores quia aperiam eaque et eum veniam id odit, voluptatibus ab quaerat.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi repellat sit, reiciendis suscipit assumenda fuga vitae atque ipsam. Aliquam laboriosam ut ab vel inventore dolore obcaecati facilis vero suscipit deleniti.</p>
    </div>
    <!--start related products -->
    <div>
        <section class="py-5">
            <div class="container">
              <div class="d-flex">
                  <div class="flex-grow-1"><h2>Related Product</h2></div>
                  <div><a href="#" class="btn text-light theme-orange-btn btn-sm px-3 py-2 rounded-pill">View all</a></div>
                  
                </div>
              <div class="row theme-product">
                  <div class="col-sm-3">
                      <div class="card">
                          <a href="#"><img src="{{asset ('assets/images/product/R3.avif') }}" class="card-img-top" alt="..." style="height: 250px;"></a>
                          <div class="card-body">
                            <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Washing machine</a></h6>
                            <h5 class="card-title text-center">₹ 8,999.00</h5>
                          </div>
                  </div>
              </div>
          
              <div class="col-sm-3">
                  <div class="card">
                      <a href="#"><img src="{{asset ('assets/images/product/R1.jpg') }}" class="card-img-top" alt="..." style="height: 250px;"></a>
                      <div class="card-body">
                        <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Lady shoes</a></h6>
                        <h5 class="card-title text-center">₹ 599.00</h5>
                      </div>
              </div>
          </div>
          
          <div class="col-sm-3">
              <div class="card">
                  <a href="#"><img src="{{asset ('assets/images/product/R2.jpg') }}" class="card-img-top" alt="..." style="height: 250px;"></a>
                  <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">LED TV</a></h6>
                    <h5 class="card-title text-center">₹ 9,999.00</h5>
                  </div>
          </div>
          </div>
          
          <div class="col-sm-3">
              <div class="card">
                  <a href="#"><img src="{{asset ('assets/images/product/R4.avif') }}" class="card-img-top img-fluid" alt="..." style="height: 250px;"></a>
                  <div class="card-body">
                    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Wooden chair</a></h6>
                    <h5 class="card-title text-center">₹ 1,999.00</h5>
                  </div>
          </div>
          </div>
          
            </div>
          </section>
    </div><hr>
    <!--Review-->
    <section>
        <h2>02 Review</h2>
        <div class="row mt-4 mb-4">
            <div class="col-lg-1">
                <img src="{{asset ('assets/images/product/user.png') }}" class="border rounded-circle img-fluid">
            </div>
            <div class="col-lg-11">
                <div>
                <h4>Dilshad Alam</h4>
                <div class="d-flex">
                    <div class="flex-grow-1"><h6>12 Jan 2025</h6></div>
                    <div>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                </div>
                </div>
                <p> Optio consequuntur ea ipsum saepe, ex reiciendis magni,amet officia quod molestias!</p>
                <div>
                    <a href="#" class="btn theme-orange-btn btn-sm text-light rounded-pill me-1 px-3 py-2">Reply</a>
                  
                </div>
            </div>

            <div class="col-lg-1 mt-4">
                <img src="{{asset ('assets/images/product/user.png') }}" class="border rounded-circle img-fluid">
            </div>
            <div class="col-lg-11 mt-4">
                <div>
                <h4>Allen Jhone</h4>
                <div class="d-flex">
                    <div class="flex-grow-1"><h6>10 Dec 2024</h6></div>
                    <div>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                </div>
                </div>
                <p>Optio consequuntur ea ipsum saepe, ex reiciendis magni,laudantium amet officia quod molestias!</p>
                <div>
                    <a href="#" class="btn theme-orange-btn btn-sm text-light rounded-pill me-1 px-3 py-2">Reply</a>
                  
                </div>
            </div>
        </div>
      </section>

      <!--Add review-->
      <section>
        <div class="container my-5 bg-light p-5">
            <h2>Add a review</h2>
            <div class="row">
                <div class="col-lg-12">
                    <form action="">
                        <div class="form-text">Rate this Product? *
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <div class="row my-3">
                            <div class="col-lg-6 mb-3">
                                <input type="text" class="form-control form-control-lg" placeholder="Your Name">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <input type="text" class="form-control form-control-lg" placeholder="Your Email">
                            </div>
                            <div class="col-lg-12 mb-3">
                                <textarea name="" class="form-control form-control-lg" placeholder="Your Message" id="" cols="30" rows="5"></textarea>
                            </div>
                            <div>
                                <a href="#" class="btn theme-orange-btn text-light rounded-pill me-1  px-3 py-2">Post a comment<i class="fa-solid fa-arrow-right"></i></a>
                              
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </section>

    </div>
  </section>

@endsection

