<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Personalization extends Model
{
    protected $fillable = [
        'broker_id',
        'section_2_line_1',
        'section_2_line_2', 
        'section_2_paragraph_3',
        'button_link',
    ];

    public function broker(): BelongsTo
    {
        return $this->belongsTo(Broker::class);
    }
}
