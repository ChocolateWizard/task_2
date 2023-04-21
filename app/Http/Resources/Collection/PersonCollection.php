<?php

namespace App\Http\Resources\Collection;

use App\Http\Resources\Single\PersonResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PersonCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'people' => (PersonResource::collection($this->collection))->all()       
        ];
    }
}
