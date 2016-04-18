<?php

class AuthorsTableSeeder extends DatabaseSeeder {

  public function run() {

    DB::table('authors')->delete();

    $authors = [
      [
        'id'             => 1,
        'full_name'      => 'Zeninjor Enwemeka',
        'created_at'     => new DateTime,
        'updated_at'     => new DateTime
      ],
      [
        'id'             => 2,
        'full_name'      => 'Ryan caron King',
        'created_at'     => new DateTime,
        'updated_at'     => new DateTime
      ],
      [
        'id'             => 3,
        'full_name'      => 'patrick skahill',
        'created_at'     => new DateTime,
        'updated_at'     => new DateTime
      ]
    ];

    DB::table('authors')->insert($authors);


  }
}
