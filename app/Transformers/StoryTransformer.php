<?php namespace App\Transformers;

use App\Story;
use League\Fractal\Resource\Collection;
use League\Fractal\TransformerAbstract;

class StoryTransformer extends TransformerAbstract {

    protected $defaultIncludes = [
        'media'
    ];

    public function transform(Story $story)
    {
        $date = new \DateTime($story->date_published);
        return [
            'title'     => mb_convert_case($story->title, MB_CASE_TITLE, "UTF-8"),
            'published' => $date->format('l, F d, Y \a\t h:i A'),
            'author'    => mb_convert_case($story->author->full_name, MB_CASE_TITLE, "UTF-8"),
            'station'   => $story->station->call
        ];
    }

    public function includeMedia(Story $story)
    {
        // Filter media based off of stories Id
        $media = array_filter($story->media(), function($item) use ($story) {
          return ($item['story'] === $story->id);
        });

        return $this->collection($media, new MediaTransformer);
    }

}
