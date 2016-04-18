<?php

class StationsTableSeeder extends DatabaseSeeder {

  public function run() {

    DB::table('stations')->delete();

    $stations =  [
      [
        'id'             => 1,
        'call'           => 'WBUR',
        'name'           => 'Boston’s NPR News Station',
        'created_at'     => new DateTime,
        'updated_at'     => new DateTime
      ],
      [
        'id'             => 2,
        'call'           => 'WNPR',
        'name'           => 'Connecticut’s Public Media Source for News and Ideas',
        'created_at'     => new DateTime,
        'updated_at'     => new DateTime
      ]
    ];

    DB::table('stations')->insert($stations);

  }
}
