<?php
/**
 * Created by PhpStorm.
 * User: Manu
 * Date: 11/02/2015
 * Time: 13:26
 */
class RootSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->delete();
        Player::create(array(
            'username' => 'root',
            'password' => Hash::make('toor'),
            'statut' => 'admin'
        ));
    }

}