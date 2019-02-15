<?php

use Illuminate\Database\Seeder;

class MakananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('masakans')->insert([
         [
           'nama' => 'Nasi + Tempe Orek',
            'harga' => '10000',
            'status_masakan' => 'Unproses',
         ],
         [
           'nama' => 'Nasi + Ayam Goreng',
            'harga' => '20000',
            'status_masakan' => 'Unproses',
         ],
         [
           'nama' => 'Nasi + Kikil',
            'harga' => '15000',
            'status_masakan' => 'Unproses',
         ],
         [
           'nama' => 'Nasi + Telur Dadar',
            'harga' => '10000',
            'status_masakan' => 'Unproses',
         ],
         [
         'nama' => 'Nasi + Ikan Bandeng',
            'harga' => '20000',
            'status_masakan' => 'Unproses',
         ]
     ]);
    }
}
