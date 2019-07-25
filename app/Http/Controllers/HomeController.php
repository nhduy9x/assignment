<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Product;
use App\Models\ProductCategory;
class HomeController extends Controller
{
    public function index(Request $request){
        if(empty($request->keyword)){
            $product=Product::paginate(20);
        }else{
            $product=Product::where('name','like', "%$request->keyword%")->paginate(20);
           
            // dd($request->keyword);
            // echo "<pre>";
            // var_dump($product);die();
        }
    	
    	// if(!empty($post)){
    	// 	$id=$post->id;
    	// }else{
    	// 	return 401;
    	// }
        // var_dump($product);die();
    	
    	
    	
    	// var_dump($id);
    	// $Posts=Post::where('cate_id',$id)->get();
    	// // echo "<pre>";
    	// // var_dump($Posts);die();
    	// // dd($Posts);
    	// // return $iid=$id->id;
    	// // dd($id);
    	return view('Home.homepage',compact('product'));
    }
 
    public function detail($slug){
        $detail=Product::where('slug',$slug)->first();
        $all=Product::skip(2)->take(3)->get();
        $a4=Product::take(4)->get();
        // echo "<pre>";
        // var_dump($product);die();
        return view('Home.product_detail',compact('detail','all','a4'));
    }
    public function product($slug=null){
        $cates=ProductCategory::all();
        if(empty($slug)){
           $all=Product::orderBy('updated_at','desc')->paginate(4);
            $top=Product::orderBy('unit_price','desc')->paginate(12);
           return view('home.product',compact('all','top','cates'));
            
        }else{
            $cate=ProductCategory::where('slug',$slug)->first();
            $id=$cate->id;
            $products=Product::where('product_id',$id)->paginate(20);
             
        }
        return view('home.product',compact('products','cate','cates'));
         
    }
}
