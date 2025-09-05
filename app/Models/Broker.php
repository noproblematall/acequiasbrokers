<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Broker extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'url',
        'email'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($broker) {
            if (empty($broker->url)) {
                $broker->url = self::generateUrl($broker->first_name, $broker->last_name);
            }
        });
    }

    protected static function generateUrl($firstName, $lastName)
    {
        $baseUrl = strtolower($firstName . $lastName);
        $baseUrl = preg_replace('/[^a-z0-9]/', '', $baseUrl);
        
        $url = $baseUrl;
        $counter = 1;
        
        while (self::where('url', $url)->exists()) {
            $url = $baseUrl . $counter;
            $counter++;
        }
        
        return $url;
    }

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
