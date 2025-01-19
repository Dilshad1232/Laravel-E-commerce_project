@extends('layouts.main')
@push('title')
    <title>Product</title>
@endpush
@section('content')
<div class="container-fluid bg-light p-5">
    <h1 class="text-center"><i class="fa-solid fa-layer-group"></i>Checkout</h1>
</div>
<section>
<div class="container py-5">
    <div class="row">
        <h2>Billing Details</h2>
        <div class="col-lg-12">
            <form action="">
                <div class="row my-3">
                    <div class="col-lg-12 mb-3">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select your country</option>
                            <option value="1">India</option>
                            <option value="2">Australia</option>
                            <option value="3">America</option>
                            <option value="3">Srilanka</option>
                            <option value="3">Zimbabwe</option>
                            <option value="3">Afghanistan</option>
                        </select>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <input type="text" class="form-control " placeholder="First name">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <input type="text" class="form-control" placeholder="Last name">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <input type="tel" class="form-control " placeholder="Your phone">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <input type="email" class="form-control " placeholder="Your email">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <input type="number" class="form-control " placeholder="Pin codee">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <input type="text" class="form-control " placeholder="Land mark">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select yourcity</option>
                            <option value="1">Lucknow</option>
                            <option value="2">Gorakhpur</option>
                            <option value="3">Kushinagar</option>
                            <option value="3">Padrauna</option>
                            <option value="3">Thawe</option>
                            <option value="3">Deoria</option>
                        </select>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select your state</option>
                            <option value="1">Uttar Pradesh</option>
                            <option value="2">Punjab</option>
                            <option value="3">Gujrat</option>
                            <option value="3">Bihar</option>
                            <option value="3">Goa</option>
                            <option value="3">Telangana</option>
                        </select>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <textarea name="" class="form-control" placeholder="Your Address" id="" cols="30" rows="5"></textarea>
                    </div>
                    {{-- <div>
                        <a href="#" class="btn theme-orange-btn text-light rounded-pill me-1">Post a comment<i class="fa-solid fa-arrow-right"></i></a>
                      
                    </div> --}}
                </div>
            </form>
        </div>
    </div>
</div>
</section>

<!--Product list-->
<section>
    <div class="container">
        <div class="row">
            <h3>Your Order</h3>
            <div class="col-lg-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col"><h5>Id</h5></th>
                        <th scope="col"><h5>Product</h5></th>
                        <th scope="col"><h5>Price</h5></th>
                        <th scope="col"><h5>Quantity</h5></th>
                        <th scope="col"><h5>Subtotal</h5></th>
                        

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
                       <td>03</td>
                        <td>₹ 2,999.00</td>
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
                        <td>01</td>
                        <td>₹ 599.00</td>
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
                        <td>02</td>
                        <td>₹ 999.00</td>
                        
                      </tr>

                      <tr>
                        <th colspan="4"><h5>Total</h5></th>
                        <th><h5>₹ 4,597.00</h5></th>
                      </tr>
                      
                    </tbody>
                  </table>
            </div>
           
        </div>
    </div>
</section>

<!--Payment-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"checked>
                    <label class="form-check-label" for="flexRadioDefault1">
                      UPI
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                    <label class="form-check-label" for="flexRadioDefault2">
                      Credit/Debit card
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                    <label class="form-check-label" for="flexRadioDefault2">
                      Cash on dilivery
                    </label>
                  </div>
                  <div>
                    <a href="{{ url('') }}" class="btn theme-orange-btn text-light rounded-pill my-4 px-3 py-2">Place order <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
