<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    public function payment(){
        $users = DB::table('users')
            ->join('contacts', 'users.id', '=', 'contacts.user_id')
            ->select('users.*', 'contacts.phone', 'orders.price')
            ->get();
        return $users
    }
}
