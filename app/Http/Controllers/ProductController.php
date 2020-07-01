<?php

namespace App\Http\Controllers;

use App\Events\ProductViewEvent;
use App\Http\Requests\CreateProductRequest;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{
    public function index()
    {
        $Products = Product::all();
        return view("Product.index", compact(['Products']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Product.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $request)
    {
        $Product = new Product();
        $file = $request->file('photo');
        $name = $file->hashName();
//        $file->store('product');
        $file->move('image/product', $name);
        $Product->path = $name;
        $Product->title = $request->title;
        $Product->description = $request->des;
        $Product->time = $request->time;
        $Product->user_id = 2;
        $Product->save();
        return redirect('product');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Product = Product::find($id);
        event(new ProductViewEvent($Product));
        return view("Product.show", compact(['Product']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Product = Product::find($id);
        $user = Auth::user();
        if ($user->can('update', $Product)) {
            return view('Product.edit', compact(['Product']));
        } else {
            echo "<center>" . "شما اجازه ویرایش محصول دیگران را ندارید!" . "</center>";
        }
//        if (Gate::allows('edit-product',$Product)){
//            return view('Product.edit', compact(['Product']));
//        }
//        else{
//         echo "<center>"."شما اجازه ویرایش محصول دیگران را ندارید!"."</center>";
//        }
        }

        /**
         * Update the specified resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @param int $id
         * @return \Illuminate\Http\Response
         */
        public
        function update(Request $request, $id)
        {
            $Product = Product::find($id);
            $Product->title = $request->title;
            $Product->description = $request->des;
            $Product->save();
            return redirect('product');
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param int $id
         * @return \Illuminate\Http\Response
         */
        public
        function destroy($id)
        {
            $Product = Product::find($id);
            $Product->delete();
            return redirect('product');
        }
    }
