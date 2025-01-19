@extends('admin.include.main')
@push('title')
    <title>admin -viewcategory</title>
@endpush
@section('content')

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4 mt-4">
                        <div class="card p-3">
                            <div class="row">
                              <div class="col xl-12 col-md-12">
                                      <div class="d-flex">
                                      <h3>View Category</h3>
                                      <div class="ms-auto">
                                          {{-- <a href="#" class="text-decoration-none btn btn-dark btn-sm">View All</a> --}}
                                      </div>
                                  </div>
                                  <div class="mt-3">
                                    <table id="datatablesSimple">
                                        <thead>
                                          <tr>
                                            <th scope="col"><h5>Sr No.</h5></th>
                                            <th scope="col"><h5>Category Name</h5></th>
                                            <th scope="col"><h5>Commission (%)</h5></th>
                                            <th scope="col"><h5>Action</h5></th>
                    
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">01</th>
                                           <td>Electronics</td>
                                           <td>20</td>
                                            <td>
                                                <a href="{{url('admin/edit-category')}}" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                            </td>
                                          </tr>
                    
                                          <tr>
                                            <th scope="row">02</th>
                                           <td>Cloths</td>
                                           <td>30</td>
                                            <td>
                                                <a href="{{url('admin/edit-category')}}" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                            </td>
                                          </tr>
                    
                                          <tr>
                                            <th scope="row">03</th>
                                           <td>Furniture</td>
                                           <td>40</td>
                                            <td>
                                                <a href="{{url('admin/edit-category')}}" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                            </td>
                                          </tr>

                                          <tr>
                                            <th scope="row">04</th>
                                           <td>Grocery</td>
                                           <td>18</td>
                                            <td>
                                                <a href="{{url('admin/edit-category')}}" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
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
 