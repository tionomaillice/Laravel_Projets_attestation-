<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom',
        'prenom',
        'sexe',
        'ine',
        'telephone1',
        'telephone2',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function retrait(){

        return $this->hasMany(Retraits::class);
    }
    public function demande(){

        return $this->hasMany(Demandes::class);
    }
    public function attestation(){

        return  $this->belongsTo(Attestations::class,"attestation_id","id");
    }
    public function roles(){
        return  $this->belongsToMany(Roles::class, "user_roles","user_id","role_id");

    }
    public function permissions(){
        return $this->belongsToMany(Permissions::class,"user_permissions","permission_id","user_id");

    }
    public function hasRole($role){
        return $this->roles()->where("nom",$role)->first() !==null;
    }
    public function hasAnyRoles($roles){
        return $this->roles()->whereIn("nom",$roles)->first() !==null;
    }
    public function getAllRoleNamesAttribute(){
        return $this->roles->implode("nom",'|');
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */

}