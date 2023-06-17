<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'created_by' => $this->created_by,
            'title' => $this->title,
            'description' => $this->description,
            'completed' => (bool) $this->completed,
            'attachments' => $this->attachments,
            'created_at' => $this->created_at->format('m-d-Y'),
            'updated_at' => $this->updated_at->format('m-d-Y'),
        ];
    }
}
