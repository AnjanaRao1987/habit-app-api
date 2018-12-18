<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\LogResource;

class HabitResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            "name" => $this->name,
            "category" => $this->category,
            "description" => $this->description,
            "frequency" => $this->frequency,
            "period" => $this->period,
            "motivation" => $this->motivation,
            // use toDateTimeString() to pull datetime from created_at object
            "created_at" => $this->created_at->toDateTimeString(),
            "id" => $this->id,
            "logs" => LogResource::collection($this->logs),
        ];
    }
}
