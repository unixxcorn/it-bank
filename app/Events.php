<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $table = 'itb_event';
    protected $fillable = ['event', 'description', 'money', 'deadline', 'is_expend', 'created_at'];
    public $timestamps = true;
}