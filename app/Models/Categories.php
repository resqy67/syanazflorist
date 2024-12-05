<?php

namespace App\Models;

use app\Models\Products;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $table = 'Categories';
    protected $fillable = ['name', 'slug'];
    public $timestamps = false;
    use HasFactory;

    public function products()
    {
        return $this->hasMany(Products::class, 'category_id');
    }
}
