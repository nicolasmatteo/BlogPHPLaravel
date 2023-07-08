<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blog';

    public function blog()
    {
        return $this->hasMany(Blog::class, 'AutorId');
    }

}
