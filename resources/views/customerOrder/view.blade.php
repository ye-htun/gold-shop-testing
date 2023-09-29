{{-- @extends('layout.master')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-md-4 "'">
                    <a href="{{ route('customer_order.index') }} " class="btn btn-dark float-left">Back</a>
                </div>
            </div>
            <div class="card content-center col-md-6">
                <div class="card-title">
                    <h2>Customer Information</h2>

                </div>
                <div class="row">
                    <div class="col-md-6">

                        <span>Name::&nbsp;{{ $customer_order->customers->name }}</span>
                        <span>Name::&nbsp;{{ $customer_order->items->name }}</span>
                        <br>
                        <span>Confirm Status::{{ $customer_order->confirm_status }}</span>
                        <br>
                        <br>
                        <span>Confirm price::{{ $customer_order->confirm_price }}</span>
                        <br>
                        <br>
                        <span>Original Price::{{ $customer_order->org_price }}</span>
                        <br>
                        <br>
                        <span>remark::{{ $customer_order->remark }}</span>
                        <br>
                    </div>
                </div>
            </div>



        </div>
    </main>
@endsection --}}
@extends('layout.master')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Customer</strong> Information</h1>
            <div class="row">
                <div class="col-md-2">
                    <a href="{{ route('customer_order.index') }} " class="btn btn-dark float-left">Back</a>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Item Name</th>
                                <th>Customer Name</th>
                                <th>Confrim Status</th>
                                <th>Confrim Prices</th>
                                <th>Origianl Prices</th>
                                <th>Remark</th>
                            </tr>
                        </thead>

                        <tbody>


                            {{-- @foreach ($customerOrders as $customer_order) --}}
                                <form action="{{ route('customer_order.destroy', $customer_order->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <tr>
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
                                    </tr>
                                </form>
                            {{-- @endforeach --}}

                        </tbody>
                    </table>
                </div>
            </div>



        </div>
    </main>
@endsection
