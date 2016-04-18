<?php namespace App\Transformers;

use App\Station;
use League\Fractal\Resource\Collection;
use League\Fractal\TransformerAbstract;

class StationTransformer extends TransformerAbstract {

    public function transform(Station $station)
    {
        return [
            'call'  => $station->call,
            'name'  => $station->name
        ];
    }

}
