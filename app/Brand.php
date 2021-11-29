<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public $timestamps =false; //time
    protected $fillable = [
        'brand_name','brand_desc','brand_status'
    ];
    protected $primarykey = 'brand_id'; //khoa_chinh
    protected $table ='tbl_brand';
}
