<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AuthorResource extends JsonResource
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
            'excerpt'   =>  $this->excerpt,
            'image'     =>  $this->image,
            'published_at'   => $this->date,
            'category'  =>   new UserCategoryResource($this->category),
            'user'           => new UserResource($this->user)
        ];
    }
}
