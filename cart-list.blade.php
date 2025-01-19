@extends('layouts.main')
@push('title')
    <title>Product</title>
@endpush
@section('content')
<div class="container-fluid bg-light p-5">
    <h1 class="text-center"><i class="fa-solid fa-cart-shopping"></i>Cart list</h1>
</div>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col"><h4>Id</h4></th>
                        <th scope="col"><h4>Product</h4></th>
                        <th scope="col"><h4>Price</h4></th>
                        <th scope="col"><h4>Quantity</h4></th>
                        <th scope="col"><h4>Subtotal</h4></th>
                        <th scope="col"><h4>Remove</h4></th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">01</th>
                        <td>
                            <div class="d-flex">
                                <div>
                                    <img src="{{asset ('assets/images/product/shoes.avif') }}" style="width: 50px;">
                                </div>
                                <div class="p-3"><h5>Shoes</h5></div>
                            </div>
                        </td>
                        <td>₹ 2,999.00</td>
                        <td>
                            <div>
                                <div class="d-flex flex-row mb-3">
                                    {{-- <div class="p-1"><h6>Quantity</h6></div> --}}
                                        <div class="p-1">
                                            <span class="btn btn-secondary rounded-start-pill btn-sm"><i class="fa-solid fa-minus"></i></span>
                                            <span class="mx-2">03</span>
                                            <span class="btn btn-secondary rounded-end-pill btn-sm"><i class="fa-solid fa-plus"></i></span>
                                        </div>
                                   
                                  </div>
                            </div>
                        </td>
                        <td>₹ 2,999.00</td>
                        <td>
                            <button type="button" class="btn-close" aria-label="Close"></button>
                        </td>
                      </tr>

                      <tr>
                        <th scope="row">1</th>
                        <td>
                            <div class="d-flex">
                                <div>
                                    <img src="{{asset ('assets/images/product/p1.avif') }}" style="width: 50px;">
                                </div>
                                <div class="p-3"><h5>Bag</h5></div>
                            </div>
                        </td>
                        <td>₹ 599.00</td>
                        <td>
                            <div>
                                <div class="d-flex flex-row mb-3">
                                    {{-- <div class="p-1"><h6>Quantity</h6></div> --}}
                                        <div class="p-1">
                                            <span class="btn btn-secondary rounded-start-pill btn-sm"><i class="fa-solid fa-minus"></i></span>
                                            <span class="mx-2">01</span>
                                            <span class="btn btn-secondary rounded-end-pill btn-sm"><i class="fa-solid fa-plus"></i></span>
                                        </div>
                                   
                                  </div>
                            </div>
                        </td>
                        <td>₹ 599.00</td>
                        <td>
                            <button type="button" class="btn-close" aria-label="Close"></button>
                        </td>
                      </tr>

                      <tr>
                        <th scope="row">1</th>
                        <td>
                            <div class="d-flex">
                                <div>
                                    <img src="{{asset ('assets/images/product/R4.avif') }}" style="width: 50px;">
                                </div>
                                <div class="p-3"><h5>Chair</h5></div>
                            </div>
                        </td>
                        <td>₹ 999.00</td>
                        <td>
                            <div>
                                <div class="d-flex flex-row mb-3">
                                    {{-- <div class="p-1"><h6>Quantity</h6></div> --}}
                                        <div class="p-1">
                                            <span class="btn btn-secondary rounded-start-pill btn-sm"><i class="fa-solid fa-minus"></i></span>
                                            <span class="mx-2">02</span>
                                            <span class="btn btn-secondary rounded-end-pill btn-sm"><i class="fa-solid fa-plus"></i></span>
                                        </div>
                                   
                                  </div>
                            </div>
                        </td>
                        <td>₹ 999.00</td>
                        <td>
                            <button type="button" class="btn-close" aria-label="Close"></button>
                        </td>
                      </tr>
                      
                    </tbody>
                  </table>
            </div>
            <div class="col-lg-5 ms-auto my-5">
                <div>
                    <h3>Prize Details</h3><hr>
                </div>
                <div class="d-flex">
                    <div><h5>Subtotal</h5></div>
                    <div class="ms-auto"><h5>₹ 2,999.00</h5></div>
                </div>

                <div class="d-flex">
                    <div><h5>Discount</h5></div>
                    <div class="ms-auto"><h5>₹ 199.00</h5></div>
                </div>

                <div class="d-flex">
                    <div><h5>Dilivery charge</h5></div>
                    <div class="ms-auto"><h5>Free</h5></div>
                </div>
                    <hr>
                <div class="d-flex">
                    <div><h5>Total</h5></div>
                    <div class="ms-auto"><h5>₹ 2,799.00</h5></div>
                </div>
                <div class="mt-3">
                    <a href="{{ url('/checkout/product') }}" class="btn theme-orange-btn text-light rounded-pill w-100 px-3 py-2">Proceed to Checkout<i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

