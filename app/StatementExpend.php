<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatementExpend extends Model
{
    public function event()
    {
        return $this->belongsTo('App\Events', 'eid', 'id');
    }
    protected $table = 'itb_expend';
    public $timestamps = true;
}
