@extends('layouts.main')
@push('title')
    <title>login</title>
@endpush
@section('content')
<div class="container-fluid bg-light p-5">
    <h1 class="text-center"><i class="fa-solid fa-user"></i> User Login</h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{asset ('assets/images/product/userimg.avif') }}" class="mb-5 w-100 rounded-3 img-fluid">
                </div>
                <div class="col-lg-6">
                    <form action="#">
                        <form>
                            <div class="mb-3">
                              <label class="form-label">Please enter your OTP</label>
                              <input type="password" class="form-control" placeholder="******">
                            </div>
                            <button type="btn" class="btn theme-orange-btn text-light form-control">Login</button>
                            <div class="text-center p-5 my-5">Don't have an account?
                                <a href="{{url('/registration')}}" class="text-decoration-none"> Signup</a>
                            </div>
                          </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection