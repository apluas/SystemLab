<?php

namespace Database\Seeders\Company;

use Illuminate\Database\Seeder;
use App\Models\Sydelab\Config;
use App\Models\Sydelab\Sucursal;
use App\Models\Sydelab\LetterheadDistribution;


class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ///--- CREACION DE LA CONFIGURACION DE LA EMPRESA POR DEFECTO
        $Config = Config::firstOrCreate([
            'ruc' => config('company.LABORATORY_RUC'),
            'company_name' => config('company.LABORATORY_NAME'),
            'address' => config('company.LABORATORY_ADDRESS'),
            // 'phone' => '',
            // 'url' => '',
            'owner' => config('company.LABORATORY_OWNER'),
            'main' => 'true',
        ]);

        //--- CREACION DE LA SUCURSAL MATRIZ
        $Sucursal = Sucursal::firstOrCreate([
            'name' => 'Matriz',
            'status' => 'ACTIVO',
            'matriz' => 'MATRIZ',
        ]);

        //--- CREACION DE DISTRIBUCION REPORTE PARA ENCABEZADOS
        $arr_distribution = [
            ['code' => null, 'name' => 'Seleccione distribución'],
            ['code' => 'L', 'name' => 'Sólo Logo'],
            ['code' => 'C', 'name' => 'Sólo Contenido'],
            ['code' => 'LC', 'name' => 'Logo y Contenido'],
            ['code' => 'CL', 'name' => 'Contenido y Logo'],
        ];
        foreach ($arr_distribution as $value) {
            $Distrib_letterhead = LetterheadDistribution::firstOrCreate([
                'code' => $value['code'],
                'name' => $value['name'],
            ]);
        }
    }
}
