@extends('admin.include.main')
@push('title')
    <title>vendor -order-detail</title>
@endpush
@section('content')

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                     <div class="row my-5 justify-content-center">
                        <h6>Order details : Dec 25, 2024. (05 product)</h6>
                        <div class="col-xl-5 col-md-5 mt-3 border border-primary p-3 me-3">
                            <h5 class="text-dark ">Customer Information :</h5>
                            {{-- <h6 class="text-dark"></h6> --}}
                            <span class="text-dark"><strong>Name: </strong>Dilshad Alam</span><br>
                            <span class="text-dark"><strong>Email: </strong>dilshadalam12@gmail.com</span><br>
                            <span class="text-dark"><strong>Phone: </strong>+91 9793145874</span><br>
                            <span class="text-dark"><strong>Shipping Address: </strong>Molestiae autem officiis aliquam reiciendis quae odit.</span>
                        </div>
                        <div class="col-xl-5 col-md-5 mt-3 border border-primary p-3 ">
                            {{-- <h6>Order details : Dec 25, 2024. (05 product)</h6> --}}
                            <h5 class="text-dark">Order Summary :</h5>
                            {{-- <h6 class="text-dark">Molestiae autem officiis aliquam reiciendis quae odit.</h6> --}}
                            <span class="text-dark"><strong>Order id : </strong>01</span><br>
                            <span class="text-dark"><strong>Payment Method : </strong>Cash on Dilivery</span><br>
                            <span class="text-dark"><strong>Payment status : </strong><span class="badge rounded-pill text-bg-success">Success</span></span>
                            <br><br>
                            <h5 class="text-dark"><strong>Total : </strong>₹ 12,00.00</h5>
                        </div>
                     </div>
                      
                     <div class="row justify-content-center">
                        <div class="col-xl-10 col-md-10 ">
                            <div class="position-relative m-4">
                                <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 1px;">
                                  <div class="progress-bar" style="width: 70%"></div>
                                </div>
                                <button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">1</button>
                         
                                <button type="button" class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">2</button>
                                
                                <button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill" style="width: 2rem; height:2rem;">3</button>
                                
                              </div>
                        </div>
                        <div class="col-xl-12 col-md-12 ">
                            <div class="d-flex mx-5 ">
                                <div class="p-2 flex-fill mx-5">Iteam Received</div>
                                <div class="p-2 flex-fill me-5 ">Progress</div>
                                <div class="p-2 me-5">Dilivered</div>
                              </div>
                        </div>

                        <section>
                            <div class="container my-5">
                                <div class="row">
                                    <h3>Products</h3>
                                    <div class="col-lg-12">
                                        <table id="datatablesSimple">
                                            <thead>
                                              <tr>
                                                <th scope="col"><h5>Id</h5></th>
                                                <th scope="col"><h5>Product</h5></th>
                                                <th scope="col"><h5>Price</h5></th>
                                                <th scope="col"><h5>Quantity</h5></th>
                                                <th scope="col"><h5>Subtotal</h5></th>
                                                <th scope="col"><h5>Status</h5></th>
                                                {{-- <th scope="col"><h5>Action</h5></th> --}}
                        
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
                                                <td>
                                                    <span>
                                                         <span class="badge rounded-pill text-bg-primary">Shipped</span>
 
                                                    </span>
                                                </td>
                                                {{-- <td>
                                                    <a href="#" class="text-decoration-none btn btn-primary " href="#"><i class="fa-solid fa-truck"></i></a>
                                                    <a href="#" class="text-decoration-none btn btn-success" href="#"><i class="fa-solid fa-check"></i></a>
                                                    <a href="#" class="text-decoration-none btn btn-danger" href="#"><i class="fa-solid fa-xmark"></i></a>
                                                </td> --}}
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
                                                <td>
                                                    <span>
                                                         <span class="badge rounded-pill text-bg-success">Delivered</span>
 
                                                    </span>
                                                </td>
                                                {{-- <td>
                                                    <a href="#" class="text-decoration-none btn btn-primary " href="#"><i class="fa-solid fa-truck"></i></a>
                                                    <a href="#" class="text-decoration-none btn btn-success" href="#"><i class="fa-solid fa-check"></i></a>
                                                    <a href="#" class="text-decoration-none btn btn-danger" href="#"><i class="fa-solid fa-xmark"></i></a>
                                                </td> --}}
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
                                                <td>
                                                    <span>
                                                         <span class="badge rounded-pill text-bg-danger">Cancel</span>
 
                                                    </span>
                                                </td>
                                                {{-- <td>
                                                    <a href="#" class="text-decoration-none btn btn-primary " href="#"><i class="fa-solid fa-truck"></i></a>
                                                    <a href="#" class="text-decoration-none btn btn-success" href="#"><i class="fa-solid fa-check"></i></a>
                                                    <a href="#" class="text-decoration-none btn btn-danger" href="#"><i class="fa-solid fa-xmark"></i></a>
                                                </td> --}}
                                              </tr>
                        
                                           
                                              
                                            </tbody>
                                          </table>
                                    </div>
                                   
                                </div>
                            </div>
                        </section>

                     </div>
                    </div>
                </main>
@endsection
 