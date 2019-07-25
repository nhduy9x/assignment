<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Post;
use App\Models\PostCategory;

class PostController extends Controller
{
    public function postlist(){
      $posts=Post::paginate(5);
      return view('auth.post.posts.list',compact('posts'));
   }
   public function postadd(){
      $post=new Post();
      $cates=PostCategory::all();
   	return view('auth.post.posts.add',compact('cates','post'));
   }

   public function postup($id){
      $post=Post::find($id);
      $cates=PostCategory::all();
      return view('auth.post.posts.add',compact('post','cates'));
   }
   public function postdelete($id){
      $model=Post::find($id);
      $model->delete();
      return redirect(route('list.post'));
   }
   public function postsave(Request $request){
   	if ($request->id==null) {
         $Post=new Post();
      }else{
         $Post=Post::find($request->id);
      }
      if ($request->hasFile('feature_image')>0) {
            // lay ra duoi anh
            $ext = $request->feature_image->extension();

            // lay ten anh go
            $filename = $request->feature_image->getClientOriginalName();

            // sinh ra ten anh moi theo dang slug
            $filename = str_slug(str_replace("." . $ext, "", $filename));
            
            // ten anh + string random + duoi
            $filename = $filename . "-" . str_random(20) . "." . $ext;
            $file=$request->file('feature_image');
            $Post->image =$file->move("uploaded/",$filename);
        }else{
         $Post->image=$request->anh;
        }
   	$Post->title=$request->title; 
   	$Post->content=$request->content; 
   	$Post->short_desc=$request->short_desc;
   	$Post->cate_id=$request->cate_id;
   	$Post->author=$request->author;
 
   	$Post->slug=str_slug($request->title.'-'.microtime(),'-'); 	
   

   	
   	$Post->save();
    return redirect(route('list.post'));
   }
}
