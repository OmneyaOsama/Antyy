<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Dashboard\Auth;

class ProductController extends Controller
{
    function products(){
        $products=Product::get();
        return view('dashboard.products.products',['products' =>   $products]);
    }

    function addProduct(){
        $category = Category::all();
        return view('dashboard.products.addProduct',['categories' =>   $category]);

    }



        function store(Request $req){

            $validator = \Validator::make($req->all() ,[
                'name' => 'required|min:5|max:70',
                'description' => 'required',
                'price' => 'required|numeric|min:0',
                'quantity' => 'required|numeric|min:0',
                'size' => 'nullable',
                'color' => 'nullable',
                'discount' => 'nullable|numeric|min:0|max:100',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

            ]);

            if($validator->fails()){
                return redirect("/products/addProduct")
                            ->withErrors($validator)
                            ->withInput();
               }




           $data = $req->all();
            $imgHolder = "";

            //check if file is uploaded
            if($req->hasFile('image')){
             //$image variable contains all info about image
              $image = $req->file("image");
              //rename image to new name
              $name = time(). "_product" . "." . $image->getClientOriginalExtension();
              //Destination
              $destination  = public_path("/uploads") ;
              //move uploaded file
              $image->move($destination ,  $name);
              $imgHolder = $name;
            }
            //make validation



            $data['user_id'] =\Auth::user()->id;
            $product = new Product();
            $data['image'] =  $imgHolder;
            $product->create($data);
            return redirect("/products/addProduct");
        }



        function showDetails($identifier){

            $product=Product::where('id',$identifier)->first();
            return view('dashboard.products.details',['product'=>$product]);
        }





        function delete($identifier){
            $product = Product::find($identifier);

            $product->delete();
            return redirect("dashboard/products");
        }




        function edit($identifier){
            $product = Product::find($identifier);
            return view("products.edit",["product"=>$product]);

        }



      function update(Request $request,Product $id){
        $data = $request->all();
        $id->update($data);
        return redirect("dashboard/products");
      }



    //   public function assignCategory(Request $request, $productId) {
    //     $product = Product::findOrFail($productId);
    //     $category = Category::findOrFail($request->category_id);

    //     $product->category()->associate($category);
    //     $product->save();

    //     return redirect()->back()->with('success', 'Category assigned successfully.');
    // }




    }



?>
