<?php

namespace App;

use Illuminate\Http\Response;
use GuzzleHttp\Client;

class Story extends \Illuminate\Database\Eloquent\Model {

  /**
   * Returns author relationship for a given story
   * @return Eloquent collection
   */
  public function author() {
    return $this->belongsTo('\App\Author');
  }

  /**
   * Returns station relationship for a given story
   * @return Eloquent collection
   */
  public function station() {
    return $this->belongsTo('App\Station');
  }

  /**
   * Returns array of media/story associations
   * @return Array of media json data
   */
  public function media() {

    // Should be returning by consuming api
    // just using some mock data for now
    return [[
        "story"=> 1,
        "type"=> "mp4",
        "duration"=> 254,
        "href"=> "http://foo.bar.mp4"
    ], [
        "story"=> 1,
        "type"=> "jpg",
        "caption"=> "The Boston area ranks sixth for gridlock-plagued commutes in 2014. Here's morning traffic on Route 1 into Boston in February.",
        "credit"=> "Jesse Costa/WBUR",
        "href"=> "http://s3.amazonaws.com/media.wbur.org/wordpress/1/files/2015/08/0213_am-traffic02.jpg"
    ], [
        "story"=> 4,
        "type"=> "jpg",
        "caption"=> "Some news story caption",
        "credit"=> "AP",
        "href"=> "http://foo.bar.jpg"
    ]];

  }
}
