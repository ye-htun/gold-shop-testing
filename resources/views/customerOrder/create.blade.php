@extends('layout.master')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Customer Order</strong> Information</h1>
            <div class="row">
                <div class="col-md-2  my-4">
                    <a href="{{ route('customer_order.index') }}" class="btn btn-dark">Back</a>
                </div>
            </div>
            <form action="{{ route('customer_order.store') }}" method="post">
                @csrf
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <select class="form-select form-select-lg mb-3" name="item_id"
                                aria-label=".form-select-lg example" id="item_id">
                                <option value="0">Please Select</option>
                                @foreach ($items as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
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
                                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                @endforeach
                            </select>
                            <label for="floatingInput">Customer Name</label>
                            @error('customer_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="confirm_price" placeholder="Confirm Prices"
                                value="{{ old('confirm_price') }}">
                            <label for="floatingInput">Confirm Prices</label>
                            @error('confirm_price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="org_price" placeholder="Original Prices"
                                value="{{ old('org_price') }}">
                            <label for="floatingInput">Original Prices</label>
                            @error('org_price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" name="remark" placeholder="Leave a comment here" id="floatingTextarea2"
                                style="height: 100px" value="{{ old('remark') }}"></textarea>
                            <label for="floatingTextarea2">Remark</label>
                            @error('remark')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            {{-- <input type="text" class="form-control" name="confirm_status" placeholder="Confirm Status"
                                value="{{ old('confirm_status)') }}">
                            <label for="floatingInput">Confirm Status</label>
                            @error('confirm_status')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror --}}

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class=""
                                    for="confirm_status">Confirm Status</label>
                                <div class="d-flex justify-content-start align-items-center my-1">
                                    <div class="form-check me-3">
                                        <input class="form-check-input" type="radio" id="confirm_status1"
                                            name="confirm_status" value="1" >
                                        <label class="form-check-label" class="my-2" for="confirm_status1">Yes
                                            <small class="text-danger fs-6" id="program_category_id_error"></small></label>
                                    </div>
                                    <div class="form-check me-3">
                                        <input class="form-check-input" type="radio" checked id="confirm_status0"
                                            name="confirm_status" value="0">
                                        <label class="form-check-label" class="my-2" for="confirm_status0">No
                                            <small class="text-danger fs-6" id="program_category_id_error"></small></label>
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
                    <div class="col-6">
                        <button type="submit" class="btn btn-success">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    {{-- <script>
         $("#item").on('change', function() {
            alert("Hello W");
            // var item_id = $('#item_id').val();
            // if(item_id == 0)
            // {
            //     $('#org_price').prop('disabled', true);
            //     $('#org_price').val(0);
            // }else
            // {
            //     $('#org_price').prop('disabled', false);
            // }
            // var id = $(this).find(":selected").val();
            // $.ajax({
            //     type: 'GET',
            //     url: '/item/info',
            //     data: {
            //         id: id
            //     },
            //     success: function(data) {
            //         console.log(data);
            //     },
            //     error: function(data) {
            //         console.log(data);
            //     }
            // })
        })
    </script> --}}
@endsection
