<?php

namespace App\Models;

use app\Models\products;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name', 'slug'];
    public $timestamps = false;

    public function products()
    {
        return $this->hasMany(products::class, 'category_id');
    }
}
