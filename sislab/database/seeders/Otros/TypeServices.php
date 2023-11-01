<?php

namespace Database\Seeders\Otros;

use Illuminate\Database\Seeder;
use App\Models\Person\User;
use App\Models\Sydelab\Sucursal;
use App\Models\Sydelab\Services;

class TypeServices extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //---1-MATRIZ NECESARIA PARA CREAR LOS REGISTROS, DEBE ESTAR YA CREADA LA MATRIZ
        $matriz = Sucursal::where('matriz', 'MATRIZ')->first();
        //---2-USUARIO DEFAULT, TAMBIEN YA DEBE ESTAR CREADO PARA INSERTAR LOS SIGUIENTES REGISTROS
        $user = User::where('protected', 'ACTIVO')->where('user_first', 'ACTIVO')->first();

        if (isset($user) && isset($Sucursal)) {
            //--- CREACION DE MUESTRAS
            $arr_distribution = [
                ['code' => 'EXT', 'name' => 'Consulta Externa'],
                ['code' => 'INT', 'name' => 'Cuidados Intensivos'],
                ['code' => 'EMG', 'name' => 'Emergencias'],
                ['code' => 'NEO', 'name' => 'Neonatología'],
            ];
            foreach ($arr_distribution as $value) {
                $Services = Services::firstOrCreate([
                    'code' => $value['code'],
                    'name' => $value['name'],
                    'created_by_user' => $user->id,
                ]);
            }
        }
    }
}
