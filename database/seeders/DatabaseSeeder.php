<?php

namespace Database\Seeders;

use App\Models\Jobs;
use Illuminate\Database\Seeder;
use Illuminate\Queue\Jobs\Job;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        Jobs::factory(150)-> create();

//        Jobs::create([
//             'title' => 'Laravel Senior Developer', 
//             'tags' => 'laravel, javascript',
//             'company' => 'Acme Corp',
//             'location' => 'Boston, MA',
//             'email' => 'email1@email.com',
//             'website' => 'https://www.acme.com',
//             'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
//       ],);

//       Jobs::create([
//         'title' => 'React Senior Developer', 
//         'tags' => 'React, javascript',
//         'company' => 'Microsoft',
//         'location' => 'Washington, DC',
//         'email' => 'email1@email.com',
//         'website' => 'https://www.acme.com',
//         'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
//   ],);

    }
}
