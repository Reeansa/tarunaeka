<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = ['images', 'heading', 'subheading'];

    public function scopeSearch($query, $search)
    {
        return $query->where('heading', 'like', '%' . $search . '%')
            ->orWhere('subheading', 'like', '%' . $search . '%');
    }
}
