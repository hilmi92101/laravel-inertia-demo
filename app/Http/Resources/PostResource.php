<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [ 
            'id' => $this->id, 
            'title' => substr($this->title, 0, 15) . '...', 
            'content' => substr($this->content, 0, 30) . '...', 
            'created_at' => $this->created_at->toDateString(), 
        ];
    }
}
