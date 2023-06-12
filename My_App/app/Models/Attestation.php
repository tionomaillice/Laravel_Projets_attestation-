<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attestation extends Model
{
    use HasFactory;
    public function type(){
      return  $this->belongsTo(Type_Attestation::class,"type_attestation_id","id");
    }
}
