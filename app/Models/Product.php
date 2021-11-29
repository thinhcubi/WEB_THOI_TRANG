<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    public function categories()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function producers(){
        return $this->belongsTo(Producer::class.'category_id');
    }
}
