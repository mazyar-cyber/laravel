<?php

namespace App\Http\Controllers;

use App\Basket;
use App\Http\Requests\CreateBasketRequest;
use Illuminate\Http\Request;
//یک تغییر ایجاد میکنم
class BasketController extends Controller
{
    public function index()
    {
        $baskets = Basket::all();
        return view("basket.showBasket", compact(['baskets']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("basket.form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBasketRequest $request)
    {
        $basket = new Basket();
        $basket->text = $request->name;
        $basket->save();
        return redirect('basket');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $basket = Basket::find($id);
        return view('basket.detailBasket', compact(['basket']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $basket = Basket::find($id);
        return view("basket.editbasket", compact(['basket']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateBasketRequest $request, $id)
    {
        $basket = Basket::find($id);
        $basket->text = $request->name;
        $basket->save();
        return redirect('basket');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $basket = Basket::find($id);
        $basket->delete();
        return redirect('basket');
    }
}
