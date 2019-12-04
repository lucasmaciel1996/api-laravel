<?php

use Illuminate\Database\Seeder;
use App\Models\Devices;
class DevicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($c=0; $c<3; $c++){
            Devices::create([
                'name' => 'Devices de Teste #'.$c,
                'key_id'=>hash('md5',date('YmdHmsi').rand(0,100)),
            ]);
        }
    }
}
