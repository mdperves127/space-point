<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $guarded = ['_token'];
    
    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }
}
