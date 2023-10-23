<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Answer;
use App\Models\User;
class Comment extends Model
{
    use HasFactory;

    protected $guarded = [
        "id",
    ];

    protected $table = "comment";
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function answer() {
        return $this->belongsTo(Comment::class);
    }
}