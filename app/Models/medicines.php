<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medicines extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function supplier()
    {
       return $this->belongsTo(supplier::class,'supplier_id','id');
    }
    public function category()
    {
       return $this->belongsTo(category::class,'category_id','id');
    }
}
