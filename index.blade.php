@extends('admin.include.main')
@push('title')
    <title>Dashboard -admin</title>
@endpush
@section('content')

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="my-4">Dashboard</h1>
                        {{-- <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol> --}}
                        <div class="row">
                            <div class="col-xl-3 col-md-3">
                                <div class="card bg-primary">
                                    <div class="card-body mx-auto mb-4 mt-4">
                                       <h5 class="text-center text-dark">Total Orders</h5>
                                       <h5 class="text-center text-dark">150</h5>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-xl-3 col-md-3">
                                <div class="card bg-warning">
                                    <div class="card-body mx-auto mb-4 mt-4">
                                       <h5 class="text-center text-dark">Total Commission</h5>
                                       <h5 class="text-center text-dark">₹ 15,590.00</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-3">
                                <div class="card bg-danger">
                                    <div class="card-body mx-auto mb-4 mt-4">
                                       <h5 class="text-center text-dark">Total Users</h5>
                                       <h5 class="text-center text-dark">75</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-3">
                                <div class="card bg-success">
                                    <div class="card-body mx-auto mb-4 mt-4">
                                       <h5 class="text-center text-dark">Total Vendors</h5>
                                       <h5 class="text-center text-dark">25</h5>
                                    </div>
                                </div>
                            </div>
    
                        </div>
                     <div class="row mt-3">
                        <div class="col xl-12 col-md-12">
                                <div class="d-flex">
                                <h4>Recent Order</h4>
                                <div class="ms-auto">
                                    <a href="{{url('admin/orders')}}" class="text-decoration-none btn btn-dark btn-sm">View All</a>
                                </div>
                            </div>
                            <div>
                                <table id="datatablesSimple">
                            
                                    <thead>
                                      <tr>
                                        <th scope="col">Order id</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Status</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>01</td>
                                        <td>12-12-2024</td>
                                        <td>₹ 1200.00</td>
                                        <td>
                                            <span class="badge rounded-pill text-bg-warning me-2">Processing</span>
                                            <a href="{{url('admin/order-detail')}}" class="text-decoration-none me-2">View details</a>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>02</td>
                                        <td>12-12-2024</td>
                                        <td>₹ 1200.00</td>
                                        <td>
                                            <span class="badge rounded-pill text-bg-info me-2">On the way</span>
                                            <a href="{{url('admin/order-detail')}}" class="text-decoration-none me-2">View details</a>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>03</td>
                                        <td>12-12-2024</td>
                                        <td>₹ 1200.00</td>
                                        <td>
                                            <span class="badge rounded-pill text-bg-success me-2">Delivered</span>
                                            <a href="{{url('admin/order-detail')}}" class="text-decoration-none me-2">View details</a>
                                        </td>
                                      </tr>
                                    
                                    </tbody>
                                  
                            </table>
                            </div>
                            
                        </div>

                     </div>
                      
                    </div>
                </main> 
               
@endsection
 