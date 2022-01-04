<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'category_name', 'slug_category_product','category_desc','category_status'  ,'category_order'
    ];
    protected $primaryKey = 'category_id';
 	protected $table = 'tbl_category_product';

 	public function product(){
 		return $this->hasMany('App\Product');
 	}
}
