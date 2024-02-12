<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'contact_email',
        'contact_phone',
        'address',
        'city',
        'country',
        'additional_info',
    ];
    public function artProject()
    {
        return $this->hasMany(ArtProject::class);
    }
}
