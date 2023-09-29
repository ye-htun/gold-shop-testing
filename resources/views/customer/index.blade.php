@extends('layout.master')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Customer</strong> Information</h1>
            <div class="row">
                <div class="col-md-2 ms-auto">
                    <a href="{{ route('customer.create') }}" class="btn btn-dark float-left ">Add New Customer</a>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>


                            @foreach ($customers as $customer)
                                <form action="{{ route('customer.destroy', $customer->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $customer->name }}</td>
                                        <td>{{ $customer->phone }}</td>
                                        <td>{{ $customer->address }}</td>

                                        <td><a href="{{ route('customer.show', $customer->id) }}"
                                                class="btn btn-success mx-2">View</a>
                                            <a href="{{ route('customer.edit', $customer->id) }}"
                                                class="btn btn-warning mx-2">Edit</a>
                                            <button href="" class="btn btn-danger" type="submit"
                                                onclick="return(confirm('Are you sure?'))">Delete</button>
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
