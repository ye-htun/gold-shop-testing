@extends('layout.master')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Item</strong> Information</h1>
            <div class="row">
                <div class="col-md-2 ">
                    <a href="{{route('item.index')}} " class="btn btn-dark float-left">Back</a>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Item Code</th>
                                <th>Price</th>
                                <th>kyat</th>
                                <th>Yway</th>
                                <th>Description</th>
                                <th>Image</th>
                            </tr>
                        </thead>

                        <tbody>
                            <form action="{{route('item.destroy',$item->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->item_code}}</td>
                                    <td>{{$item->price}}</td>
                                    <td>{{$item->kyat}}</td>
                                    <td>{{$item->yway}}</td>
                                    <td>{{$item->description}}</td>
                                    <td><img src="{{ asset('img/' . $item->image) }}" alt="" class="w-30" height="150px"></td>
                                </tr>
                            </form>
                        </tbody>
                    </table>
                </div>
            </div>



        </div>
    </main>
@endsection



