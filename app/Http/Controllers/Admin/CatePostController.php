<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PostCategory;
use App\Http\Requests\validation;
class CatePostController extends Controller
{
   public function catelist(){
      $cates=PostCategory::paginate(5);
      return view('auth.post.cate-posts.list',compact('cates'));
   }
   public function cateadd(){
      $cates=new PostCategory();
   	return view('auth.post.cate-posts.add',compact('cates'));
   }

   public function cateup($id){
      $cates=PostCategory::find($id);
      return view('auth.post.cate-posts.add',compact('cates'));
   }
   public function catedelete($id){
      $model=PostCategory::find($id);
      $model->delete();
      return redirect(route('list.cate'));
   }
   public function catesave(validation $request){

   	if ($request->id==null) {
         $cates=new PostCategory();
      }else{
         $cates=PostCategory::find($request->id);
      }
    $cates->name=$request->name;
    $cates->slug=str_slug($request->name."-".microtime(),"-");
    // dd($cates);
   	$cates->save();
    return redirect(route('list.cate'));
   }
}
