<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class article_categories extends Model
{
    use HasFactory,SoftDeletes;

    public $timestamps = false;
    protected $table = 'article_categories';
    protected $fillable = ['category_id','article_id']; 
    protected $primaryKey = 'id';
    
    public function articles()
    {
         return $this->belongsTo('App\Models\articles', 'article_id','id');
    }
    public function categories()
    {
         return $this->hasMany('App\Models\categories', 'category_id','id');
    }
}
