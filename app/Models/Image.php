<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['url'];
    use HasFactory;
    // relationship polymorphic
    public function imageable()
    {
        return $this->morphTo();
    }
}
