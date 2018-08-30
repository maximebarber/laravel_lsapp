<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name
    protected $table = 'posts';
    // Primary Key (not necessary)
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
