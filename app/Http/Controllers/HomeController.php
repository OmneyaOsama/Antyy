<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    function home(){
        return view('welcome');
    }



    public function displayLatest(){
        $products = Product::latest()->take(6)->get();
       return view("welcome" , ['products' => $products]);
   }



   function displayCategory(){
    $categories=Category::get();
    return view("welcome",['categories'=> $categories]);
   }



   public function showProducts($category)
    {
        $category = Category::where('name', $category)->firstOrFail();
        $products = $category->products()->paginate(10);
        return view('showCategoryProducts', compact('category', 'products'));
    }

//     public function showProducts($id)
// {
//     $category = Category::find($id);
//     $products = $category->products();
//     return view('showCategoryProducts', compact('category', 'products'));
// }

function displayProducts(){
    $product=Product::get();
    return view("showCategoryProducts",['product'=> $products]);
   }



}
