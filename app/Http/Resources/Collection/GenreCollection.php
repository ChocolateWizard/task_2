<?php

namespace App\Http\Resources\Collection;

use App\Http\Resources\Single\GenreResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class GenreCollection extends ResourceCollection
{
    public static $wrap = 'genres';
    
    public function toArray(Request $request): array
    {
        return [
            'genres' => (GenreResource::collection($this->collection))->all()         
        ];
    }
}
