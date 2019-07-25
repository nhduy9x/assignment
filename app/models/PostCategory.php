<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    protected $table ='categories_posts';
    // public function hanMany(){
    // 	return $this->hashMany('App\Models\Post','cate_id','id');
    // }
}
