<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps =false; //time
    protected $fillable = [
        'post_title','post_desc','post_content','post_status','post_image'
    ];
    protected $primarykey = 'post_id'; //khoa_chinh
    protected $table ='tbl_posts';
}
