<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatutDemande extends Model
{
    use HasFactory;
    public function demande(){

        return $this->hasMany(Demandes::class);
    }
}
