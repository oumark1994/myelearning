<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }
    public function userauth(){
        return $this->belongsTo(UserAuth::class);
    }
    public function lessons(){
        return $this->hasMany(Lesson::class);
    }
    public function videos(){
        return $this->hasManyThrough(Video::class,Lesson::class);
    }
}
