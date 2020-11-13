<?php

use Illuminate\Database\Seeder;

class EditorialesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('editoriales')->insert([
            'nombre'=>'Planeta',

        ]);
    }
}
