<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Restaurant extends Model
{
    use HasFactory;

    // Aggiungi 'slug' ai campi fillable
    protected $fillable = ['name', 'address', 'img', 'tax_id', 'slug'];

    // Genera automaticamente lo slug dal nome
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    // Usa lo slug per le route invece dell'ID
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function dishes()
    {
        return $this->hasMany(Dish::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
