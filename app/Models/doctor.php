<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function doc_category()
    {
       return $this->belongsTo(doc_category::class,'cate_id','id');
    }
}
