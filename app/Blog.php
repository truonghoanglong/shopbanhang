<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public $timestamps =false; //time
    protected $fillable = [
        'blog_title','blog_content','blog_image','blog_status','blog_content_desc'
    ];
    protected $primarykey = 'blog_id'; //khoa_chinh
    protected $table ='tbl_blog';
}
