<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class telefono extends Model
{
    use HasFactory;
    protected $table = "telefono";
    public function user()
    {
        return $this->belongsTo(User::class);

    }
}
