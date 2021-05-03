<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    // relationship many to many

    protected $fillable = ['name', 'slug', 'color'];
    public function getRouteKeyName()
    {
        return "slug";
    }
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
