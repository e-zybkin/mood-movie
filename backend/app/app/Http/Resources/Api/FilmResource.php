<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class FilmResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'short_desc' => $this->short_desc,
            'full_desc' => $this->full_desc,
            'trailer' => $this->trailer,
            'kinopoisk_link' => $this->kinopoisk_link,
            'poster' => $this->getMedia('poster')->first()->getFullUrl(),
        ];
    }
}
