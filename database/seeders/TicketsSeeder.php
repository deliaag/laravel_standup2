<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tickets')->insert([
            'name' => 'Stand Up Comedy cu Maria Popovici, Mincu, Banciu - Vlad Olteanu la Club 99',
            'photo' => 'https://static.iabilet.ro/img/auto_resized/db/event/01/68/24/00000246887-cf6a-720x405-wtm-8e9b6726.jpg',
            'price' => 25.00, 
		    'type' => 'student'
        ]);

        DB::table('tickets')->insert([
            'name' => 'Stand Up cu George Dumitru, Geo Adrian si Victor Băra',
            'photo' => 'https://static.iabilet.ro/img/auto_resized/db/event/01/67/11/00000245745-f662-720x405-wtm-5f988a9b.png',
            'price' => 50.00,
		    'type' => 'adult'
        ]);

        DB::table('tickets')->insert([
            'name' => ' Stand-up cu Natanticu, Raul, Ciobanu și Frînculescu la ComicsClub!',
            'photo' => 'https://static.iabilet.ro/img/auto_resized/db/event/01/69/e0/00000248498-088e-506x716-bmm-196d99ba.jpg',
            'price' => 35.00, 
            'type' => 'adult'
        ]);

        DB::table('tickets')->insert([
            'name' => 'ComedyBox for Charity - Spectacol de Stand-Up Comedy',
            'photo' => 'https://static.iabilet.ro/img/auto_resized/db/event/01/68/c2/00000247520-bd72-506x716-bmm-ab3eac6d.png',
            'price' => 20.00, 
            'type' => 'student'
        ]);

        DB::table('tickets')->insert([
            'name' => 'Cluj-Napoca: Stand-Up Comedy caritabil cu Sasa, Socol, Ciui, Giurgiu și Toderici',
            'photo' => 'https://static.iabilet.ro/img/auto_resized/db/event/01/6a/bb/00000249316-10ce-506x716-bmm-37a324c5.png',
            'price' => 37.00, 
            'type' => 'pensionar'
        ]);

        DB::table('tickets')->insert([
            'name' => 'Slatina: GirlsUP cu Calița, Voineag, Pripici & Laila | Stand Up Comedy Show',
            'photo' => 'https://static.iabilet.ro/img/auto_resized/db/event/01/67/7b/00000246255-d8bd-506x716-bmm-04632061.jpg',
            'price' => 17.00, 
            'type' => 'elev'
        ]);
    }
}
