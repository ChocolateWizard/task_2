<?php

namespace App\Http\Resources\Single;

use App\Http\Resources\Collection\GenreCollection;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Config;

class MovieResource extends JsonResource
{
    public static $wrap = 'movie';

    public function toArray(Request $request): array
    {
        $ip = Config::get('constants.server.ip');
        $port = Config::get('constants.server.port');
        $protocol = Config::get('constants.server.protocol');
        $cover_url = (str_starts_with($this->cover_url, 'storage') === true ?  $protocol . '://' . $ip . ':' . $port . '/' . $this->cover_url : $this->cover_url);
        return [
            'id' => $this->id,
            'title' => $this->title,
            'release_date' => $this->release_date,
            'cover_url' => $cover_url,
            'description' => $this->description,
            'rating' => $this->rating,
            'genres' => (GenreResource::collection($this->genres)),
            'directors' => (PersonResource::collection($this->directors)),
            'writers' => (PersonResource::collection($this->writers)),
            'actors' => (PersonResource::collection($this->actors))
        ];
    }
}
