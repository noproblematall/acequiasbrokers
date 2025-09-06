<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    protected $table = 'base_model';
    
    protected $fillable = [
        'option_name',
        'option_value'
    ];

    public static function getOptionValue(string $optionName, $default = null)
    {
        $option = static::where('option_name', $optionName)->first();
        return $option ? $option->option_value : $default;
    }

    public static function setOptionValue(string $optionName, $optionValue)
    {
        return static::updateOrCreate(
            ['option_name' => $optionName],
            ['option_value' => $optionValue]
        );
    }
}
