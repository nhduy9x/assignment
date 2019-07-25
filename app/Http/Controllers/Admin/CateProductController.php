<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use App\Http\Requests\validation;
class CateProductController extends Controller
{
    public function catelist(){
      $cates=ProductCategory::paginate(5);
      return view('auth.product.cate-product.list',compact('cates'));
   }
   public function cateadd(){
      $cates=new ProductCategory();
   	return view('auth.product.cate-product.add',compact('cates'));
   }

   public function cateup($id){
      $cates=ProductCategory::find($id);
      return view('auth.product.cate-product.add',compact('cates'));
   }
   public function catedelete($id){
      $model=ProductCategory::find($id);
      $model->delete();
      return redirect(route('list.cate-p'));
   }
   public function catesave(validation $request){
   
   	if ($request->id==null) {
         $cates=new ProductCategory();
      }else{
         $cates=ProductCategory::find($request->id);
      }
    $cates->name=$request->name;
    $cates->slug=str_slug($request->name."-".microtime(),"-");
    // dd($cates);
   	$cates->save();
    return redirect(route('list.cate-p'));
   }
}
