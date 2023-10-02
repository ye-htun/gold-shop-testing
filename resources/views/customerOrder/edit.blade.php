@extends('layout.master')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Customer Order</strong> Information</h1>
            <div class="row">
                <div class="col-md-2  my-4">
                    <a href="{{ route('customer_order.index') }} " class="btn btn-dark float-left">Back</a>
                </div>
            </div>
            <form action="{{ route('customer_order.update', $customer_order->id) }}" method="post">
                @csrf
                @method('put')
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <select class="form-select form-select-lg mb-3" name="item_id"
                                aria-label=".form-select-lg example" id="item">
                                <option selected>Please Select</option>
                                @foreach ($items as $item)
                                    <option value="{{ $item->id }}" @if ($item->id == $customer_order->items->id) selected @endif>
                                        {{ $item->name }}</option>
                                @endforeach
                            </select>
                            <label for="floatingInput">Item Name</label>
                            @error('item_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select form-select-lg mb-3" name="customer_id"
                                aria-label=".form-select-lg example">
                                <option selected>Please Select</option>
                                @foreach ($customers as $customer)
                                    <option value="{{ $customer->id }}" @if ($customer->id == $customer_order->customers->id) selected @endif>
                                        {{ $customer->name }}</option>
                                @endforeach
                            </select>
                            <label for="floatingInput">Customer Name</label>
                            @error('customer_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="confirm_price" placeholder="Confrim Price"
                                value="{{ $customer_order->confirm_price }}">
                            <label for="floatingInput">Confrim Price</label>
                            @error('confirm_price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="org_price" placeholder="Original Price"
                                value="{{ $customer_order->org_price }}">
                            <label for="floatingInput">Original Price</label>
                            @error('org_price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="remark" placeholder="Remark"
                                value="{{ $customer_order->remark }}">
                            <label for="floatingInput">Remark</label>
                            @error('remark')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="confirm_status" placeholder="Confrim Status"
                                value="{{ $customer_order->confirm_status }}">
                            <label for="floatingInput">Confrim Status</label>
                            @error('confirm_status')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div> --}}

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="" for="confirm_status">Confirm Status</label>
                                <div class="d-flex justify-content-start align-items-center my-1">
                                    <div class="form-check me-3">
                                        <input class="form-check-input" type="radio" id="confirm_status1"
                                            name="confirm_status" value="1"
                                            @if ($customer_order->confirm_status == 1) checked @endif>
                                        <label class="form-check-label" class="my-2" for="confirm_status1">Yes</label>
                                    </div>
                                    <div class="form-check me-3">
                                        <input class="form-check-input" type="radio" id="confirm_status0"
                                            name="confirm_status" value="0"
                                            @if ($customer_order->confirm_status == 0) checked @endif>
                                        <label class="form-check-label" class="my-2" for="confirm_status0">No</label>
                                    </div>
                                </div>

                                @if ($errors->has('confirm_status'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('confirm_status') }}
                                    </div>
                                @endif
                            </div>
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
