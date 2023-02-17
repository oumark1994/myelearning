<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAuth extends Model
{
    use HasFactory;
    protected $fillable = ['fistname','lastname','email','password','role'];
    public function courses(){
        return $this->hasMany(Course::class);
    }
    public function instructor(){
        return $this->hasOne(Instructorapplication::class);
    }
}
