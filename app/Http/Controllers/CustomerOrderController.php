<?php

namespace App\Http\Controllers;
use App\Http\Requests\CustomerOrderRequest;
use App\Models\Customer;
use App\Models\CustomerOrder;
use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;

class CustomerOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $customer_order;
    protected $customers;
    protected $items;

    public function __construct(CustomerOrder $customerOrder,Customer $customer,Item $item)
    {
        $this->customer_order = $customerOrder;
        $this->customers = $customer;
        $this->items = $item;
    }

    public function index()
    {
        // $customer_order = $this->customer_order->with('customers','items')->get();
        $customerOrders = $this->customer_order->all();
        return view('customerOrder.index',compact('customerOrders'));
    }
    public function create()
    {
        $items = $this->items->all();
        $customers = $this->customers->all();
        return view('customerOrder.create',compact('items','customers'));
    }
    public function store(CustomerOrderRequest $request)
    {
            $customerOrder = $this->customer_order;
            $customerOrder->create($request->all());

            return redirect()->route('customer_order.index');
    }
    public function show($id)
    {
        $customer_order = $this->customer_order->with('customers','items')->find($id);
        return view('customerOrder.view',compact('customer_order'));
    }

    public function edit($id)
    {
        $items = $this->items->all();
        $customers = $this->customers->all();
        $customer_order = $this->customer_order->with('customers','items')->find($id);
        return view('customerOrder.edit',compact('customer_order','items','customers'));
    }

    public function update(CustomerOrderRequest $request,$id)
    {
        $customerOrder = $this->customer_order->find($id);
        $customerOrder->update($request->all());
        return redirect()->route('customer_order.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $customerOrder = $this->customer_order->find($id);
        $customerOrder->delete();
        return redirect()->route('customer_order.index');
    }
}
