<?php

namespace Database\Seeders\Analysis;

use Illuminate\Database\Seeder;
use App\Models\Person\User;
use App\Models\Sydelab\Sucursal;
use App\Models\Analysis\InputOptionMain;
use App\Models\Analysis\InputOptionDetails;

class InputOptionSeeder extends Seeder
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
            //--- CREACION DE INPUT OPTION LISTA
            $arr_distribution = [
                ['name' => 'Alergias', 'options' => ['0', '1', '2', '3', '4']],
                ['name' => 'Aspecto de Heces', 'options' => ['Heterogéneo', 'Homogéneo']],
                ['name' => 'Aspecto del Cuello Uterino', 'options' => ['Atrófico', 'Ausente', 'Congestivo', 'Erosionado', 'Lesión Visible', 'Pólipos', 'Sangrante', 'Sano', 'Ulcerado']],
                ['name' => 'Aspecto de Orina', 'options' => ['Ligeramente Turbio', 'Medicamentoso', 'Sanguinolento', 'Transparente', 'Turbio']],
                ['name' => 'Aumentada-Disminuida', 'options' => ['Aumentada', 'Bacilar Aumentada', 'Disminuida', 'Ligeramente Aumentada', 'Ligeramente Disminuida', 'Mixta', 'Mixta Predominio Bacilar', 'Normal']],
                ['name' => 'Calidad Muestra Citológico', 'options' => ['Ausencia de Células Endocervix', 'Muestra Hemorrágica', 'Muestra Insufuciente', 'Muestra Mal Fijada', 'Muestra Muy Gruesa', 'Solo Exudado Inflamatorio']],
                ['name' => 'Cambios Reactivos', 'options' => ['Atrofia', 'DIU', 'Irradiación', 'Otros', 'Reparación']],
                ['name' => 'Cetonuria', 'options' => ['Alto (80-160 mg/dl)', 'Bajo (15 mg/dl)', 'Moderado (40 mg/dl)', 'Negativo', 'Trazas (5 mg/dl)']],
                ['name' => 'Citológicos', 'options' => ['Adenocarcinoma', 'CA Invasivo Escamocelular', 'Displasia Leve - NIC I', 'Displasia Moderada - NIC II', 'Displasia Severa - NIC III', 'Otros']],
                ['name' => 'Color', 'options' => ['Amarillo']],
                ['name' => 'Antibiograma', 'options' => ['Resistente', 'Sensibilidad Intermedia', 'Sensible']],
                ['name' => 'Color de Heces', 'options' => ['Amarillo', 'Amarillo Verdoso', 'Café', 'Café Negruzco', 'Café Rojizo', 'Marrón', 'Negro', 'Pardo', 'Rojizo', 'Verdoso']],
                ['name' => 'Color de Orina', 'options' => ['Amarillo', 'Amarillo Claro', 'Amarillo Intenso', 'Ámbar', 'Anaranjado', 'Café', 'Incoloro', 'Rojizo', 'Rosado']],
                ['name' => 'Consistencia Esperma', 'options' => ['Líquida', 'Mucoide', 'Semilíquida']],
                ['name' => 'Consistencia Heces', 'options' => ['Blanda', 'Diarréica', 'Dura', 'Líquida', 'Mucoide', 'Pastosa', 'Semilíquida']],
                ['name' => 'Cruces', 'options' => ['+', '++', '+++', '++++', 'Campo Lleno', 'Escasa', 'Escasas', 'Escaso', 'Escasos', 'Negativo', 'Normal', 'No se observan', 'Trazas']],
                ['name' => 'Germen aislado', 'options' => ['Escherichia coli', 'Klebsiella oxytoca', 'Klebsiella pneumoniae', 'Proteus mirabilis']],
                ['name' => 'Glucosuria', 'options' => ['1000 mg/dl', '100 mg/dl', '300 mg/dl', '50 mg/dl', 'Negativo', 'Normal']],
                ['name' => 'Grupo Sanguíneo', 'options' => ['A', 'AB', 'B', 'O']],
                ['name' => 'Hematuria', 'options' => ['Negativo', 'Positiva (+)', 'Positiva (++)', 'Positiva (+++)', 'Trazas']],
                ['name' => 'Interpretación', 'options' => ['Muestra negativa para HLA-B27', 'Muestra positivA para HLA-B27']],
                ['name' => 'Leucocitos en Tira', 'options' => ['10 - 25', '500', '75', 'Negativo', 'Trazas']],
                ['name' => 'Líquidos', 'options' => ['Líquido Amniótico', 'Líquido Articular', 'Líquido Cefaloraquídeo', 'Líquido Pleural', 'Líquido Sinovial']],
                ['name' => 'Método de extracción', 'options' => ['EXTRACCIÓN AUTOMATIZADA QIAcube']],
                ['name' => 'Métodos Anticonceptivos', 'options' => ['Anticonceptivos Orales', 'DIU', 'Ligadura de Trompas', 'Ninguno', 'Otros']],
                ['name' => 'Muestra', 'options' => ['Absceso Perianal', 'Anal', 'Aspiración pulmonar', 'Endocervical', 'Esputo', 'Faríngea', 'Isopado Rectal', 'Líquido Cefaloraquídeo', 'Líquido Peritoneal', 'Líquido Pleural', 'Líquido Seminal', 'Materia Fecal', 'Orina', 'Piel', 'Punta de catéter de vía central', 'Punta de catéter vesical', 'Punta de tubo torácico', 'Quiste de Mama', 'Sangre', 'Secreción de Herida', 'Secreción de Oído', 'Secreción de ulcera de pie', 'Secreción Faríngea', 'Secreción Láctea', 'Secreción Nasal', 'Secreción Ocular', 'Secreción peritoneal', 'Secreción respiratoria', 'Secreción traqueal', 'Secreción Uretral', 'Secreción Vaginal', 'Uña', 'Vaginal']],
                ['name' => 'Normal - Anormal', 'options' => ['Normal', 'Anormal']],
                ['name' => 'Parásitos', 'options' => ['No se observan parásitos', 'Se observan parásitos']],
                ['name' => 'Observación', 'options' => ['No se observa', 'Se observa']],
                ['name' => 'PH', 'options' => ['5.0', '5.5', '6.0', '6.5', '7.0', '7.5', '8.0', '8.5', '9.0']],
                ['name' => 'Positivo Cruces', 'options' => ['Negativo', 'Positivo (+)', 'Positivo (++)', 'Positivo (+++)', 'Positivo (++++)']],
                ['name' => 'Positivo - Negativo', 'options' => ['Indeterminado', 'Negativo', 'Positivo']],
                ['name' => 'Presente - Ausente', 'options' => ['Ausencia', 'Presencia']],
                ['name' => 'Proteinuria', 'options' => ['100 mg/dl', '30 mg/dl', '500 mg/dl', 'Negativo', 'Trazas']],
                ['name' => 'Reactividad', 'options' => ['Indeterminado', 'No reactivo', 'Reactivo']],
                ['name' => 'Reactividad Diluciones', 'options' => ['No reactivo', 'Reactiva (16 dils)', 'Reactiva (1 dils)', 'Reactiva (2 dils)', 'Reactiva (32 dils)', 'Reactiva (3 dils)', 'Reactiva (4 dils)', 'Reactiva (8 dils)', 'Reactivo']],
                ['name' => 'Retracción de Coágulo', 'options' => ['Deficiente', 'Hiporetráctil', 'Normal', 'Nula']],
                ['name' => 'Sedimento', 'options' => ['(+)', '(++)', '(+++)', 'Abundante', 'Escaso', 'Moderado']],
                ['name' => 'Sensibilidad', 'options' => ['Intermedio', 'Resistente', 'Sensible']],
                ['name' => 'Si / No', 'options' => ['No', 'Si']],
                ['name' => 'Sobrecarga Glucosa', 'options' => ['100 gramos', '50 gramos', '75 gramos', '25 gramos']],
                ['name' => 'Urobilinógeno', 'options' => ['+', '++', 'Normal']],
                ['name' => 'Titulación', 'options' => ['Negativo', 'Positivo (Título = 1:128)', 'Positivo (Título = 1:160)', 'Positivo (Título = 1:240)', 'Positivo (Título = 1:32)', 'Positivo (Título = 1:320)', 'Positivo (Título = 1:360)', 'Positivo (Título = 1:40)', 'Positivo (Título = 1:80)', 'Título mayor de 200 U/L', 'Título menor de 200 U/L']],
            ];
            foreach ($arr_distribution as $value) {
                $InputOptionMain = InputOptionMain::firstOrCreate([
                    'name' => $value['name'],
                    'created_by_user' => $user->id,
                ]);
                $options = $value['options'];
                foreach ($options as $opt) {
                    $InputOptionDetails = InputOptionDetails::firstOrCreate([
                        'tbl_result_input_option_main' => $InputOptionMain->id,
                        'name' => $opt,
                        'created_by_user' => $user->id,
                    ]);
                }
            }
        }
    }
}
