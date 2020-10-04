<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{
	protected $casts = [
        'properties' => 'array',
        'd' => 'array',
        'm' => 'array',
    ];

	public function setPropertiesAttribute($value)
	{
	    $properties = [];

	    foreach ($value as $array_item) {
	        if (!is_null($array_item['key'])) {
	            $properties[] = $array_item;
	        }
	    }

	    $this->attributes['properties'] = json_encode($properties);
	}

}
