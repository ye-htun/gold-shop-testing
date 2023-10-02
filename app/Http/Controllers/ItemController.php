<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemUpdateRequest;
use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Requests\ItemRequest;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $item;
    public function __construct(Item $item)
    {
        $this->item = $item;
    }
    public function index()
    {
        $items = $this->item->all();
        return view('items.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ItemRequest $request)
    {

        $file=$request->image;
        $photo_name=$request->image->getClientOriginalName();
        $new_name=time().$photo_name;
        $destination_path=public_path().'/img';
        $file->move($destination_path,$new_name);

        $this->item->create([
            'name'=>$request->name,
            'item_code'=>$request->item_code,
            'price'=>$request->price,
            'kyat'=>$request->kyat,
            'yway'=>$request->yway,
            'description'=>$request->description,
            'image'=>$new_name
        ]);
        return redirect()->route('item.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = $this->item->find($id);
        return view('items.view',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = $this->item->find($id);


        return view('items.edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ItemUpdateRequest $request, $id)
    {
        $item = $this->item->find($id);
        $data = $request->all();
        if ($request->hasFile('image')) {
            $file=$request->image;
            $photo_name=$request->image->getClientOriginalName();
            $new_name=time().$photo_name;
            $destination_path=public_path().'/img';
            $file->move($destination_path,$new_name);
            $data['image'] = $new_name;
        } else
        {
            $data['image'] = $request->old_img;
        }

        $item->update($data);
        return redirect()->route('item.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = $this->item->find($id);
        $item->delete();
        return redirect()->route('item.index');
    }
    // public function getInfo(Request $request){
    //     return $this->item->find($request->id);
    // }
}
