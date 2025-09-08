<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Personalization extends Model
{
    protected $guarded = [];

    public function broker(): BelongsTo
    {
        return $this->belongsTo(Broker::class);
    }
}
