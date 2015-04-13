<?php

class PagesSeeder extends Seeder {

/**
* Run the database seeds.
*
* @return void
*/
    public function run()
    {
        DB::table('pages')->delete();

        Page::create(array(
            'title'=>'motDuMaire',
            'content'=>''
        ));

        Page::create(array(
            'title'=>'entrainements',
            'content'=>''
        ));
        $this->command->info('Pages table seeded!');

    }

}