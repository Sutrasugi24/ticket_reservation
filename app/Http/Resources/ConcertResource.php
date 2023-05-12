<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ConcertResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'            => $this->id,
            'name'          => $this->name,
            'concert_date'         => date('Y-m-d', strtotime($this->concert_date)),
            'venue'       => $this->venue,
            'maximum_site'  => $this->maximum_site,
            'created_at'    => date('d-m-Y H:i:s', strtotime($this->created_at)),
            'updated_at'    => date('d-m-Y H:i:s', strtotime($this->updated_at))
        ];
    }
}
