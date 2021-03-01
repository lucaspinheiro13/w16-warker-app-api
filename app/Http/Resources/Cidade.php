<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Posto as PostoResource;


class Cidade extends JsonResource
{
    public static $wrap = null;
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
      

        return [
            "id"=> $this->id,
            "cidade"=>$this->nome_da_cidade,
            "coords"=>[
                "longitude"=>$this->longitude,
                "latitude"=>$this->latitude
            ],
            "postos"=>PostoResource::collection($this->postos)
        ];
    }
}
