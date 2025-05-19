<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class File extends Model
{
    use HasFactory;
    protected $table = 'files';
    protected $primaryKey = 'file_id';
    public $timestamps = false;
    function post(){
        return $this->belongsTo(Post::class, 'post_id', 'post_id');
    }
}
