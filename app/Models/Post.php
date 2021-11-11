<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Post extends Model
{
    use HasFactory,HasTranslations;
    public $guarded = [];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public $translatable = ['quote'];
}
