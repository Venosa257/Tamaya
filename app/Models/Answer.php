<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\User;    

class Answer extends Model
{
    use HasFactory;
    protected $guarded = [
        "id"
    ];
    protected $table = 'answer';

    public function question() {
        return $this->belongsTo(Post::class,'post_id');
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
}