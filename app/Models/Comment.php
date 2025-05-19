<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    protected $table = 'comments';
    protected $primaryKey = 'comment_id';
    use HasFactory;

}
