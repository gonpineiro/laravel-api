<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PostCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'meta' => [
                'organization' => 'gp',
                'authors' => [
                    'Gonzalo',
                    'gp'
                ],
            ],
            'type' => 'articles'
        ];
    }
}
