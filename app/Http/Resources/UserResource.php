<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */

     public static $wrap = false; 
     
     public function toArray($request)
     {
         return [
             'id' => $this->id,
             'name' => $this->name,
             'email' => $this->email,
         ];
     }
}
