<?php

namespace App\Http\Resources\Collection;

use App\Http\Resources\Single\MovieResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class MovieCollection extends ResourceCollection
{
    public static $wrap = 'movies';
    
    public function toArray(Request $request): array
    {
       return [
            'movies' => (MovieResource::collection($this->collection))->all()       
        ];
    }
}
