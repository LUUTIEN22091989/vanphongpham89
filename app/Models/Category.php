<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table   = 'categories';
    protected $guarded = [''];

    public function categoryParent()
    {
    	return $this->belongsTo('App\Models\Category', 'c_parent_id');  // bảng products liên kết vs bảng Category qua khóa ngoại pro_category_id (quan hệ 1 nhiều)
    }
}
