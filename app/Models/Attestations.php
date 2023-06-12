<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attestations extends Model
{
    use HasFactory;


    public function type(){

        return $this->belongsTo(TypeAttestations::class, "type_attestation_id","id");
    }
    public function mention(){

        return $this->belongsTo(Mentions::class, "mention_id","id");
    }
    public function user(){

        return $this->belongsTo(User::class, "user_id","id");

}
    public function demande(){

        return $this->hasMany(Demandes::class);
}
}
