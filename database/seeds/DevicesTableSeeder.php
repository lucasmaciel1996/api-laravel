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
                'name' => 'Equipamento de Teste #'.$c,
                'key_id' => md5('123456'),
                'local_lat'=>'-49,5333',
                'local_lng' =>'-59,5333',
                'total_peca' =>20+$c,
                'ligado'=>0,
                'icon'=>'',
            ]);
        }
    }
}
