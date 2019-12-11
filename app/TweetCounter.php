<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TweetCounter extends Model
{
    protected $fillable = [
        'name', 'total', 'status', 'users_name', 'today_tweet'
    ];
}
