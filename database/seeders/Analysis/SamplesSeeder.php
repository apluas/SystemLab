<?php

namespace Database\Seeders\Analysis;

use Illuminate\Database\Seeder;
use App\Models\Person\User;
use App\Models\Sydelab\Sucursal;
use App\Models\Analysis\Samples;

class SamplesSeeder extends Seeder
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

        if (isset($user) && isset($matriz)) {
            //--- CREACION DE MUESTRAS
            $arr_distribution = [
                ['code' => 'ANT', 'name' => 'Antibiograma'],
                ['code' => 'A-TRAQ', 'name' => 'Aspirado Traqueal'],
                ['code' => 'BIOP', 'name' => 'Biopsia'],
                ['code' => 'C-C-VAG', 'name' => 'Cepillado Cervico-vaginal'],
                ['code' => 'C-PAPAN', 'name' => 'Coloracion Papanicolaou'],
                ['code' => 'ESPUTO', 'name' => 'Esputo'],
                ['code' => 'G-SANGRE', 'name' => 'Gotas de sangre en papel FTA'],
                ['code' => 'H-NASOF', 'name' => 'Hisopado Nasofaringeo'],
                ['code' => 'L-BRONQ', 'name' => 'Lavado Bronquial'],
                ['code' => 'L-AMNIO', 'name' => 'Líquido Amniótico'],
                ['code' => 'L-CEFALO', 'name' => 'Liquido Cefalorraquideo'],
                ['code' => 'L-PLEUR', 'name' => 'Líquido Pleural'],
                ['code' => 'L-SEMIN', 'name' => 'Liquido Seminal'],
                ['code' => 'L-VARS', 'name' => 'Líquidos Varios'],
                ['code' => 'M-FEC', 'name' => 'Materia Fecal'],
                ['code' => 'M-FEC-CULT', 'name' => 'Materia Fecal Cultivo'],
                ['code' => 'M-ONCOL', 'name' => 'Muestra oncologica'],
                ['code' => 'M-VARS', 'name' => 'Muestras Varias'],
                ['code' => 'ORINA', 'name' => 'Orina'],
                ['code' => 'ORINA-C', 'name' => 'Orina Cultivo'],
                ['code' => 'PACIENTE', 'name' => 'Paciente'],
                ['code' => 'PIEL', 'name' => 'Piel'],
                ['code' => 'PLASM', 'name' => 'Plasma'],
                ['code' => 'PLASM-VERD', 'name' => 'Plasma (Verde)'],
                ['code' => 'PLASM-EDTA', 'name' => 'Plasma con EDTA'],
                ['code' => 'CAT-VIA-CENT', 'name' => 'Punta de catéter de vía central'],
                ['code' => 'CAT-VESICAL', 'name' => 'Punta de catéter vesical'],
                ['code' => 'SALIVA', 'name' => 'Saliva'],
                ['code' => 'S-ARTERIAL', 'name' => 'Sangre Arterial'],
                ['code' => 'S-CITRATO', 'name' => 'Sangre Citrato'],
                ['code' => 'S-CITRATO-C', 'name' => 'Sangre Citrato (Celeste)'],
                ['code' => 'S-TOT-EDTA', 'name' => 'Sangre Total EDTA'],
                ['code' => 'S-TOT-EDTA2', 'name' => 'Sangre Total EDTA 2'],
                ['code' => 'S-TOT-EDTA-LILA', 'name' => 'Sangre Total EDTA (Lila)'],
                ['code' => 'S-TOT-EDTA2-LILA', 'name' => 'Sangre Total EDTA2 (Lila)'],
                ['code' => 'S-TOT-HEP', 'name' => 'Sangre Total Heparinizada'],
                ['code' => 'S-TOT-HEP-V', 'name' => 'Sangre Total Heparinizada (Verde)'],
                ['code' => 'S-FARING', 'name' => 'Secreción Faríngea'],
                ['code' => 'S-NASAL', 'name' => 'Secreción Nasal'],
                ['code' => 'S-PURUL', 'name' => 'Secreción Purulenta'],
                ['code' => 'S-TRANQ', 'name' => 'Secreción Traqueal'],
                ['code' => 'S-VAGIN', 'name' => 'Secreción Vaginal'],
                ['code' => 'SEMEN', 'name' => 'Semen'],
                ['code' => 'SUERO', 'name' => 'Suero'],
                ['code' => 'SUERO-R', 'name' => 'Suero (Rojo)'],
                ['code' => 'SUERO-1H', 'name' => 'Suero 1H'],
                ['code' => 'SUERO-1H-R', 'name' => 'Suero 1H (Rojo)'],
                ['code' => 'SUERO-2H', 'name' => 'Suero 2H'],
                ['code' => 'SUERO-2H-R', 'name' => 'Suero 2H (Rojo)'],
                ['code' => 'SUERO-30M', 'name' => 'Suero 30MIN'],
                ['code' => 'SUERO-30M-R', 'name' => 'Suero 30MIN (Rojo)'],
                ['code' => 'SUERO-3H', 'name' => 'Suero 3H'],
                ['code' => 'SUERO-3H-R', 'name' => 'Suero 3H (Rojo)'],
                ['code' => 'SUERO-4H', 'name' => 'Suero 4H'],
                ['code' => 'SUERO-4H-R', 'name' => 'Suero 4H (Rojo)'],
                ['code' => 'SUERO-5H', 'name' => 'Suero 5H'],
                ['code' => 'SUERO-5H-R', 'name' => 'Suero 5H (Rojo)'],
                ['code' => 'SUERO-SP', 'name' => 'Suero con Separador'],
                ['code' => 'SUERO-INM', 'name' => 'Suero Inmunología'],
                ['code' => 'SUERO-PP', 'name' => 'Suero PP'],
                ['code' => 'SUERO-PP-R', 'name' => 'Suero PP (Rojo)'],
                ['code' => 'SUERO-ESP', 'name' => 'Sueros Especiales'],
                ['code' => 'TUBO-4ML', 'name' => 'Tubo EDTA 4ml'],
            ];
            foreach ($arr_distribution as $value) {
                $Samples = Samples::firstOrCreate([
                    'code' => $value['code'],
                    'name' => $value['name'],
                    'created_by_user' => $user->id,
                ]);
            }
        }
    }
}
