<?php

namespace Database\Seeders;

use App\Models\VisiMisi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VisiMisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VisiMisi::create([
            'visi' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex ipsam, commodi sint nemo officia quam libero quidem doloremque ut cum. Id dolore quidem sapiente, ad molestias facilis aliquam nisi incidunt!',
            'misi' => 
            '1. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex ipsam, commodi sint nemo officia quam libero quidem doloremque ut cum. Id dolore quidem sapiente, ad molestias facilis aliquam nisi incidunt! 
            2. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex ipsam, commodi sint nemo officia quam libero quidem doloremque ut cum. Id dolore quidem sapiente, ad molestias facilis aliquam nisi incidunt! 
            3. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex ipsam, commodi sint nemo officia quam libero quidem doloremque ut cum. Id dolore quidem sapiente, ad molestias facilis aliquam nisi incidunt!',
        ]);
    }
}


