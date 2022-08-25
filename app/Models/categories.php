<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $primaryKey = 'id';

    public function article_categories()
    {
        return $this->belongsTo('App\Models\article_categories','category_id','id');
    }
}
