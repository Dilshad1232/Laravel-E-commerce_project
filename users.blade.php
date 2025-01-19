@extends('admin.include.main')
@push('title')
    <title>Manage -users</title>
@endpush
@section('content')

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4 mt-4">
                        <div class="card p-3">
                            <div class="row">
                              <div class="col xl-12 col-md-12">
                                      <div class="d-flex">
                                      <h3>Manage Users</h3>
                                      <div class="ms-auto">
                                          {{-- <a href="#" class="text-decoration-none btn btn-dark btn-sm">View All</a> --}}
                                      </div>
                                  </div>
                                  <div class="mt-3">
                                      <table id="datatablesSimple">
                                          <thead>
                                            <tr>
                                              <th scope="col">Sr.n</th>
                                              <th scope="col">Customer Name</th>
                                              <th scope="col">Email</th>
                                              <th scope="col">Address</th>
                                              <th scope="col">Phone</th>
                                              <th scope="col">Status</th>
                                              <th scope="col">Action</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                          
                                              
                                              <tr>
                                                <td>01</td>
                                                <td>Abhishek Raj </td>
                                                <td>abhisheki12@gmail.com</td>
                                                <td>
                                                    Lorem consectetur adipisicing elit.
                                                </td>
                                                <td>+91 9876543210</td>
                                                <td><span class="badge rounded-pill text-bg-success">Unblock</span></td>
                                                <td>
                                                    <a href="#" class="text-decoration-none btn btn-success" href="#">
                                                      <i class="fa-solid fa-shield"></i></a>
                                                      <a href="#" class="text-decoration-none btn btn-danger" href="#">
                                                        <i class="fa-solid fa-ban"></i></a>
                                                </td>
                                                </td>
                                              </tr>

                                              <tr>
                                                <td>02</td>
                                                <td>Dilshad Alam </td>
                                                <td>dilshad12@gmail.com</td>
                                                <td>
                                                    Lorem ipsum dolor sit amet elit.
                                                </td>
                                                <td>+91 8876546777</td>
                                                <td><span class="badge rounded-pill text-bg-danger">Block</span></td>
                                                <td>
                                                    <a href="#" class="text-decoration-none btn btn-success" href="#">
                                                      <i class="fa-solid fa-shield"></i></a>
                                                      <a href="#" class="text-decoration-none btn btn-danger" href="#">
                                                        <i class="fa-solid fa-ban"></i></a>
                                                </td>
                                                </td>
                                              </tr>

                                              <tr>
                                                <td>03</td>
                                                <td>Arbaz  </td>
                                                <td>arbaz1234@gmail.com</td>
                                                <td>
                                                    Lorem amet consectetur adipisicing elit.
                                                </td>
                                                <td>+91 89765467887</td>
                                                <td><span class="badge rounded-pill text-bg-success">Unblock</span></td>
                                                <td>
                                                    <a href="#" class="text-decoration-none btn btn-success" href="#">
                                                      <i class="fa-solid fa-shield"></i></a>
                                                      <a href="#" class="text-decoration-none btn btn-danger" href="#">
                                                        <i class="fa-solid fa-ban"></i></a>
                                                </td>
                                                </td>
                                              </tr>

                                              <tr>
                                                <td>04</td>
                                                <td>Ashis Raj </td>
                                                <td>ashishraj89@gmail.com</td>
                                                <td>
                                                    Lorem ipsum dolor sit amet consectetur.
                                                </td>
                                                <td>+91 8787657893</td>
                                                <td><span class="badge rounded-pill text-bg-danger">Block</span></td>
                                                <td>
                                                    <a href="#" class="text-decoration-none btn btn-success" href="#">
                                                      <i class="fa-solid fa-shield"></i></a>
                                                      <a href="#" class="text-decoration-none btn btn-danger" href="#">
                                                        <i class="fa-solid fa-ban"></i></a>
                                                </td>
                                                </td>
                                              </tr>

                                              <tr>
                                                <td>05</td>
                                                <td> Vivek Kumar </td>
                                                <td>vivekku23@gmail.com</td>
                                                <td>
                                                    Lorem ipsum dolor sit adipisicing elit.
                                                </td>
                                                <td>+91 9187654678</td>
                                                <td><span class="badge rounded-pill text-bg-success">Unblock</span></td>
                                                <td>
                                                    <a href="#" class="text-decoration-none btn btn-success" href="#">
                                                      <i class="fa-solid fa-shield"></i></a>
                                                      <a href="#" class="text-decoration-none btn btn-danger" href="#">
                                                        <i class="fa-solid fa-ban"></i></a>
                                                </td>
                                                </td>
                                              </tr>

                                              <tr>
                                                <td>06</td>
                                                <td>Akhilesh Pandey </td>
                                                <td>Akhilesh3@gmail.com</td>
                                                <td>
                                                    Lorem ipsum dolor sit consectetur adipisicing.
                                                </td>
                                                <td>+91 7846786589</td>
                                                <td><span class="badge rounded-pill text-bg-success">Unblock</span></td>
                                                <td>
                                                    <a href="#" class="text-decoration-none btn btn-success" href="#">
                                                      <i class="fa-solid fa-shield"></i></a>
                                                      <a href="#" class="text-decoration-none btn btn-danger" href="#">
                                                        <i class="fa-solid fa-ban"></i></a>
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
 