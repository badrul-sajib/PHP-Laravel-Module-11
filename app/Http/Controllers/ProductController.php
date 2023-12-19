<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index() {
        $products = DB::table('products')->get();
        return view('products.index',compact('products'));
    }

    public function create() {
        return view('products.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0'
        ]);

        DB::table('products')->insert(
            [
               'name' => $request->name,
               'quantity' => $request->quantity,
               'price' => $request->price, 
            ]
        );

        return redirect()->back()->with('success','Product Added Successfully');
    }


    public function destroy($id) {

        DB::table('products')->where('id',$id)->delete();
        return redirect('/products')->with('success','Product Deleted Successfully');
        
    }

    public function sell($id) {
        $product = DB::table('products')->where('id',$id)->first();
        return view('products.sell',compact('product'));
    }


    public function updateQuantity(Request $request,$id) {
 
        $products = DB::table('products')->where('id',$id)->first();
        //$transactions = DB::table('transactions')->where('product_id',$id)->first();
  
        DB::table('transactions')->insert(
        [
            'product_id' => $id,
            'name' => $products->name,
            'qty' => $request->quantity,
            'total_amount' => $products->price
        ]);

        DB::table('products')->where('id',$id)->update([
            'quantity' => $products->quantity - $request->quantity,
        ]);

        return redirect('/products')->with('success','Quantity Updated Successfully');
        
    }


    public function edit($id) {
        $product = DB::table('products')->where('id',$id)->first();
        return view('products.update',compact('product'));
    }

    public function update(Request $request,$id) {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0'
        ]);

        DB::table('products')->where('id',$id)->update([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'price' => $request->price,
        ]);

        return redirect('/products')->with('success','Product Updated Successfully');
    }


    
}
