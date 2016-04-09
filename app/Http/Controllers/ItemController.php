<?php

namespace Fridge\Http\Controllers;

use Illuminate\Http\Request;

use Fridge\Http\Requests;
use Fridge\Http\Requests\StoreItemRequest;
use Fridge\Item;
use Auth;
use Fridge\Category;

class ItemController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Auth::user()->items()->get();
        return view('item.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('item.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreItemRequest $request)
    {
        if(Item::where('name', $request->name)->count() > 0){
            $item = Item::where('name', $request->name)->first();
        }else{
            $input = $request->only('name', 'expire');
            $input['category_id'] = $request->category;
            $item = Item::create($input);
        }
        $pivots = $request->only('quantity', 'measure');
        if(empty($pivots['quantity'])){
            $pivots['quantity'] = 1;
        }
        $user = Auth::user()->items()->save($item, $pivots);

        return redirect()->route('item.create')->with('success', 'Item successfully added!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
