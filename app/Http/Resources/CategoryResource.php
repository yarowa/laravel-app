<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
            'id'        =>  $this->id,
            'title'     =>  $this->title,
            'slug'      =>  $this->slug,
            'excerpt'   =>  $this->excerpt,
            'image'     =>  $this->image,
            'published_at'   => $this->date,
            'user'           => new UserResource($this->user)

        ];
    }
}
