<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class offer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','description','price' ,'image','category_id','main_image','offer_percentage'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
