<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author', 'publisher', 'review'];

    // 複数の書籍が1ユーザに所属している
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
