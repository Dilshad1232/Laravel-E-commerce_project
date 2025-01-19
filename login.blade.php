@extends('admin.layouts.main') 
@push('title')
    <title>admin -login</title>
@endpush
   @section('content') 
   
<section>
    <div class="container-fluid bg-light p-5">
    <h1 class="text-center"><i class="fa-solid fa-user"></i> Admin Login</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{asset ('assets/images/product/admin.jpg') }}" class="mb-5 rounded-2 img-fluid" style="height: 350px; width: 100%;">
                </div>
                <div class="col-lg-6">
                   
                        <form action="#">
                            <div class="row">
                            
                            <div class="col-lg-12 col-sm-12">
                                <label class="form-label">Username:</label>
                                <input type="tel" class="form-control" placeholder="Dilshad Alam ">
                              </div>
                              
                              <div class="col-lg-12 col-sm-12">
                                <label class="form-label">Password:</label>
                                <input type="password" class="form-control" placeholder="******">
                              </div>
                              
                              <div class="col-lg-12 col-sm-12 mt-3">
                                <a href="#" type="btn" class="btn btn-primary text-light form-control">Login</a>
                              </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section> 

@endsection