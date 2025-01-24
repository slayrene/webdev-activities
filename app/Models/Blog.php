<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory;
    use SoftDeletes;

    // protected $guarded = ['description'];
    // protected $hidden = ['description'];

    public function category(){
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

}
