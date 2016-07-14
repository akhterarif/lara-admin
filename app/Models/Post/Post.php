<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = [
        'title',
        'description',
        'published_at',
    ];


    public function createdBy()
    {
        return belongTo(User::class, 'created_by');
    }

    public function updatedBy()
    {
        return belongTo(User::class, 'updated_by');
    }
}
