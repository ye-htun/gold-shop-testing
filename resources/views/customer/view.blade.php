@extends('layout.master')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Customer</strong> Information</h1>
            <div class="row">
                <div class="col-md-2 ">
                    <a href="{{ route('customer.index') }} " class="btn btn-dark float-right">Back</a>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                            </tr>
                        </thead>

                        <tbody>


                                <form action="{{ route('customer.destroy', $customer->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <tr>
                                        <td>{{ $customer->name }}</td>
                                        <td>{{ $customer->phone }}</td>
                                        <td>{{ $customer->address }}</td>
                                    </tr>
                                </form>

                        </tbody>
                    </table>
                </div>
            </div>



        </div>
    </main>
@endsection


