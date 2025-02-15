<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Unite extends Model
{
    protected $fillable = ['name','abreviation','status','description'];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
   
}
