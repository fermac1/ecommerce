<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'cat_id',
        'new_price',
        'old_price',
        'discount',
        'image1',
        'image2',
        'description',
        'label',
        'qty'
    ]; 

    public function category(){
        return $this->belongsTo(Category::class, 'cat_id', 'id');
    }
}
