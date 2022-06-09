<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected  $table = 'category';
    protected $fillable = ['id','parent_id','created_at',
        'updated_at','title',
        'keywords','description','image','status'];


}
