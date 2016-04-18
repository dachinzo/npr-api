<?php

class StoriesTableSeeder extends DatabaseSeeder {

  public function run() {

    DB::table('stories')->delete();

    $stories = [
      [
        'id'             => 1,
        'station_id'     => 1,
        'author_id'      => 1,
        'title'          => 'At Boston Forum, Federal And Local Officials Discuss Region’s Transportation Future',
        'date_published' => '2015-10-14 12:22:00',
        'created_at'     => new DateTime,
        'updated_at'     => new DateTime
      ],
      [
        'id'             => 2,
        'station_id'     => 1,
        'author_id'      => 1,
        'title'          => 'Boston’s Transportation Future? City Releases Report Detailing Public’s Transit Goals',
        'date_published' => '2009-10-09 09:17:00',
        'created_at'     => new DateTime,
        'updated_at'     => new DateTime
      ],
      [
        'id'             => 3,
        'station_id'     => 2,
        'author_id'      => 2,
        'title'          => 'Sen. Murphy Seeks Feedback From “Fed Up” Car Commuters',
        'date_published' => '2009-10-15 16:25:00',
        'created_at'     => new DateTime,
        'updated_at'     => new DateTime
      ],
      [
        'id'             => 4,
        'station_id'     => 2,
        'author_id'      => 3,
        'title'          => 'Solar Installations Skyrocket, But Connecticut Consumers Still Need to Do Their Homework',
        'date_published' => '2009-10-15 09:12:00',
        'created_at'     => new DateTime,
        'updated_at'     => new DateTime
      ]
    ];

    DB::table('stories')->insert($stories);

  }
}
