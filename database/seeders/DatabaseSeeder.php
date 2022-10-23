<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // seed resurse
        // hero section
        $heroSeed = ['titlu' => '', 'subtitlu' => '', 'buttonText' => '', 'imagine' => ''];
        \App\Models\Resurse::factory()->create([
            'titlu' => 'Hero',
            'locatie' => 'Hero',
            'data' => $heroSeed,
        ]);

        // despre noi section
        $despreSeed = [
            'continut' => '',
            'imagine' => '',
            'valori' => [
                'titlu' => 'Valori',
                'adaptabilitate' => ['titlu' => 'Adaptabilitate', 'continut' => ''],
                'cortectitudine' => ['titlu' => 'Cortectitudine', 'continut' => ''],
                'onestitate' => ['titlu' => 'Onestitate', 'continut' => '']
            ],
            'misiune' => ['titlu' => 'Misiune', 'continut' => ''],
            'viziune' => ['titlu' => 'Viziune', 'continut' => '']
        ];
        \App\Models\Resurse::factory()->create([
            'titlu' => 'Despre noi',
            'locatie' => 'Despre noi',
            'data' => $despreSeed,
        ]);
        
        // noutati section
        $noutatiSeed = [
            'imagine' => '',
            'tehnologii' => [
                'titlu' => 'Tehnologii',
                'continut' => ''
            ],
            'legislatie' => [
                'titlu' => 'Legislație',
                'continut' => ''
            ],
        ];
        \App\Models\Resurse::factory()->create([
            'titlu' => 'Noutăți',
            'locatie' => 'Noutati',
            'data' => $noutatiSeed,
        ]);
        
        // contact section
        $contactSeed = [
            'titlu' => 'Ne găsiți aici:',
            'adresa' => 'comuna Sâncraiu, Cluj-Napoca',
            'telefon' => '0721 234 5678',
            'email' => 'info@proiecte-pajisti.ro'
        ];
        \App\Models\Resurse::factory()->create([
            'titlu' => 'Contact',
            'locatie' => 'Contact',
            'data' => $contactSeed,
        ]);

        
    }
}
