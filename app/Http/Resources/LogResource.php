<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LogResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            "date_completed" => $this->date_completed,
            "habit_id" => (int)$this->habit_id,
            "id" => $this->id,
        ];
    }
}
