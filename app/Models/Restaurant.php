<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'img', 'tax_id'];

    public function dishes()
    {
        return $this->hasMany(Dish::class);
    }

    /**
     * Returns the categories associated with the restaurant.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
