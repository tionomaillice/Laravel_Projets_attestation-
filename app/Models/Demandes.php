<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demandes extends Model
{
    use HasFactory;
    public function user(){

        return  $this->belongsTo(User::class,"user_id","id");
    }
    public function attestation(){

        return  $this->belongsTo(Attestations::class,"attestation_id","id");
    }
    public function statut(){

        return  $this->belongsTo(StatutDemande::class,"statut_demande_id","id");
    }




}
