@extends('layout.master')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Employee</strong> Information</h1>
            <div class="row">
                <div class="col-md-2  my-4">
                    <a href="{{ route('customer.index') }} " class="btn btn-dark float-left">Back</a>
                </div>
            </div>
            <form action="{{ route('customer.update', $customer->id) }}" method="post">
                @csrf
                @method('put')
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="name" placeholder="Your Full Name"
                                value="{{ $customer->name }}">
                            <label for="floatingInput">Your Full Name</label>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="address" placeholder="address"
                                value="{{ $customer->address }}">
                            <label for="floatingInput">Your Address</label>
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="phone" placeholder="phone"
                                value="{{ $customer->phone }}">
                            <label for="floatingInput">Your Phone</label>
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                </div>

                <div class="row">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>

                </div>
            </form>
        </div>
    </main>
@endsection
