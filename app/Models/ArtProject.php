<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class ArtProject extends Model implements HasMedia
{
  
    use HasFactory;
    use InteractsWithMedia;
    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date',
        'status',
        'partner_id',
        'image',
    ];
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('images');
    }
    public function partner()
    {
        return $this->belongsTo(Partner::class);
    }
}
