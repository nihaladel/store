<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource. 
     * 
     * @return Illuminate\Http\Resource
     */
    public function index(){
        $Products=Product::all();
        return view('admin.products.index',compact('Products'));
    }
    /**
     * Show the form for creating a new resource. 
     * 
     * @return Illuminate\Http\Resource
     */

    public function create(){
        $categories=Category::all();
        return view('admin.products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage. 
     * 
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\Resource
     */

    public function store(Request $request){
        $product= new Product;

        $product ->name =$request->name;
        $product ->quantity =$request->quantity;
        $product ->price=$request->price;
        $product ->category_id=$request->category;
        $product ->description=$request->description;

        $product->save();
        return redirect()->back();

    }
    /**
     * Display the specified resource . 
     * 
     * @param App\Models\Admin\Product $Product
     * @return Illuminate\Http\Resource
     */

    public function show( Product $Product){
       //
    }

    /**
     * Show the from for editing the specified resource . 
     * 
     * @param App\Models\Admin\Product $Product
     * @return Illuminate\Http\Resource
     */

    public function edit( $id){
        $categories=Category::all();
        $Product=Product::find($id);
        $category_name=Category::find($Product ->category_id);
        return view('admin.products.edit',compact('Product','categories','category_name'));
    }
    
    /**
     * Update the specified resource in storage . 
     * 
     * @param Illuminate\Http\Request $request
     * @param App\Models\Admin\Product $Product
     * @return Illuminate\Http\Resource
     */
    public function update(Request $request,$id){
        $product= Product::find($id);

        $product ->name =$request->name;
        $product ->quantity =$request->quantity;
        $product ->price=$request->price;
        $product ->category_id=$request->category;
        $product ->description=$request->description;

        $product->save();
        return redirect('products');

    }
    /**
     * Remove the specified resource form storage . 
     * 
     * @param App\Models\Admin\Product $Product
     * @return Illuminate\Http\Resource
     */
    public function destory( $id){
       Product::find($id)->delete;
       return redirect()->back();
    }
}
