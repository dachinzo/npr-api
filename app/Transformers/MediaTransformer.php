<?php namespace App\Transformers;

use App\Station;
use League\Fractal\Resource\Collection;
use League\Fractal\TransformerAbstract;

class MediaTransformer extends TransformerAbstract {

    public function transform($media)
    {

        if ($media['type'] === 'mp4') {
          // create audio response
          $response = [
            'audio'    => $media['href'],
            'duration' => gmdate("i:s", $media['duration'])
          ];
        } else {
          // create image response
          $response = [
            'image'   => $media['href'],
            'credit'  => $media['credit'],
            'caption' => $media['caption']
          ];
        }

        return $response;
    }

}
