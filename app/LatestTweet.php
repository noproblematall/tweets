<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LatestTweet extends Model
{
    protected $fillable = [
        'name', 'content',
    ];
}
