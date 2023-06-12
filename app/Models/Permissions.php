<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    use HasFactory;

    public function user(){

  return $this->belongsToMany(User::class,"user_permissions","user_id","permission_id");
    }

}
