<?php

namespace App\Http\Controllers\Merchant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Item;
use App\Merchant;
use Illuminate\Support\Facades\Auth;

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
        $items = Item::paginate(15);
        return view('merchant.items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('merchant.items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // Store Image
        $file = $request->file('featured_image');
        $file = $file->move(public_path('uploads'), $file->getClientOriginalName());
        // Create Item
        $merchant = Merchant::where('user_id', Auth::user()->id)->first();
        $merchant->items()->create($request->except(['featured_image'])+['featured_image' => "/uploads/{$file->getFileName()}"]);

        return redirect(route('merchant.items.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return view('merchant.items.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        // Store Image
        $file = $request->file('featured_image');
        if ($file !== null) {
            $file = $file->move(public_path('uploads'), $file->getClientOriginalName());
            $item->update($request->except(['featured_image'])+['featured_image' => "/uploads/{$file->getFileName()}"]);
        } else {
            $item->update($request->except(['featured_image']));
        }

        return redirect(route('merchant.items.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect(route('merchant.items.index'));
    }
}
