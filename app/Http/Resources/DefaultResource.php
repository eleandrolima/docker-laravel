<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Collection;

class DefaultResource extends JsonResource
{
    /**
     * Transform the resource into an array. 
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): Collection
    {
        return collect($this->resource);
    }
}
