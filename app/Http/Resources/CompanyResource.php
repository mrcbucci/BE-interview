<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class CompanyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $result = [
            'id'      => $this->id,
            'name'    => $this->name,
            'email'   => $this->email,
            'logo'    => $this->logo ? env('APP_URL').$this->logo : null,
            'website' => $this->website,
        ];

        return $result;
    }
}
