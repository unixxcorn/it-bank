<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statement extends Model
{
    protected $table = 'itb_statement';
    protected $fillable = ['uid', 'money', 'is_expend', 'created_at'];
    public $timestamps = true;
    public function event()
    {
        return $this->belongsTo('App\Events', 'eid', 'id');
    }
    public function user()
    {
        return $this->belongsTo('App\User', 'uid', 'id');
    }
}
