<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Message::create([
            'from_id' => 1,
            'to_id' => 2,
            'content' => 'Hola ¿Comó estas?'
        ]);

        App\Message::create([
            'from_id' => 2,
            'to_id' => 1,
            'content' => 'Bien, gracias y ¿tú?'
        ]);

        App\Message::create([
            'from_id' => 1,
            'to_id' => 3,
            'content' => 'Hey men!'
        ]);

        App\Message::create([
            'from_id' => 3,
            'to_id' => 1,
            'content' => '¿Qué mas?',
        ]);
    }
}
