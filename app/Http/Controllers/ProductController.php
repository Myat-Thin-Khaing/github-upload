<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // public function __construct() {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $products = Product::with('category')->paginate(5);
        return view("products.index",compact ("products"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories=Category::all();
        return view("products.create",compact ("categories"));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'=>'required|',
            'price'=>'required',
            'category_id'=>'required',
            'image'=>'required',
        ]);

        $input = $request ->all();
        if ($request->hasFile('image'))
        {
          $destination_path = 'public/image';
          $image = $request->file('image');
          $image_name =$image->getClientOriginalName();
          $path = $request->File('image')->storeAs($destination_path, $image_name);
          $input['image']=$image_name;
        }
        Product::create($input);
        session()->flash('message', $input['name'] .' successfully saved');
        return redirect('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        $products = Product::Find($product);
        return view('products.show',compact("product"));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $product)
    {
        //
        $categories = Category::all();
        $product = Product::find($product);
        return view('products.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Product $product)
    {   
        $request->validate([
            'name'=>'required|',
            'price'=>'required',
            'category_id'=>'required',
            'image'=>'required',
        ]);


        $input = $request ->all();
        $products = Product::find($product);
        $product->name = $input  ['name'];
        $product->price = $input ['price'];
        $product->category_id = $input ['category_id'];
        $product->image = $input ['image'];
        $product->save();

        session()->flash('message', $input['name'] .' successfully Updated');
        return redirect('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $products= Product::find($product);
        $product->delete();

        session()->flash('message','Product uccessfully Deleted');
        return redirect()->route('products.index');
                        
    }

    public function search()
    {       //
        $search_text = $_GET ['query'];
        $products = Product::where('name','LIKE', '%'.$search_text. '%')->with('category')->get();
        return view('products.search',compact('products'));   
    }
}
