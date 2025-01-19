@extends('vendor.include.main')
@push('title')
    <title>settings</title>
@endpush
@section('content')

            <div id="layoutSidenav_content">
                <main>
                   <div class="container p-2">
                    <div class="card p-4 my-4">
                        <div class="row">
                            <div class="col-xl-8 col-md-8">
                                <h4>Basic Information</h4>
                                <div class="row">
                                    <div class="col-sm-12 mt-1">
                                        <label class="form-label">Identification Number:</label>
                                        <input type="text" class="form-control" placeholder="PAN/Aadhar no">
                                    </div>
                                    <div class="col-sm-6 mt-1">
                                        <label class="form-label">Business name:</label>
                                        <input type="text" class="form-control" placeholder="ABC PVT. LTD.">
                                    </div>
                                    <div class="col-sm-6 mt-1">
                                        <label class="form-label">User name:</label>
                                        <input type="text" class="form-control" placeholder="Dilshad97">
                                    </div>
                                    <div class="col-sm-12 mt-1">
                                        <label class="form-label">Email:</label>
                                        <input type="email" class="form-control" placeholder="abc@gmail.com">
                                    </div>
                                    <div class="col-sm-12 mt-1">
                                        <label class="form-label">Phone:</label>
                                        <input type="tel" class="form-control" placeholder="+91 0000000000">
                                    </div>
                                    {{-- <div class="col-sm-12 mt-1">
                                        <button type="submit" class="btn btn-primary btn-sm">Save change</button>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4 mt-3">
                                <div class="text-center">
                                    <img src="{{asset ('assets/images/product/user.png') }}" class="border rounded-circle img-fluid" style="width: 200px;">
                                    <div class="mt-3">
                                        <div>
                                            <label for="image" class="form-label btn btn-primary btn-sm">Choose image</label>
                                            <input type="file" class="form-control-file d-none" id="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card p-4">
                        <div class="row ">
                            <div class="col-xl-12 col-md-12">
                                <h4>Business Information</h4>
                                <div class="row">
                                    <div class="col-sm-12 mt-1">
                                        <label class="form-label">Business Type:</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option >select business type</option>
                                            <option value="India">Corporation</option>
                                            <option value="Japan">Partnership</option>
                                            <option value="Nepal">Sole</option>
                                          </select>
                                    </div>
                                    <div class="col-sm-6 mt-1">
                                        <label class="form-label">GST No:</label>
                                        <input type="text" class="form-control" placeholder="ABC123ZXA456CI">
                                    </div>
                                 
                                    <div class="col-sm-6 mt-1">
                                        <label class="form-label">Business Category:</label>
                                       <input type="text" name="" id="" class="form-control" placeholder="Deal in cloths">
                                    </div>
                                    
                                    {{-- <div class="col-sm-12 mt-1">
                                        <button type="submit" class="btn btn-primary btn-sm">Save change</button>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card p-4">
                        <div class="row ">
                            <div class="col-xl-12 col-md-12">
                                <h4>Payment Information</h4>
                                <div class="row">
                                    <div class="col-sm-6 mt-1">
                                        <label class="form-label">Bank Account Number:</label>
                                        <input type="text" class="form-control" placeholder="088665467867">
                                    </div>
                                 
                                    <div class="col-sm-6 mt-1">
                                        <label class="form-label">Prefer Paymnet Method:</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option >Select Payment Method</option>
                                            <option value="India">PayPal</option>
                                            <option value="Japan">Bank Transfer</option>
                                            <option value="Nepal">E wallet</option>
                                          </select>
                                    </div>
                                    
                                    <div class="col-sm-12 mt-3">
                                        <button type="submit" class="btn btn-primary btn-sm">Save change</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                   </div>
                </main>
@endsection
 