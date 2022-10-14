<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug','description','category'];

    public function types()
    {
        return $this->hasMany(Type::class, 'bank_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
