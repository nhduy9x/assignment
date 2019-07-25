<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use App\Models\Product;
class ProductController extends Controller
{
   public function postlist(){
      $posts=Product::paginate(5);
      return view('auth.product.product.list',compact('posts'));
   }
   public function postadd(){
      $post=new Product();
      $cates=ProductCategory::all();
   	return view('auth.product.product.add',compact('cates','post'));
   }

   public function postup($id){
      $post=Product::find($id);
      $cates=ProductCategory::all();
      return view('auth.product.product.add',compact('post','cates'));
   }
   public function postdelete($id){
      $model=Product::find($id);
      $model->delete();
      return redirect(route('list.product'));
   }
   public function postsave(Request $request){
   	if ($request->id==null) {
         $Post=new Product();
         if ($request->promotion_price>$request->price) {
	      return redirect(route('add.product'))->withErrors([
            'promotion_price' => 'promotion_price ko dk lon hon price '
        ]);
	     }
      }else{
         $Post=Product::find($request->id);
         if ($request->promotion_price>$request->price) {
	     	return redirect(route('sua.product',$request->id))->withErrors([
            'promotion_price' => 'promotion_price ko dk lon hon price '
        ]);
	     }
      }
      if ($request->hasFile('image')>0) {
            // lay ra duoi anh
            $ext = $request->image->extension();

            // lay ten anh go
            $filename = $request->image->getClientOriginalName();

            // sinh ra ten anh moi theo dang slug
            $filename = str_slug(str_replace("." . $ext, "", $filename));
            
            // ten anh + string random + duoi
            $filename = $filename . "-" . str_random(20) . "." . $ext;
            $file=$request->file('image');
            $Post->image =$file->move("uploaded/",$filename);
        }else{
         $Post->image=$request->anh;
        }
     
   	$Post->name=$request->name; 
   	$Post->description=$request->description; 
   	$Post->unit_price=$request->price;
   	$Post->product_id=$request->product_id;
   	$Post->promotion_price=$request->promotion_price;
      $Post->slug=str_slug($request->name."-".microtime(),"-");
   	// $Post->new=1; 
   	
   	
   

   	
   	$Post->save();
    return redirect(route('list.product'));
   }
}
