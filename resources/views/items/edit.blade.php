
@extends('layout.master')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Item</strong> Information</h1>
            <div class="row">
                <div class="col-md-2  my-4">
                    <a href="{{route('item.index')}} " class="btn btn-dark float-left">Back</a>
                </div>
            </div>
                    <form action="{{route('item.update',$item->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="name" placeholder="Item Name" value="{{($item->name)}}">
                                    <label for="floatingInput" >Item Name</label>
                                    @error('name')
                                        <span class="text-danger">{{$message }}</span>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="item_code" placeholder="Item Code" value="{{($item->item_code)}}">
                                    <label for="floatingInput" >Your Item Code</label>
                                    @error('item_code')
                                        <span class="text-danger">{{$message }}</span>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="price" placeholder="price" value="{{($item->price)}}">
                                    <label for="floatingInput" >Price</label>
                                    @error('price')
                                        <span class="text-danger">{{$message }}</span>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="kyat" placeholder="Kyat" value="{{($item->kyat)}}">
                                    <label for="floatingInput" >Kyat</label>
                                    @error('kyat')
                                        <span class="text-danger">{{$message }}</span>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="yway" placeholder="yway" value="{{($item->yway)}}">
                                    <label for="floatingInput" >yway</label>
                                    @error('yway')
                                        <span class="text-danger">{{$message }}</span>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="description" placeholder="description" value="{{($item->description)}}">
                                    <label for="floatingInput" >description</label>
                                    @error('description')
                                        <span class="text-danger">{{$message }}</span>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="file" class="form-control" name="image" placeholder="image" value="{{($item->image)}}">
                                    <input type="hidden" name="old_img" value="{{ $item->image }}">
                                    <img src="{{ asset('img/' . $item->image) }}" alt="" class="w-30" height="150px">
                                    {{-- <label for="floatingInput" >image</label> --}}
                                    @error('image')
                                        <span class="text-danger">{{$message }}</span>
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
