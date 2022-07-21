<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Outlet;

class OutletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $outlets = [ 
            [ 
                'name' => 'Malang Outlet',
                'address' => 'Malang',
                'user_id' => 3
            ],
            [ 
                'name' => 'Banjar Outlet',
                'address' => 'Banjar',
                'user_id' => 6
            ],
            [ 
                'name' => 'Banjarbaru Outlet',
                'address' => 'Banjarbaru',
                'user_id' => 5
            ],
            [ 
                'name' => 'Malang Outlet',
                'address' => 'Malang',
                'user_id' => 8
            ],
            [ 
                'name' => 'Banjar Outlet',
                'address' => 'Banjar',
                'user_id' => 9
            ],
            [ 
                'name' => 'Banjarbaru Outlet',
                'address' => 'Banjarbaru',
                'user_id' => 2
            ],

        ];

    foreach($outlets as $outlet)
        {
            Outlet::create([
                'name' => $outlet['name'],
                'address' => $outlet['address'],
                'user_id' => $outlet['user_id'],
            ]);
        }
    }
}
