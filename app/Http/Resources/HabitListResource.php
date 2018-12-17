<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HabitListResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            "name" => $this->name,
            "category" => $this->category,
            "id" => $this->id,
        ];;
    }
}
