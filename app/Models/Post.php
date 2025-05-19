<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'post_id';
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'content',
        'img',
        'score',
        'created_at',
        'updated_at',
    ];
    public function files(){
        return $this->hasMany(File::class, 'post_id', 'post_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
