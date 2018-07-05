<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $contacts = [
        array(
          'first_name' => 'renato',
          'last_name' => 'lucena',
          'email_address' => 'cpdrenato@gmail.com',
          'description' => 'My best friend.'
        ),
        array(
          'first_name' => 'leidy',
          'last_name' => 'lucena',
          'email_address' => 'leidiany@gmail.com',
          'description' => 'My best friend.'
        ),
        array(
          'first_name' => 'alexandre',
          'last_name' => 'lucena',
          'email_address' => 'alexandrephilype@gmail.com',
          'description' => 'My best friend.'
        )
      ];
      DB::table('contacts')->insert($contacts);
    }

  }
