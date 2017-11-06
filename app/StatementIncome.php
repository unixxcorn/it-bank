<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatementIncome extends Model
{
    public function event()
    {
        return $this->belongsTo('App\Events', 'eid', 'id');
    }
    protected $table = 'itb_income';
    public $timestamps = true;
}
