<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = ['id', 'created_at', 'update_at'];
    use HasFactory;
    // relationship one to many reverse
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    // relationship many to many
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    // relatiomship one to one polymorphic
    public function image()
    {
        return $this->MorphOne(Image::class, 'imageable');
    }
}
