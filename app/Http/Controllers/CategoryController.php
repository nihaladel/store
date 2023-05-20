<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    /**
     * Display a listing of the resource. 
     * 
     * @return Illuminate\Http\Resource
     */
    public function index(){
        $categories=Category::all();
        return view('admin.categories.index',compact('categories'));
    }

     /**
     * Show the form for creating a new resource. 
     * 
     * @return Illuminate\Http\Resource
     */
    public function create(){
    
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage. 
     * 
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\Resource
     */
    public function store(Request $request){
        $categories= new Category;

        $categories->name =$request->name;

        $categories->save();
        return redirect()->back();

    }
    /**
     * Show the from for editing the specified resource . 
     * 
     * @param App\Models\Admin\Category $category
     * @return Illuminate\Http\Resource
     */

    public function edit( $id){
        $category=Category::find($id);
        return view('admin.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage . 
     * 
     * @param Illuminate\Http\Request $request
     * @param App\Models\Admin\Category $category
     * @return Illuminate\Http\Resource
     */
    public function update(Request $request,$id){
        $category= Category::find($id);

        $category ->name =$request->name;
        $category->save();
        return redirect('categories');

    }

    /**
     * Remove the specified resource form storage . 
     * 
     * @param App\Models\Admin\Category $category
     * @return Illuminate\Http\Resource
     */
    public function destory( $id){
        Category::find($id)->delete;
        return redirect()->back();
     }
 }



