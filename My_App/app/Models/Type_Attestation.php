<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_Attestation extends Model
{
    use HasFactory;
    protected $table="type_attestations";
    public function articles(){
      return  $this->hasMany(Article::class);
    }
}
