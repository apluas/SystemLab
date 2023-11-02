<?php

namespace Database\Seeders\Otros;

use Illuminate\Database\Seeder;
use App\Models\Person\User;
use App\Models\Sydelab\Sucursal;
use App\Models\Sydelab\Atention;

class TypeAtention extends Seeder
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
            //--- CREACION DE TIPOS DE ATENCIONES
            $arr_distribution = [
                ['code' => 'AMB', 'name' => 'Ambulatoria', 'priority' => 'INACTIVO'],
                ['code' => 'EMG', 'name' => 'Emergencia', 'priority' => 'ACTIVO'],
                ['code' => 'HSP', 'name' => 'Hospitalaria', 'priority' => 'INACTIVO'],
            ];
            foreach ($arr_distribution as $value) {
                $Atention = Atention::firstOrCreate([
                    'code' => $value['code'],
                    'name' => $value['name'],
                    'priority' => $value['priority'],
                    'created_by_user' => $user->id,
                ]);
            }
        }
    }
}
