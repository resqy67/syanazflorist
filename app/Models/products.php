<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'price', 'description', 'image', 'slug'];
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(categories::class, 'category_id');
    }
}
