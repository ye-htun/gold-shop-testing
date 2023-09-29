
@extends('layout.master')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Item</strong> Information</h1>
            <div class="row">
                <div class="col-md-2 ms-auto">
                    <a href="{{route('item.create')}}" class="btn btn-dark float-left ">Add New Item</a>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Item Code</th>
                                <th>Price</th>
                                <th>kyat</th>
                                <th>Yway</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>


                            @foreach ($items as $item)
                            <form action="{{route('item.destroy',$item->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->item_code}}</td>
                                    <td>{{$item->price}}</td>
                                    <td>{{$item->kyat}}</td>
                                    <td>{{$item->yway}}</td>
                                    <td>{{$item->description}}</td>
                                    <td><img src="{{ asset('img/' . $item->image) }}" alt="" class="w-30" height="150px"></td>

                                    <td><a href="{{route('item.show',$item->id)}}" class="btn btn-success mx-2">View</a>
                                    <a href="{{route('item.edit',$item->id)}}" class="btn btn-warning mx-2">Edit</a>
                                    <button href="" class="btn btn-danger" type="submit" onclick="return(confirm('Are you sure?'))">Delete</button>
                                </td>
                                </tr>
                            </form>


                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>



        </div>
    </main>
@endsection
