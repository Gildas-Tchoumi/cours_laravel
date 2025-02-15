<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    //
    protected $fillable = ['name','code','price','quantity','quantity_min','description','category_id','unit_id'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function unites(): BelongsTo
    {
        return $this->belongsTo(Unite::class, 'unit_id');
    }
}
