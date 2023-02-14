<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductionCompany extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'country', 'foundation'
    ];

    public function movies()
    {
        return $this->hasMany(Movie::class);
    }
}
