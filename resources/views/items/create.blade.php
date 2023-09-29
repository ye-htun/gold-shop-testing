@extends('layout.master')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Item</strong> Information</h1>
            <div class="row">
                <div class="col-md-2  my-4">
                    <a href="{{ route('item.index') }}" class="btn btn-dark float-left ">Back</a>
                </div>
            </div>
            <form action="{{ route('item.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="name" placeholder="Your Full Name"
                                value="{{ old('name') }}" id="">
                            <label for="floatingInput">Item Name</label>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="item_code" placeholder="Your phone"
                                value="{{ old('item_code') }}" id="">
                            <label for="floatingInput">Item Code</label>
                            @error('item_code')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" name="price" placeholder="Your price"
                                value="{{ old('price') }}">
                            <label for="floatingInput">Your Price</label>
                            @error('price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" name="kyat" placeholder="Your kyat"
                                value="{{ old('kyat') }}">
                            <label for="floatingInput">Your Kyat</label>
                            @error('kyat')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" name="yway" placeholder="Your yway"
                                value="{{ old('yway') }}">
                            <label for="floatingInput">Your Yway</label>
                            @error('yway')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" name="description" placeholder="Your description" id="floatingTextarea2"
                                style="height: 100px" value="{{ old('remark') }}"></textarea>
                            <label for="floatingInput">Your Description</label>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="file" class="form-control" name="image" placeholder="Your image"
                                value="{{ old('image') }}">
                            {{-- <label for="floatingInput">Your Image</label> --}}
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <button type="submit" class="btn btn-success">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection
