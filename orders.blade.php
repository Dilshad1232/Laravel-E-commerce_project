@extends('admin.include.main')
@push('title')
    <title>Admin -orders</title>
@endpush
@section('content')

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4 mt-4">
                        <div class="card p-3">
                            <div class="row">
                              <div class="col xl-12 col-md-12">
                                      <div class="d-flex">
                                      <h3>Orders</h3>
                                      <div class="ms-auto">
                                          {{-- <a href="#" class="text-decoration-none btn btn-dark btn-sm">View All</a> --}}
                                      </div>
                                  </div>
                                  <div class="mt-3">
                                      <table id="datatablesSimple">
                                          <thead>
                                            <tr>
                                              <th scope="col">Order Id</th>
                                              <th scope="col">Customer Name</th>
                                              <th scope="col">Commission (%)</th>
                                              <th scope="col">Total</th>
                                              <th scope="col">Status</th>
                                              <th scope="col">Action</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td>01</td>
                                              <td>Abhishek Raj Srivastav</td>
                                              <td>₹ 120</td>
                                              <td>₹ 1200.00 </td>
                                              <td>
                                                  <span class="badge rounded-pill text-bg-warning me-2">Processing</span>
                                              </td>
                                              <td>
                                                 {{-- <a href="#" class="text-decoration-none btn btn-success " href="#">Edit</a>
                                                  <a href="#" class="text-decoration-none btn btn-danger" href="#">Delete</a> --}}
                                                  <a href="{{url('admin/order-detail')}}" class="text-decoration-none btn btn-warning" href="#">View details</a>
                                              </td>
                                              </td>
                                            </tr>
                                            <tr>
                                                <td>02</td>
                                                <td>Aarif Ansari</td>
                                                <td>₹ 184</td>
                                                <td>₹ 2320.00 </td>
                                                <td>
                                                    <span class="badge rounded-pill text-bg-success me-2">Delivered</span>
                                                </td>
                                                <td>
                                                   {{-- <a href="#" class="text-decoration-none btn btn-success " href="#">Edit</a> --}}
                                                    {{-- <a href="#" class="text-decoration-none btn btn-danger" href="#">Delete</a> --}}
                                                    <a href="{{url('admin/order-detail')}}" class="text-decoration-none btn btn-warning" href="#">View details</a>
                                                </td>
                                                </td>
                                              </tr>
        
                                              <tr>
                                                <td>03</td>
                                                <td>Aman</td>
                                                <td>₹ 240</td>
                                                <td>₹ 1140.00 </td>
                                                <td>
                                                    <span class="badge rounded-pill text-bg-info me-2">On the way</span>
                                                </td>
                                                <td>
                                                   {{-- <a href="#" class="text-decoration-none btn btn-success " href="#">Edit</a> --}}
                                                    {{-- <a href="#" class="text-decoration-none btn btn-danger" href="#">Delete</a> --}}
                                                    <a href="{{url('admin/order-detail')}}" class="text-decoration-none btn btn-warning">View details</a>
                                                </td>
                                                </td>
                                              </tr>
                                          </tbody>
                                        </table>
                                  </div>
                                  
                              </div>
        
                           </div>
                           </div>
                            
                    </div>
                </main> 
               
@endsection
 