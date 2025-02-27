<?php

namespace App\Models;

use App\Models\Roles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Utilisateur extends Authenticatable
{
    use HasApiTokens, Notifiable;
    //
    protected $fillable = ['first_name','last_name','email','password'];

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Roles::class, "role_utilisateurs","utilisateur_id","roles_id");
    }
}
