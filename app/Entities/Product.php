<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'category_id'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
