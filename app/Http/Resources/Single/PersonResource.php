<?php

namespace App\Http\Resources\Single;

use App\Models\Movie;
use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Single\ActingRoleResource;

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
            'name' => $this->first_name . ' ' . $this->last_name,
            'profile_photo_url' => $this->profile_photo_url,
            'is_star' => $this->is_star,
            'roles' => $this->when(!is_null($this->roles), $this->roles)
        ];
    }
}
