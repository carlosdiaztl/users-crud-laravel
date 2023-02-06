<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserService extends Model
{
    use HasFactory;
    public $table = 'users_has_services';
    public function joinUserServices($user_id){

        return UserService::join('users as u', 'u.id', 'users_has_services.user_id')
            ->join('services as s', 's.id', 'users_has_services.service_id')
            ->select('u.name', 's.service','users_has_services.*')
            ->where('users_has_services.id',$user_id)
            ->get();
            

    }
}
