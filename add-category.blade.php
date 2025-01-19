@extends('admin.include.main')
@push('title')
    <title>admin -addcategory</title>
@endpush
@section('content')

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4 mt-4">
                        {{-- <h1 class="my-4">Dashboard</h1> --}}
                        <div class="card p-2">
                            <div class="row">
                                <div class="col-xl-8 col-md-8">
                                    <h4>Add Category</h4>
                                    <div class="row">
                                        <div class="col-sm-12 mt-1">
                                            <label class="form-label">Category Name:</label>
                                            <input type="text" class="form-control" placeholder="Electronics">
                                        </div>
                                        <div class="col-sm-12 mt-1">
                                            <label class="form-label">Commission (%):</label>
                                            <input type="text" class="form-control" placeholder="20">
                                        </div>
                                        <div class="col-sm-12 mt-3">
                                            <button type="submit" class="btn btn-primary btn-sm">Add Category</button>
                                        </div>
                                    </div>
                                </div>
                                                    
                                    
                                
                            </div>
                        </div>
                        
                    </div>
                </main> 
               
@endsection
 