<?php

namespace Database\Seeders\Person;

use Illuminate\Database\Seeder;
use App\Models\Sydelab\Sucursal;
use App\Models\Sydelab\Config;
use App\Models\Person\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //CREAR AUTOMATICAMENTE LOS USUARIOS ADMINISTRADORES PARA EL LABORATORIO
        //----DEFAULT USER SYSTEM
        //1-DEBE ESTAR CREADA YA LA MATRIZ DEL LABORATORIO (SE CREARÁ AUTOMATICAMENTE ANTES DE EJECUTAR ESTE SEEDER)
        $matriz = Sucursal::where('matriz', 'MATRIZ')->first();
        $company = Config::where('main', 'true')->first();
        if (isset($matriz) && isset($company)) {
            $all_user = [
                ['ruc'=>$company->ruc,'name' => 'ADMIN Cathy', 'email' => 'anny@sis-lab.com', 'tbl_sucursal' => $matriz->id, 'password' => '2023Anny.,'],
                ['ruc'=>$company->ruc,'name' => 'ADMIN Dennys', 'email' => 'daltamirano@sis-lab.com', 'tbl_sucursal' => $matriz->id, 'password' => '2023Daltamirano.,'],
                ['ruc'=>$company->ruc,'name' => 'ADMIN Alex', 'email' => 'apluas@sis-lab.com', 'tbl_sucursal' => $matriz->id, 'password' => '2023Apluas.,'],
            ];
            foreach ($all_user as $value) {
                $user = User::where('email', $value['email'])->first();
                if (!isset($user)) {
                    $user = User::create([
                        'name' => $value['name'],
                        'ruc' => $value['ruc'],
                        'email' => $value['email'],
                        'tbl_sucursal' => $value['tbl_sucursal'],
                        'password' => Hash::make($value['password']),
                        'show_password' => base64_encode(encrypt($value['password'])),
                        'admin' => 'ACTIVO',
                        'protected' => 'ACTIVO',
                    ]);
                }
            }

            //CREAR USUARIO POR DEFECTO PARA LABORATORIO, MODIFICAR EN EL ARCHIVO .ENV
            $user_default = User::where('email', config('company.USER_LABORATORY_EMAIL'))->first();
            if (!isset($user_default)) {
                $default = User::create([
                    'name' => config('company.USER_LABORATORY_NAME'),
                    'ruc' => $company->ruc,
                    'email' => config('company.USER_LABORATORY_EMAIL'),
                    'tbl_sucursal' => $matriz->id,
                    'password' => Hash::make(config('company.USER_LABORATORY_PASSWORD')),
                    'show_password' => base64_encode(encrypt('USER_LABORATORY_PASSWORD')),
                    'protected' => 'ACTIVO',
                    'user_first' => 'ACTIVO',
                ]);
            }
        }
    }
}
