<?php

namespace App\Http\Resources\Single;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PersonResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->first_name.' '. $this->last_name,
            'profile_photo_url' => $this->profile_photo_url,
            'is_star' => $this->is_star           
        ];
    }
}
