<?php

use Illuminate\Database\Seeder;
use App\Models\Properties;

class PropertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($c=0; $c<3; $c++){
            Properties::create([
                'local_lat'=>'-25.415951',
                'local_lng'=>'-49.2848293',
                'total_peca' => 20+$c,
                'ligado' => 0,
                'devices_id'=> 1,
            ]);
        }
    }
}
