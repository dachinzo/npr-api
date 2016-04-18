<?php

namespace App\Http\Controllers;

use App\Story;
use App\Transformers\StoryTransformer;
use App\Serializers\StorySerializer;
use Illuminate\Http\Request;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class Controller extends ApiController
{

    public function index(Manager $fractal, StoryTransformer $storyTransformer)
    {

        $fractal->setSerializer(new StorySerializer());
        $stories = Story::with('author','station')->get();
        $collection = new Collection($stories, $storyTransformer);

        $data = $fractal->createData($collection)->toArray();

        return $this->respond($data);
    }

    public function show(Manager $fractal, StoryTransformer $storyTransformer, $id){
      $fractal->setSerializer(new StorySerializer());
      $story = Story::with('author','station')->findOrFail($id);
      $collection = new Item($story, $storyTransformer);

      $data = $fractal->createData($collection)->toArray();

      return $this->respond($data);
    }

}
