<?php

use App\Todo;
use Illuminate\Database\Seeder;

class CreateSomeListsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $todo = new Todo();
        for($i=0; $i<3; $i++) {
            $todo->name = "TAREFA {$i}";
            $todo->description = 'LOREM IPSUM LOREM IPSUM LOREM IPSUM LOREM PISUM';
            $todo->done = rand(0,1);
            $todo->save();
        }
    }
}
