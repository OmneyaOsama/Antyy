<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    function categories(){
        $categories=Category::get();
        return view('dashboard.categories.categories',['categories' =>   $categories]);
    }

    function addCategory(){
        return view('dashboard.categories.addCategory');

    }



        function store(Request $req){




           $data = $req->all();
            $imgHolder = "";

            //check if file is uploaded
            if($req->hasFile('image')){
             //$image variable contains all info about image
              $image = $req->file("image");
              //rename image to new name
              $name = time(). "_category" . "." . $image->getClientOriginalExtension();
              //Destination
              $destination  = public_path("/uploads") ;
              //move uploaded file
              $image->move($destination ,  $name);
              $imgHolder = $name;
            }




            $category = new Category();
            $data['image'] =  $imgHolder;
            $category->create($data);
            return redirect("/categories/addCategory");





    }




        function delete($identifier){
            $category = Category::find($identifier);

            $category->delete();
            return redirect("dashboard/categories");
        }




        function edit($identifier){
            $category = Category::find($identifier);
            return view("dashboard.categories.edit",["category"=>$category]);

        }



      function update(Request $request,Category $id){
        $data = $request->all();
        $id->update($data);
        return redirect("dashboard/categories");
      }






}
