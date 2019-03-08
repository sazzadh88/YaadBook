<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ["title","description","is_private","is_draft","user_id","post_type"];
}
