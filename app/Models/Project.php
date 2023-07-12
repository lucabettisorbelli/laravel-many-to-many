<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "description",
        "image"
    ];

    public function types()
    {
        return $this->belongsTo(Type::class);
    }

    public function technologies() {
        return $this->belongsToMany(technology::class);
    }
}
