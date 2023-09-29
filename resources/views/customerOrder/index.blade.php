@extends('layout.master')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Customer</strong> Information</h1>
            <div class="row">
                <div class="col-md-2 ms-auto">
                    <a href="{{ route('customer_order.create') }}" class="btn btn-dark float-left ">Add New Order</a>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Item Name</th>
                                <th>Customer Name</th>
                                <th>Confrim Status</th>
                                <th>Confrim Prices</th>
                                <th>Origianl Prices</th>
                                <th>Remark</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>


                            @foreach ($customerOrders as $customer_order)
                                <form action="{{ route('customer_order.destroy', $customer_order->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $customer_order->items->name }}</td>
                                        <td>{{ $customer_order->customers->name }}</td>
                                        <td>
                                            @if ($customer_order->confirm_status == 1)
                                                Yes
                                            @else
                                                No
                                            @endif
                                        </td>
                                        <td>{{ $customer_order->confirm_price }}</td>
                                        <td>{{ $customer_order->org_price }}</td>
                                        <td>{{ $customer_order->remark }}</td>

                                        <td><a href="{{ route('customer_order.show', $customer_order->id) }}"
                                                class="btn btn-success mx-2">View</a>
                                            <a href="{{ route('customer_order.edit', $customer_order->id) }}"
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
