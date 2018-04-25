<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AnimeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'name_cn' => $this->name_cn,
            'eps_count' => $this->eps_count,
            'air_date' => $this->air_date,
            'rating_score' => $this->rating_score,
            'images_small' => $this->images_small,
            'rank' => $this->rank,
            'collection_collect' => $this->collection_collect,
        ];
    }
}
