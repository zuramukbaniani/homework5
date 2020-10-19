<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
use App\Comments;

class ProductsController extends Controller
{   
    public function index(){
        $products = products::get();
        return view("post.home", ["products"=>$products]);
}
    public function create(){
        return view("post.create");
    } 
    public function store(Request $request){
        products::create([
            "title"=>$request->input("title"),
            "description"=>$request->input("text"),
        ]);
        return redirect()->route("main");
    }
    public function delete(Request $request){
        $product = products::where("id", $request->input("id"))->delete();
        return redirect()->back();
    }
    public function show($id){
        $product = products::where("id", $id)->firstOrFail();
        $comments = Comments::where("id", $id)->get();
        return view("post.show", ["produts"=>$product, "comments"=>$comments]);
    }
    public function comments(Request $request){
        Comments::create([
            "comment"=>$request->input("comment"),
            "products_id"=>$request->input("id"),
        ]);
        return redirect()->route("main");
    }
    public function edit($id){
        $product = products::where("id", $id)->firstOrFail();
        return view("post.edit", ["produts"=>$product]);
    }
    public function update(Request $request){
        products::where("id", $request->input("id"))->update([
            "title"=>$request->input("title"),
            "description"=>$request->input("text"),
        ]);
        return redirect()->route("main");
    }
}