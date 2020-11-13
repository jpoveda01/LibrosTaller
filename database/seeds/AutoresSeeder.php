<?php

use Illuminate\Database\Seeder;

class AutoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('autores')->insert([
            'nombre'=>'John Ronald Reuel Tolkien',
            'nacionalidad'=> 'Iglaterra',
        ]);
    }
}
