<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table ='posts';
    public function cate_post(){
    	return $this->belongsto('App\Models\PostCategory','cate_id');
    }
}
