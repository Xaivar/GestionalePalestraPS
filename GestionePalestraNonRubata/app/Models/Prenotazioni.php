<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Prenotazioni extends Model
{
    use HasFactory;

    public function corsi(): HasMany {
            return $this->belongsTo(Corsi::class);
    }
}
