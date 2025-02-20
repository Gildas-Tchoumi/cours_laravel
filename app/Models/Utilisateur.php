<?php

namespace App\Models;

use App\Models\Roles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Utilisateur extends Model
{
    //
    protected $fillable = ['first_name','last_name','email','password'];

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Roles::class, "role_utilisateurs","utilisateur_id","roles_id");
    }
}
