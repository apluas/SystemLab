<?php

namespace Database\Seeders\Analysis;

use Illuminate\Database\Seeder;
use App\Models\Person\User;
use App\Models\Sydelab\Sucursal;
use App\Models\Sydelab\ConfigInterpretationParameter;
use App\Models\Sydelab\Genders;
use App\Models\Analysis\Exams;
use App\Models\Analysis\CategoryExams;
use App\Models\Analysis\RelationTemplatesDefinition;
use App\Models\Analysis\TypeParameterTemplate;
use App\Models\Analysis\InputOptionMain;
use App\Models\Analysis\InputOptionDetails;
use App\Models\Analysis\RelationTemplatesParameters;

class TemplateAnalysisSeeder extends Seeder
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

            $arr_template = [
                ['code' => 'EMO', 'configurations' => [
                    ['name' => 'ELEMENTAL Y MICROSCÓPICO DE ORINA', 'tbl_category_exams_name' => 'Uroanálisis', 'parameters' => [
                        ['type_parameter_code' => 'TIT', 'name' => 'EXAMEN FÍSICO - QUÍMICO'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Color', 'abbreviation' => 'Col', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Color de Orina', 'search_by_id_option_to_text' => 'Amarillo'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Aspecto', 'abbreviation' => 'Aspc', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Aspecto de Orina', 'search_by_id_option_to_text' => 'Transparente'],
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'Densidad', 'abbreviation' => 'Densid', 'genders_code' => 'FM'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'PH', 'abbreviation' => 'PH', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'PH'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Leuco', 'abbreviation' => 'Leuc', 'genders_code' => 'FM', 'unity' => 'Leuc/ul', 'tbl_result_input_option_main_name' => 'Leucocitos en Tira', 'search_by_id_option_to_text' => 'Negativo'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Nitritos', 'abbreviation' => 'Nit', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo', 'search_by_id_option_to_text' => 'Negativo'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Proteinas', 'abbreviation' => 'Prot', 'genders_code' => 'FM', 'unity' => 'mg/dL', 'tbl_result_input_option_main_name' => 'Proteinuria', 'search_by_id_option_to_text' => 'Negativo'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Glucosa', 'abbreviation' => 'Glu', 'genders_code' => 'FM', 'unity' => 'mg/dL', 'tbl_result_input_option_main_name' => 'Glucosuria', 'search_by_id_option_to_text' => 'Negativo'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Cuerpos Cetónicos', 'abbreviation' => 'Cet', 'genders_code' => 'FM', 'unity' => 'mg/dL', 'tbl_result_input_option_main_name' => 'Cetonuria', 'search_by_id_option_to_text' => 'Negativo'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Urobilinógeno', 'abbreviation' => 'Uro', 'genders_code' => 'FM', 'unity' => 'mg/dL', 'tbl_result_input_option_main_name' => 'Urobilinógeno', 'search_by_id_option_to_text' => 'Normal'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Bilirrubinas', 'abbreviation' => 'Bil', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo', 'search_by_id_option_to_text' => 'Negativo'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Sangre', 'abbreviation' => 'Sang', 'genders_code' => 'FM', 'unity' => 'ery/uL', 'tbl_result_input_option_main_name' => 'Hematuria', 'search_by_id_option_to_text' => 'Negativo'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Hemoglobina', 'abbreviation' => 'Hem', 'genders_code' => 'FM', 'unity' => 'Ery/uL', 'tbl_result_input_option_main_name' => 'Hematuria', 'search_by_id_option_to_text' => 'Negativo'],
                        ['type_parameter_code' => 'TIT', 'name' => 'EXAMEN MICROSCOPICO'],
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'Leucocitos', 'abbreviation' => 'Leu', 'genders_code' => 'FM'],
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'Piocitos', 'abbreviation' => 'Pioc', 'genders_code' => 'FM'],
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'Hematíes', 'abbreviation' => 'Hemat', 'genders_code' => 'FM'],
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'Células Epiteliales', 'abbreviation' => 'Ep', 'genders_code' => 'FM'],
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'Células Redondas', 'abbreviation' => 'Rd', 'genders_code' => 'FM'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Moco', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Bacterias', 'abbreviation' => 'Bact', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Leptotrix', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Pseudohifas', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Trichomonas SPP', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Espermatozoides', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Cristales de Ácido Úrico', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Cristales de Fosfatos Triples', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Cristales de Fosfatos Amorfos', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Cristales de Uratos Amorfos', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Cristales de Oxalato de Calcio', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Cristales de Tiroxina', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Cristales de Tiroxina', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'Cilindros Granulosos', 'abbreviation' => 'Gran', 'genders_code' => 'FM'],
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'Cilindros Céreos', 'abbreviation' => 'Cer', 'genders_code' => 'FM'],
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'Cilindros Eritrocitarios', 'abbreviation' => 'Eri', 'genders_code' => 'FM'],
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'Cilindros Hialinos', 'abbreviation' => 'Hial', 'genders_code' => 'FM'],
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'Cilindros Leucocitarios', 'abbreviation' => 'Cil.Leuc.', 'genders_code' => 'FM'],
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'Cilindros Leucocitarios', 'abbreviation' => 'Cil.Leuc.', 'genders_code' => 'FM'],
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'Coloración GRAM', 'genders_code' => 'FM'],
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'Bacilos Gram Negativos', 'genders_code' => 'FM'],
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'Bacilos Gram Positivos', 'genders_code' => 'FM'],
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'Cocobacilos Gram Negativos', 'genders_code' => 'FM'],
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'Cocos Gram Positivos', 'genders_code' => 'FM'],
                    ],
                    ],
                ],
                ],
                ['code' => 'COL', 'configurations' => [
                    ['name' => 'COLESTEROL', 'tbl_category_exams_name' => 'Bioquímica', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Colesterol', 'abbreviation' => 'COL', 'genders_code' => 'FM', 'unity' => 'mg/dL', 'value_min' => '0', 'value_max' => '200', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'FT4', 'configurations' => [
                    ['name' => 'TIROXINA T4 LIBRE', 'tbl_category_exams_name' => 'Estudios Hormonales', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'FT4', 'abbreviation' => 'FT4', 'genders_code' => 'FM', 'unity' => 'mg/dL', 'value_min' => '0,8', 'value_max' => '2', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'TRI', 'configurations' => [
                    ['name' => 'TRIGLICÉRIDOS', 'tbl_category_exams_name' => 'Bioquímica', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Triglicéridos', 'abbreviation' => 'TRI', 'genders_code' => 'FM', 'unity' => 'mg/dL', 'value_min' => '0', 'value_max' => '150', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'VLDL', 'genders_code' => 'FM', 'unity' => 'mg/dL', 'value_min' => '2', 'value_max' => '30', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => '17OH', 'configurations' => [
                    ['name' => '17-OH-PROGESTERONA', 'tbl_category_exams_name' => 'Estudios Hormonales', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => '17 OH PROGESTERONA', 'genders_code' => 'FM', 'unity' => 'mg/dL', 'value_min' => '0', 'value_max' => '25', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>VALORES DE REFERENCIA:&nbsp;</p><p>FASE FOLICULAR: 0.1-1.0 ng/mL&nbsp;</p><p>FASE LUTEA: 0.6-2.5 ng/mL&nbsp;</p><p>FASE OVULATORIA: 0.3-1.5 ng/mL</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'FOSLIG', 'configurations' => [
                    ['name' => 'ANTICUERPOS ANTIFOSFOLIPIDOS IgG', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Anti-Fosfolípidos Screen IgG', 'genders_code' => 'FM', 'unity' => 'GPL-U/mL', 'value_min' => '0', 'value_max' => '10', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>VALORES DE REFERENCIA POSITIVO: T&Iacute;TULOS IGUALES O SUPERIORES A 1/5 NEGATIVO: T&Iacute;TULOS MENORES A 1/5</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'FOSLIM', 'configurations' => [
                    ['name' => 'ANTICUERPOS ANTIFOSFOLIPIDOS IGM', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Anti-Fosfolípidos Screen IgM', 'genders_code' => 'FM', 'unity' => 'MPL-U/mL', 'value_min' => '0', 'value_max' => '10', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>VALORES DE REFERENCIA POSITIVO: T&Iacute;TULOS IGUALES O SUPERIORES A 1/5 NEGATIVO: T&Iacute;TULOS MENORES A 1/5</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'ACENDG', 'configurations' => [
                    ['name' => 'ANTIENDOMISIO IgG', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Anticuerpos Anti-Endomisio IgG', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo', 'interpretation' => '<p>VALORES DE REFERENCIA POSITIVO: T&Iacute;TULOS IGUALES O SUPERIORES A 1/5 NEGATIVO: T&Iacute;TULOS MENORES A 1/5</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'AFOL', 'configurations' => [
                    ['name' => 'ÁCIDO FÓLICO', 'tbl_category_exams_name' => 'Inmunoquímica Sanguínea', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'ÁCIDO FÓLICO', 'genders_code' => 'FM', 'unity' => 'ng/mL', 'value_min' => '3', 'value_max' => '17', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'ALACT', 'configurations' => [
                    ['name' => 'ÁCIDO LÁCTICO (LACTATO)', 'tbl_category_exams_name' => 'Bioquímica', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'Ácido Láctico (Lactato)', 'genders_code' => 'FM', 'unity' => 'mmol/L', 'tbl_config_interpretation_templates_code' => 'C-EXM', 'interpretation' => '<p>VALORES DE REFERENCIA</p><p><strong>PLASMA:</strong> 0.5 - 2.2 mmol/L</p><p><strong>LCR</strong></p><p>NEONATOS: 1 .1 - 6.7 mmol/L</p><p>3 A 10 D&Iacute;AS: 1.1 - 4.4 mmol/L</p><p>MAYOR A 10 D&Iacute;AS: 1.1 - 2.8 mmol/L</p><p>ADULTOS: 1.1 - 2.4 mmol/L</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'AU', 'configurations' => [
                    ['name' => 'ÁCIDO ÚRICO', 'tbl_category_exams_name' => 'Bioquímica', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Ácido Úrico', 'abbreviation' => 'AU', 'genders_code' => 'M', 'unity' => 'mg/dl', 'value_min' => '3,4', 'value_max' => '7', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Ácido Úrico', 'abbreviation' => 'AU', 'genders_code' => 'F', 'unity' => 'mg/dl', 'value_min' => '2,4', 'value_max' => '6', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'AVAL', 'configurations' => [
                    ['name' => 'ÁCIDO VALPRÓICO', 'tbl_category_exams_name' => 'Inmunoquímica Sanguínea', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'ÁCIDO VALPRÓICO', 'genders_code' => 'FM', 'unity' => 'ug/mL', 'value_min' => '50', 'value_max' => '100', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                /*'sample'=>'Hisopado Nasofaringeo'*/['code' => 'ADENO', 'configurations' => [
                    ['name' => 'Adenovirus por ADN/PCR', 'tbl_category_exams_name' => 'Biología Molecular', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Adenovirus', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo'],
                    ],
                    ],
                ],
                ],
                ['code' => 'WIDAL', 'configurations' => [
                    ['name' => 'AGLUTINACIONES FEBRILES (REACCIÓN DE WIDAL)', 'tbl_category_exams_name' => 'Serología', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'THYPICO O', 'abbreviation' => 'THYP. O', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Titulación'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'THYPICO H', 'abbreviation' => 'THYP. H', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Titulación'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'PARATHYFICO A', 'abbreviation' => 'PARAT. A', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Titulación'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'PARATHYFICO B', 'abbreviation' => 'PARAT. B', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Titulación'],
                    ],
                    ],
                ],
                ],
                ['code' => 'TGP', 'configurations' => [
                    ['name' => 'ALANINO AMINOTRANSFERASA GPT (ALT)', 'tbl_category_exams_name' => 'Bioquímica', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'TGP/ALT', 'genders_code' => 'M', 'unity' => 'U/L', 'value_min' => '0', 'value_max' => '42', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'TGP/ALT', 'genders_code' => 'F', 'unity' => 'U/L', 'value_min' => '0', 'value_max' => '32', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'ALBU', 'configurations' => [
                    ['name' => 'ALBÚMINA', 'tbl_category_exams_name' => 'Bioquímica', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'ALBÚMINA', 'genders_code' => 'FM', 'unity' => 'g/dL', 'value_min' => '3,5', 'value_max' => '5', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'ALDO', 'configurations' => [
                    ['name' => 'ALDOLASA', 'tbl_category_exams_name' => 'Bioquímica', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'ALDOLASA', 'genders_code' => 'FM', 'unity' => 'U/mL', 'value_min' => '2', 'value_max' => '7,6', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'ANABLO', 'configurations' => [
                    ['name' => 'ANA BLOT', 'tbl_category_exams_name' => 'Especiales', 'parameters' => [
                        ['type_parameter_code' => 'TIT', 'name' => 'ANA BLOT - ANTÍGENOS'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'RIB-P', 'abbreviation' => 'RIB-P', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'CENP-B', 'abbreviation' => 'CENP-B', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'JO-1', 'abbreviation' => 'JO-1', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'SCL-70', 'abbreviation' => 'SCL-70', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'RNP/SM', 'abbreviation' => 'RNP/SM', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'SM', 'abbreviation' => 'SM', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'SS-B', 'abbreviation' => 'SS-B', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'SS-A 52', 'abbreviation' => 'SS-A 52', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'SS-A 60', 'abbreviation' => 'SS-A 60', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'DNADS', 'abbreviation' => 'DNADS', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'NUCLEOSOME', 'abbreviation' => 'NUCLEOSOME', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'HISTONE', 'abbreviation' => 'HISTONE', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'SMD1', 'abbreviation' => 'SMD1', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'PCNA', 'abbreviation' => 'PCNA', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'P0', 'abbreviation' => 'P0', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'U1-SNRNP', 'abbreviation' => 'U1-SNRNP', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'AMA-M2', 'abbreviation' => 'AMA-M2', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'PM-SCL', 'abbreviation' => 'PM-SCL', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'MI-2', 'abbreviation' => 'MI-2', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'KU', 'abbreviation' => 'KU', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo'],
                    ],
                    ],
                    ['name' => 'PANEL DE ANEMIAS	', 'tbl_category_exams_name' => 'Drogas y Fármacos', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'Muestra', 'genders_code' => 'FM'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Herpes', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Benzodiazepinas', 'abbreviation' => 'BENZO', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Cocaína', 'abbreviation' => 'COCA', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Marihuana', 'abbreviation' => 'MARI', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Methadona', 'abbreviation' => 'METAD', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Metanfetaminas', 'abbreviation' => 'METANF', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Morfina', 'abbreviation' => 'MORF', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Éxtasis', 'abbreviation' => 'MDMA', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Fenciclidina', 'abbreviation' => 'PCP', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Antidepresivos tricíclicos', 'abbreviation' => 'TCA', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo'],
                    ],
                    ],
                ],
                ],
                ['code' => 'ANDROS', 'configurations' => [
                    ['name' => 'ANDROSTENEDIONA', 'tbl_category_exams_name' => 'Estudios Hormonales', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'ANDROSTENEDIONA', 'genders_code' => 'M', 'unity' => 'ng/mL', 'value_min' => '0,6', 'value_max' => '3,1', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'ANDROSTENEDIONA', 'genders_code' => 'F', 'unity' => 'ng/mL', 'value_min' => '0,3', 'value_max' => '3,3', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'ANFE', 'configurations' => [
                    ['name' => 'ANFETAMINAS', 'tbl_category_exams_name' => 'Drogas y Fármacos', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'ANFETAMINAS', 'genders_code' => 'FM', 'unity' => 'pg/mL', 'value_min' => '0,7', 'value_max' => '2', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'ANTIVI', 'configurations' => [
                    ['name' => 'ANTI-VIMENTINA CITRULINADA', 'tbl_category_exams_name' => 'Inmunoquímica Sanguínea', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Anti-Vimentina Citrulinada', 'genders_code' => 'FM', 'unity' => 'U/mL', 'value_min' => '0', 'value_max' => '20', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'B2GP1M', 'configurations' => [
                    ['name' => 'ANTI-BETA 2 GLICOPROTEINA IGM', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Beta 2 Glicoproteína I IgM', 'genders_code' => 'FM', 'unity' => 'U/mL', 'value_min' => '0', 'value_max' => '5', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'ADNA', 'configurations' => [
                    ['name' => 'ANTI-DNA', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Anti-DNA', 'genders_code' => 'FM', 'unity' => 'U/mL', 'tbl_result_input_option_main_name' => 'Positivo - Negativo', 'interpretation' => '<p>SUSTRATO: ADN MITOCONDRIAL DE CRITHIDIA LUCILIAE VALORES DE REFERENCIA: POSITIVO: SE CONSIDERA DNA POSITIVO LOS T&Iacute;TULOS IGUALES O SUPERIORES A 1/10 CON PATR&Oacute;N KINETOPLASTO NEGATIVO: SE CONSIDERA DNA NEGATIVO LOS T&Iacute;TULOS IMENORES A 1/10&nbsp;</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'ANCAP', 'configurations' => [
                    ['name' => 'ANTI-MPO (ANCA-P)', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Anti-MPO (pANCA)', 'genders_code' => 'FM', 'unity' => 'U/mL', 'value_min' => '0', 'value_max' => '5', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>VALORES DE REFERENCIA: NEGATIVO: &lt; 5 U/ml POSITIVO: &gt; 5 U/ml&nbsp;</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'ANCAC', 'configurations' => [
                    ['name' => 'ANTI-PR3 (ANCA-C)', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Anti-PR3 (cANCA)', 'genders_code' => 'FM', 'unity' => 'U/mL', 'value_min' => '0', 'value_max' => '5', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>VALORES DE REFERENCIA: NEGATIVO: &lt; 5 U/ml POSITIVO: &gt; 5 U/ml&nbsp;</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'ATG', 'configurations' => [
                    ['name' => 'ANTI-TIROGLOBULINA', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'Anti-Tiroglobulina (ATG)', 'genders_code' => 'FM', 'unity' => 'U/mL', 'value_normal' => '0 - 115'],
                    ],
                    ],
                ],
                ],
                ['code' => 'ATPO', 'configurations' => [
                    ['name' => 'ANTI MICROSOMALES (TPO) (PEROXIDASA TIROIDEA)', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Anti-Tiroperoxidasa (TPO)', 'genders_code' => 'FM', 'unity' => 'IU/mL', 'value_min' => '0', 'value_max' => '35', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'ANTIB', 'configurations' => [
                    ['name' => 'ANTIBIOGRAMA', 'tbl_category_exams_name' => 'Microbiología', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'ACIDO NALIDÍXICO', 'abbreviation' => 'AC. NALID.', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Antibiograma'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'AMIKACIN', 'abbreviation' => 'AMIK', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Antibiograma'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'AMOXACILINA', 'abbreviation' => 'AMOXA', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Antibiograma'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'AMOXACILINA + ACIDO CLAVULANICO', 'abbreviation' => 'AMOX+CLA', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Antibiograma'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'AZYTROMICINA', 'abbreviation' => 'AZYTRO', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Antibiograma'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'AMPICILINA', 'abbreviation' => 'AMP', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Antibiograma'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'AMPICILINA + SULBATAME', 'abbreviation' => 'AMP SULB', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Antibiograma'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'AZTREONAM', 'abbreviation' => 'AZTREO', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Antibiograma'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'CARBENICILINA', 'abbreviation' => 'CARBE', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Antibiograma'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'CEFACLOR', 'abbreviation' => 'CEFAC', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Antibiograma'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'CEFALEXINA', 'abbreviation' => 'CEFALEX', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Antibiograma'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'CEFALOTINA', 'abbreviation' => 'CEFALO', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Antibiograma'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'CEFTAZIDIME', 'abbreviation' => 'CEFTA', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Antibiograma'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'CEFTRIAXONE', 'abbreviation' => 'CEFTRIA', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Antibiograma'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'CIPROFLOXACINA', 'abbreviation' => 'CIPROF', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Antibiograma'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'CLINDAMICINA', 'abbreviation' => 'CLINDA', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Antibiograma'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'CLORANFENICOL', 'abbreviation' => 'CLORAF', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Antibiograma'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'EMIPENEM', 'abbreviation' => 'EMIPEN', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Antibiograma'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'ERITROMICINA', 'abbreviation' => 'ERITRO', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Antibiograma'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'FOSFOMICINA', 'abbreviation' => 'FOSFO', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Antibiograma'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'GENTAMICINA', 'abbreviation' => 'GENTA', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Antibiograma'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'NITROFURANTOINA', 'abbreviation' => 'NITROF', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Antibiograma'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'OXACILINA', 'abbreviation' => 'OXAC', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Antibiograma'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'PENICILINA', 'abbreviation' => 'PENIC', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Antibiograma'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'RIFAMPICINA', 'abbreviation' => 'RIFAM', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Antibiograma'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'TETRACICLINA', 'abbreviation' => 'TETRAC', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Antibiograma'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'TICARCILINA', 'abbreviation' => 'TICAR', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Antibiograma'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'TOBRAMICINA', 'abbreviation' => 'TOBRA', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Antibiograma'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'TR-MSX', 'abbreviation' => 'TR-MSX', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Antibiograma'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'VANCOMICINA', 'abbreviation' => 'VANCO', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Antibiograma'],
                    ],
                    ],
                ],
                ],
                ['code' => 'CARDIA', 'configurations' => [
                    ['name' => 'ANTICARDIOLIPINA IgA', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Anticardiolipina IgA', 'genders_code' => 'FM', 'unity' => 'U-arb/mL', 'value_min' => '0', 'value_max' => '10', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>VALORES DE REFERENCIA Negativo: menor de 10 U-arb /mL Positivo bajo: 10-20 U-arb /mL Positivo moderado: 21-30 U-arb/mL Positivo alto: mayor de 30 U-arb/mL&nbsp;</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'CARDIG', 'configurations' => [
                    ['name' => 'ANTICARDIOLIPINA IgG', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Anticardiolipina IgG', 'genders_code' => 'FM', 'unity' => 'GPL-U/mL', 'value_min' => '0', 'value_max' => '20', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>VALORES DE REFERENCIA Negativo: menor de 20 GPL U/mL Positivo bajo: 20-30 GPL U/mL Positivo moderado: 31-50 GPL U/mL Positivo alto: mayor 50 GPL U/mL&nbsp;</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'CARDIM', 'configurations' => [
                    ['name' => 'ANTICARDIOLIPINA IgM', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Anticardiolipina IgM', 'genders_code' => 'FM', 'unity' => 'MPL-U/mL', 'value_min' => '0', 'value_max' => '7', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>VALORES DE REFERENCIA Negativo: menor de 7 MPL U/mL Positivo bajo: 7-10 MPL U/mL Positivo moderado: 11-15 MPL U/mL Positivo alto: mayor 15 MPL /mL&nbsp;</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'LUPICO', 'configurations' => [
                    ['name' => 'ANTICOAGULANTE LÚPICO', 'tbl_category_exams_name' => 'Coagulación', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Anticoagulante Lúpico LA1', 'genders_code' => 'FM', 'unity' => 'MPL-U/mL', 'value_min' => '30', 'value_max' => '44', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'ANTILA', 'configurations' => [
                    ['name' => 'ANTICUERPOS ANTI LA (ANTI - SSB)', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Anti-LA (Anti-SSB)', 'genders_code' => 'FM', 'unity' => 'U/mL', 'value_min' => '0', 'value_max' => '15', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>VALORES DE REFERENCIA NEGATIVO: MENOR A 15 U/mL POSITIVO: MAYOR A 25 U/mL BORDERLINE: 15 - 25 U/mL&nbsp;</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'ARNP', 'configurations' => [
                    ['name' => 'ANTICUERPOS ANTI RNP', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Anti-RNP/Sm', 'genders_code' => 'FM', 'unity' => 'U/mL', 'value_min' => '0', 'value_max' => '15', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>VALORES DE REFERENCIA: NEGATIVO: &lt;15 U/mL POSITIVO: &gt;25 U/mL&nbsp;</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'ANTIRO', 'configurations' => [
                    ['name' => 'ANTICUERPOS ANTI-RO (ANTI-SSA)', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Anti-RO (Anti-SSA)', 'genders_code' => 'FM', 'unity' => 'U/mL', 'value_min' => '0', 'value_max' => '15', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>VALORES DE REFERENCIA NEGATIVO: &lt; 15 U/mL POSITIVO: &gt; 25 U/mL&nbsp;</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'ANTISM', 'configurations' => [
                    ['name' => 'ANTICUERPOS ANTI-RO (ANTI-SSA)', 'tbl_category_exams_name' => 'Inmunoquímica Sanguínea', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Anti-Sm', 'genders_code' => 'FM', 'unity' => 'U/mL', 'value_min' => '0', 'value_max' => '15', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>VALORES DE REFERENCIA: NEGATIVO: MENOR A 15 U/mL POSITIVO: MAYOR A 25 U/mL BORDERLINE: 15 - 25 U/mL&nbsp;</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'LKM1', 'configurations' => [
                    ['name' => 'ANTICUERPOS ANTIMICROSOMALES HÍGADO RIÑON (LKM1)', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'ANTI LIVER KIDNEY MICROSOMAL 1', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo', 'interpretation' => '<p>VALORES DE REFERENCIA SE CONSIDERA LKM POSITIVO LOS T&Iacute;TULOS IGUALES O SUPERIORES A 1/20 SE CONSIDERA LKM NEGATIVO LOS T&Iacute;TULOS MENORES A 1/20&nbsp;</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'ANA', 'configurations' => [
                    ['name' => 'ANTICUERPOS ANTINUCLEARES ANA', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Anticuerpos Antinucleares (ANA)', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo'],
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'Patrón nuclear', 'genders_code' => 'FM'],
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'Dilución', 'genders_code' => 'FM'],
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'Sustrato', 'genders_code' => 'FM', 'interpretation' => '<p>VALORES DE REFERENCIA: POSITIVO: SE CONSIDERA ANA POSITIVO LOS T&Iacute;TULOS IGUAL O SUPERIORES A 1/80. NEGATIVO: SE CONSIDERA ANA NEGATIVO LOS T&Iacute;TULOS MENORES A 1/80&nbsp;</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'ACENDA', 'configurations' => [
                    ['name' => 'ANTIENDOMISIO IgA', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Anticuerpos Anti-Endomisio IgA', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo', 'interpretation' => '<p>VALORES DE REFERENCIA POSITIVO: T&Iacute;TULOS IGUALES O SUPERIORES A 1/5 NEGATIVO: T&Iacute;TULOS MENORES A 1/5&nbsp;</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'ACENDA', 'configurations' => [
                    ['name' => 'ANTIENDOMISIO IgA', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Anticuerpos Anti-Endomisio IgA', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo', 'interpretation' => '<p>VALORES DE REFERENCIA POSITIVO: T&Iacute;TULOS IGUALES O SUPERIORES A 1/5 NEGATIVO: T&Iacute;TULOS MENORES A 1/5&nbsp;</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'ASTO', 'configurations' => [
                    ['name' => 'ANTIESTREPTOLISINA (ASTO) CUALITATIVO', 'tbl_category_exams_name' => 'Serología', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Antiestreptolisina (ASTO) Cualitativo', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo Cruces'],
                    ],
                    ],
                    ['name' => 'ANTIESTREPTOLISINA (ASTO) CUANTITATIVO', 'tbl_category_exams_name' => 'Serología', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Antiestreptolisina (ASTO) Cuantitativo', 'genders_code' => 'FM', 'unity' => 'UI/ml', 'value_min' => '0', 'value_max' => '200', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                    ['name' => 'ANTIESTREPTOLISINA (ASTO) SEMICUANTITATIVO', 'tbl_category_exams_name' => 'Serología', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Antiestreptolisina (ASTO) Semicuantitativo', 'genders_code' => 'FM', 'unity' => 'UI/ml', 'value_min' => '0', 'value_max' => '200', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'CEA', 'configurations' => [
                    ['name' => 'ANTIGENO CARCINOEMBRIONARIO (CEA)', 'tbl_category_exams_name' => 'Marcadores Tumorales', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Antígeno Carcinoembrionario (CEA)', 'genders_code' => 'FM', 'unity' => 'ng/mL', 'value_min' => '0', 'value_max' => '3,8', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>VALORES DE REFERENCIA: NO FUMADORES: 0.0 - 3.8 ng/mL FUMADORES: 0.0 - 5.5 ng/mL&nbsp;</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'STREPA', 'configurations' => [
                    ['name' => 'ANTIGENO DE ESTREPTOCOCO GRUPO A (STREP A TEST)', 'tbl_category_exams_name' => 'Microbiología', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Muestra', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Muestra'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Antígeno de Estreptococo Grupo A (Strep A Test)', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo'],
                    ],
                    ],
                ],
                ],
                ['code' => 'AGIAR', 'configurations' => [
                    ['name' => 'GIARDIA', 'tbl_category_exams_name' => 'Coproanálisis', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'GIARDIA', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo'],
                    ],
                    ],
                ],
                ],
                ['code' => 'PSA', 'configurations' => [
                    ['name' => 'ANTIGENO PROSTATICO ESPECIFICO (PSA TOTAL)', 'tbl_category_exams_name' => 'Marcadores Tumorales', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'PSA TOTAL', 'genders_code' => 'M', 'unity' => 'ng/mL', 'value_min' => '0', 'value_max' => '4,1', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>0 &ndash; 39 a&ntilde;os: HASTA 1.4 ng/mL 40 &ndash; 49 a&ntilde;os: HASTA 2.0 ng/mL 50 &ndash; 59 a&ntilde;os: HASTA 3.1 ng/mL 60 &ndash; 69 a&ntilde;os: HASTA 4.1 ng/mL 70 a&ntilde;os en Adelante: HASTA 4.4 ng/mL&nbsp;</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'FPSA', 'configurations' => [
                    ['name' => 'ANTÍGENO PROSTÁTICO LIBRE (FPSA)', 'tbl_category_exams_name' => 'Marcadores Tumorales', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'PSA Libre', 'genders_code' => 'M', 'unity' => 'ng/mL', 'value_min' => '0', 'value_max' => '4', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>40 &ndash; 49 a&ntilde;os: HASTA 0.5 ng/mL 50 &ndash; 59 a&ntilde;os: HASTA 0.7 ng/mL 60 &ndash; 69 a&ntilde;os: HASTA 1.0 ng/mL 70 a&ntilde;os en Adelante: HASTA 1.2 ng/mL&nbsp;</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'EBVNAG', 'configurations' => [
                    ['name' => 'EPSTEIN BARR ANTÍGENOS NUCLEARES IGG QUIMIOLUMINISCENCIA', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Epstein Barr Virus Antígenos Nucleares (EBVNA) IgG', 'genders_code' => 'FM', 'unity' => 'U/mL', 'value_min' => '0', 'value_max' => '0,9', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>INTERPRETACI&Oacute;N:</p><p>MENOR 0.9 NO REACTIVO : AUSENCIA DE ANTICUERPOS DETECTABLES IgG PARA EL</p><p>ANT&Iacute;GENO NUCLEAR VIRUS EPSTEIN BARR.</p><p>ENTRE 0.9 Y &lt; 1.1 INDETERMINADO PARA LA PRESENCIA DE ANTICUERPOS DETECTABLES IgG PARA EL ANT&Iacute;GENO NUCLEAR VIRUS EPSTEIN BARR, SE SUGIERE REPETIR EL AN&Aacute;LISIS EN DOS SEMANAS.</p><p>MAYOR A 1.1 REACTIVO: PRESENCIA DE ANTICUERPOS DETECTABLES IgG PARA EL ANT&Iacute;GENO NUCLEAR VIRUS EPSTEIN BARR.</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'ANGLIG', 'configurations' => [
                    ['name' => 'ANTI GLIADINA IgG', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Anti-Gliadina IgG', 'genders_code' => 'FM', 'unity' => 'U/mL', 'value_min' => '0', 'value_max' => '12', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>VALORES DE REFERENCIA NEGATIVO: &lt;12 U/mL POSITIVO: &gt;12 U/mL&nbsp;</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'AMA', 'configurations' => [
                    ['name' => 'Anti Mitocondriales', 'tbl_category_exams_name' => 'Inmunoquímica Sanguínea', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'Anti Mitocondriales', 'genders_code' => 'FM'],
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'Sustrato', 'genders_code' => 'FM', 'interpretation' => '<p>VALORES DE REFERENCIA: SE CONSIDERA AMA POSITIVO LOS T&Iacute;TULOS IGUALES O SUPERIORES A 1/20 SE CONSIDERA AMA NEGATIVO LOS T&Iacute;TULOS MENORES A 1/20&nbsp;</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'ATSH', 'configurations' => [
                    ['name' => 'ANTIRECEPTOR TSH', 'tbl_category_exams_name' => 'Estudios Hormonales', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Anticuerpos Anti-Receptor de TSH', 'genders_code' => 'FM', 'unity' => 'UI/L', 'value_min' => '1', 'value_max' => '1,5', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>VALORES DE REFERENCIA NEGATIVO: INFERIOR A 1.0 UI/L POSITIVO: MAYOR A 1.5 UI/L&nbsp;</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'TRANSA', 'configurations' => [
                    ['name' => 'ANTITRANSGLUTAMINASA IGA', 'tbl_category_exams_name' => 'Inmunoquímica Sanguínea', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Transglutaminasa Tisular IgA', 'genders_code' => 'FM', 'unity' => 'UI/L', 'value_min' => '0', 'value_max' => '10', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>VALORES DE REFERENCIA</p><p>NEGATIVO: MENOR A 10 U/mL</p><p>POSITIVO: MAYOR O IGUAL A10 U/mL</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'TRANSG', 'configurations' => [
                    ['name' => 'ANTITRANSGLUTAMINASA IGG', 'tbl_category_exams_name' => 'Inmunoquímica Sanguínea', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Transglutaminasa Tisular IgG', 'genders_code' => 'FM', 'unity' => 'U/mL', 'value_min' => '0', 'value_max' => '10', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>VALORES DE REFERENCIA</p><p>NEGATIVO: MENOR A 10 U/mL</p><p>POSITIVO: MAYOR O IGUAL A 10 U/mL</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'APOA', 'configurations' => [
                    ['name' => 'APOLIPOPROTEINA A', 'tbl_category_exams_name' => 'Bioquímica', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'Apolipoproteína A', 'unity' => 'mg/dL', 'genders_code' => 'FM', 'value_normal' => 'Mayor a 160 mg/dL'],
                    ],
                    ],
                ],
                ],
                ['code' => 'APOA', 'configurations' => [
                    ['name' => 'APOLIPOPROTEÍNA B', 'tbl_category_exams_name' => 'Bioquímica', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Apolipoproteína B', 'abbreviation' => 'APOB', 'genders_code' => 'FM', 'unity' => 'mg/dL', 'value_min' => '60', 'value_max' => '138', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'TGO', 'configurations' => [
                    ['name' => 'ASPARTATO AMINOTRANSFERASA TGO (AST)', 'tbl_category_exams_name' => 'Bioquímica', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'TGO/AST', 'abbreviation' => 'TGO', 'genders_code' => 'M', 'unity' => 'U/L', 'value_min' => '0', 'value_max' => '38', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'TGO/AST', 'abbreviation' => 'TGO', 'genders_code' => 'F', 'unity' => 'U/L', 'value_min' => '0', 'value_max' => '31', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'AHBE', 'configurations' => [
                    ['name' => 'HEPATITIS B ANTICUERPOS CONTRA ANTÍGENO E (Anti-HBe)', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Hepatitis B Ac. Contra Antígeno E (Anti-HBe)', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo'],
                    ],
                    ],
                ],
                ],
                ['code' => 'JO1', 'configurations' => [
                    ['name' => 'ANTICUERPOS ANTI JO CUANTITATIVO', 'tbl_category_exams_name' => 'Inmunoquímica Sanguínea', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'Anti Jo (Cuantitativo)', 'unity' => 'U/mL', 'genders_code' => 'FM', 'value_normal' => 'Mayor a 160 mg/dL', 'interpretation' => '<p>VALORES DE REFERENCIA POSITIVO: MAYOR A 25 U/mL NEGATIVO: MENOR A 15 U/mL BORDERLINE: 15 - 25 U/mL</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'SCL70', 'configurations' => [
                    ['name' => 'ANTI SCL70', 'tbl_category_exams_name' => 'Inmunoquímica Sanguínea', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'Anti SCL70', 'unity' => 'U/mL', 'genders_code' => 'FM', 'interpretation' => '<p>VALORES DE REFERENCIA POSITIVO: MAYOR A 25 U/mL NEGATIVO: MENOR A 15 U/mL BORDERLINE: 15 - 25 U/mL</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'HDL', 'configurations' => [
                    ['name' => 'COLESTEROL HDL', 'tbl_category_exams_name' => 'Bioquímica', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Colesterol HDL', 'abbreviation' => 'HDL', 'genders_code' => 'FM', 'unity' => 'mg/dL', 'value_min' => '65', 'value_max' => '100', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>VALOR DE REFERENCIA MUJERES: MAYOR A 65 mg/dL HOMBRES: MAYOR A 55 mg/dL</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'LDL', 'configurations' => [
                    ['name' => 'COLESTEROL LDL', 'tbl_category_exams_name' => 'Bioquímica', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Colesterol LDL', 'abbreviation' => 'LDL', 'genders_code' => 'FM', 'unity' => 'mg/dL', 'value_min' => '0', 'value_max' => '100', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>VALOR DE REFERENCIA MUJERES: MAYOR A 65 mg/dL HOMBRES: MAYOR A 55 mg/dL</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'BH', 'configurations' => [
                    ['name' => 'BIOMETRÍA HEMÁTICA 3P', 'tbl_category_exams_name' => 'Hematología', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Recuento de Glóbulos Rojos', 'abbreviation' => 'ERI', 'genders_code' => 'F', 'unity' => '10^6/µL', 'value_min' => '4', 'value_max' => '6', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Recuento de Glóbulos Rojos', 'abbreviation' => 'ERI', 'genders_code' => 'M', 'unity' => '10^6/µL', 'value_min' => '5', 'value_max' => '6,5', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Hemoglobina', 'abbreviation' => 'Hb', 'genders_code' => 'F', 'unity' => 'g/dL', 'value_min' => '13', 'value_max' => '17', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Hemoglobina', 'abbreviation' => 'Hb', 'genders_code' => 'M', 'unity' => 'g/dL', 'value_min' => '14,5', 'value_max' => '18,5', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Hematocrito', 'abbreviation' => 'Hcto', 'genders_code' => 'F', 'unity' => '%', 'value_min' => '40', 'value_max' => '50', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Hematocrito', 'abbreviation' => 'Hcto', 'genders_code' => 'F', 'unity' => '%', 'value_min' => '45', 'value_max' => '55', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Volumen Corpuscular Medio (VCM)', 'abbreviation' => 'VCM', 'genders_code' => 'FM', 'unity' => 'µm³', 'value_min' => '80', 'value_max' => '100', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Hemoglobina Corpuscular Media (HCM)', 'abbreviation' => 'HCM', 'genders_code' => 'FM', 'unity' => 'pg', 'value_min' => '27', 'value_max' => '31', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Concentración de Hb Corp. Media (CHCM)', 'abbreviation' => 'CHCM', 'genders_code' => 'FM', 'unity' => 'g/dL', 'value_min' => '30', 'value_max' => '36', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Ancho de Distribución Eritrocitaria (RDW)c', 'abbreviation' => 'RDWc', 'genders_code' => 'FM', 'unity' => '%', 'value_min' => '11,5', 'value_max' => '15,5', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Ancho de Distribución Eritrocitaria (RDW)s', 'abbreviation' => 'RDWs', 'genders_code' => 'FM', 'unity' => 'µm³', 'value_min' => '37', 'value_max' => '49', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Plaquetas', 'abbreviation' => 'Plaq', 'genders_code' => 'FM', 'unity' => '10³/µL', 'value_min' => '150', 'value_max' => '450', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Plaquetocrito', 'abbreviation' => 'PTC', 'genders_code' => 'FM', 'unity' => '%', 'value_min' => '0,1', 'value_max' => '0,5', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Volumen Plaquetario Medio (MPV)', 'abbreviation' => 'MPV', 'genders_code' => 'FM', 'unity' => 'µm³', 'value_min' => '7,4', 'value_max' => '11', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Indice de Distribución Plaquetaria (PDWc)', 'abbreviation' => 'IDP', 'genders_code' => 'FM', 'unity' => '%', 'value_min' => '10', 'value_max' => '18', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'P-LCC (PLA: Recuento celulas grandes)', 'genders_code' => 'FM', 'unity' => '10³/µL', 'value_min' => '44', 'value_max' => '140', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'P-LCR (PLA: Proporcion celulas grandes)', 'genders_code' => 'FM', 'unity' => '%', 'value_min' => '18', 'value_max' => '50', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Glóbulos Blancos', 'abbreviation' => 'gb', 'genders_code' => 'FM', 'unity' => '10³/µL', 'value_min' => '4', 'value_max' => '10', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Linfocitos (%)', 'abbreviation' => 'LYM%', 'genders_code' => 'FM', 'unity' => '%', 'value_min' => '25', 'value_max' => '40', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'MID (%)', 'genders_code' => 'FM', 'unity' => '%', 'value_min' => '4,5', 'value_max' => '12,1', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Granulocitos (%)', 'abbreviation' => 'GRA%', 'genders_code' => 'FM', 'unity' => '%', 'value_min' => '40', 'value_max' => '75', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Linfocitos (#)', 'abbreviation' => 'LYM#', 'genders_code' => 'FM', 'unity' => '10³/µL', 'value_min' => '1', 'value_max' => '4,4', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'MID (#)', 'genders_code' => 'FM', 'unity' => '10³/µL', 'value_min' => '0,3', 'value_max' => '1', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Granulocitos (#)', 'abbreviation' => 'GRA#', 'genders_code' => 'FM', 'unity' => '10³/µL', 'value_min' => '2', 'value_max' => '8', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Eritrosedimentación Westergren', 'genders_code' => 'FM', 'unity' => 'mm/hora', 'value_min' => '1', 'value_max' => '15', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Eritrosedimentación Wintrobe', 'abbreviation' => 'VSG', 'genders_code' => 'FM', 'unity' => 'mm/hora', 'value_min' => '1', 'value_max' => '15', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'ADD-IMG', 'name' => 'Grafico WBC'],
                        ['type_parameter_code' => 'ADD-IMG', 'name' => 'Grafico RBC'],
                        ['type_parameter_code' => 'ADD-IMG', 'name' => 'Grafico PLT'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Neutrófilos (%)', 'genders_code' => 'FM', 'unity' => '%', 'value_min' => '60', 'value_max' => '75', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Linfocitos (%)', 'genders_code' => 'FM', 'unity' => '%', 'value_min' => '20', 'value_max' => '40', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Monocitos (%)', 'abbreviation' => 'MON%', 'genders_code' => 'FM', 'unity' => '%', 'value_min' => '4', 'value_max' => '10', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Eosinófilos (%)', 'abbreviation' => 'EOS%', 'genders_code' => 'FM', 'unity' => '%', 'value_min' => '1', 'value_max' => '3', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Cayados (%)', 'abbreviation' => 'CAY%', 'genders_code' => 'FM', 'unity' => '%', 'value_min' => '0', 'value_max' => '1,5', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Mielocitos (%)', 'abbreviation' => 'MIEL%', 'genders_code' => 'FM', 'unity' => '%', 'value_min' => '0', 'value_max' => '1,5', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Metamielocitos (%)', 'abbreviation' => 'METAMIEL%', 'genders_code' => 'FM', 'unity' => '%', 'value_min' => '0', 'value_max' => '1,5', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Blastos (%)', 'abbreviation' => 'BLAST%', 'genders_code' => 'FM', 'unity' => '%', 'value_min' => '0', 'value_max' => '1,5', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Eritroblastos (%)', 'abbreviation' => 'ERITROBLA', 'genders_code' => 'FM', 'unity' => '%', 'value_min' => '0', 'value_max' => '1,5', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                    ['name' => 'BIOMETRÍA HEMÁTICA 5P', 'tbl_category_exams_name' => 'Hematología', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Recuento de Glóbulos Rojos [ERI]', 'abbreviation' => 'ERI', 'genders_code' => 'F', 'unity' => '10^6/µL', 'value_min' => '4', 'value_max' => '6', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Recuento de Glóbulos Rojos [ERI]', 'abbreviation' => 'ERI', 'genders_code' => 'M', 'unity' => '10^6/µL', 'value_min' => '5', 'value_max' => '6,5', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Hemoglobina', 'abbreviation' => 'Hb', 'genders_code' => 'F', 'unity' => 'g/dL', 'value_min' => '13', 'value_max' => '17', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Hemoglobina', 'abbreviation' => 'Hb', 'genders_code' => 'M', 'unity' => 'g/dL', 'value_min' => '14,5', 'value_max' => '18,5', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Hematocrito', 'abbreviation' => 'Hcto', 'genders_code' => 'F', 'unity' => '%', 'value_min' => '40', 'value_max' => '50', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Hematocrito', 'abbreviation' => 'Hcto', 'genders_code' => 'M', 'unity' => '%', 'value_min' => '45', 'value_max' => '55', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Volumen Corpuscular Medio (VCM)', 'abbreviation' => 'VCM', 'genders_code' => 'FM', 'unity' => 'µm³', 'value_min' => '80', 'value_max' => '100', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Hemoglobina Corpuscular Media (HCM)', 'abbreviation' => 'HCM', 'genders_code' => 'FM', 'unity' => 'pg', 'value_min' => '27', 'value_max' => '31', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Concentración de Hb Corp. Media (CHCM)', 'abbreviation' => 'CHCM', 'genders_code' => 'FM', 'unity' => 'g/dL', 'value_min' => '30', 'value_max' => '36', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Ancho de Distribución Eritrocitaria (RDW)c', 'abbreviation' => 'RDWc', 'genders_code' => 'FM', 'unity' => '%', 'value_min' => '11,5', 'value_max' => '15,5', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Ancho de Distribución Eritrocitaria (RDW)s', 'abbreviation' => 'RDWs', 'genders_code' => 'FM', 'unity' => '%', 'value_min' => '37', 'value_max' => '49', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Plaquetas', 'abbreviation' => 'Plaq', 'genders_code' => 'FM', 'unity' => '10³/µL', 'value_min' => '150', 'value_max' => '450', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Plaquetocrito', 'abbreviation' => 'PTC', 'genders_code' => 'FM', 'unity' => '%', 'value_min' => '0,1', 'value_max' => '0,5', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Volumen Plaquetario Medio (MPV)', 'abbreviation' => 'MPV', 'genders_code' => 'FM', 'unity' => 'µm³', 'value_min' => '7,4', 'value_max' => '11', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Indice de Distribución Plaquetaria (PDWc)', 'abbreviation' => 'IDP', 'genders_code' => 'FM', 'unity' => '%', 'value_min' => '10', 'value_max' => '18', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'P-LCC (PLA: Recuento celulas grandes)', 'genders_code' => 'FM', 'unity' => '10³/µL', 'value_min' => '44', 'value_max' => '140', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'P-LCR (PLA: Proporcion celulas grandes)', 'genders_code' => 'FM', 'unity' => '%', 'value_min' => '18', 'value_max' => '50', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Glóbulos Blancos', 'abbreviation' => 'WBC', 'genders_code' => 'FM', 'unity' => '10³/µL', 'value_min' => '4', 'value_max' => '10', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Linfocitos (%)', 'abbreviation' => 'LYM%', 'genders_code' => 'FM', 'unity' => '%', 'value_min' => '25', 'value_max' => '40', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Neutrófilos (%)', 'abbreviation' => 'NEU%', 'genders_code' => 'FM', 'unity' => '%', 'value_min' => '55', 'value_max' => '65', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Monocitos (%)', 'abbreviation' => 'MON%', 'genders_code' => 'FM', 'unity' => '%', 'value_min' => '2', 'value_max' => '100', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Eosinófilos (%)', 'abbreviation' => 'EOS%', 'genders_code' => 'FM', 'unity' => '%', 'value_min' => '0,5', 'value_max' => '5', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Basófilos (%)', 'abbreviation' => 'BAS%', 'genders_code' => 'FM', 'unity' => '%', 'value_min' => '0', 'value_max' => '2', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Linfocitos (#)', 'abbreviation' => 'LYM#', 'genders_code' => 'FM', 'unity' => '10³/µL', 'value_min' => '1', 'value_max' => '4,4', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Neutrofilos (#)', 'abbreviation' => 'NEU#', 'genders_code' => 'FM', 'unity' => '10³/µL', 'value_min' => '1,6', 'value_max' => '7', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Monocitos (#)', 'abbreviation' => 'MON#', 'genders_code' => 'FM', 'unity' => '10³/µL', 'value_min' => '0,3', 'value_max' => '1', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Eosinófilos (#)', 'abbreviation' => 'EOS#', 'genders_code' => 'FM', 'unity' => '10³/µL', 'value_min' => '0', 'value_max' => '0,5', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Basófilos (#)', 'abbreviation' => 'BAS#', 'genders_code' => 'FM', 'unity' => '10³/µL', 'value_min' => '0', 'value_max' => '0,2', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Eritrosedimentación Westergren', 'genders_code' => 'FM', 'unity' => 'mm/hora', 'value_min' => '1', 'value_max' => '15', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Eritrosedimentación Wintrobe', 'abbreviation' => 'VSG', 'genders_code' => 'FM', 'unity' => 'mm/hora', 'value_min' => '1', 'value_max' => '15', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'ADD-IMG', 'name' => 'Grafico DIFF'],
                        ['type_parameter_code' => 'ADD-IMG', 'name' => 'Grafico WBC'],
                        ['type_parameter_code' => 'ADD-IMG', 'name' => 'Grafico RBC'],
                        ['type_parameter_code' => 'ADD-IMG', 'name' => 'Grafico PLT'],
                    ],
                    ],
                ],
                ],
                ['code' => 'GLU', 'configurations' => [
                    ['name' => 'GLUCOSA', 'tbl_category_exams_name' => 'Bioquímica', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Glucosa', 'abbreviation' => 'Glu', 'genders_code' => 'FM', 'unity' => 'mg/dL', 'value_min' => '70', 'value_max' => '110', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'HER2IM', 'configurations' => [
                    ['name' => 'HERPES 2 IgM INDICE', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Herpes II IgM', 'genders_code' => 'FM', 'value_min' => '0', 'unity' => 'U/mL', 'value_max' => '0,9', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>VALORES DE REFERENCIA NEGATIVO: &Iacute;NDICE INFERIOR A 0.9 INDETERMINADO: &Iacute;NDICE ENTRE 0.9 - 1.1 POSITIVO: &Iacute;NDICE SUPERIOR A 1.1</p>'],
                    ],
                    ],
                    ['name' => 'HERPES 2 IgM U/mL', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Herpes II IgM', 'genders_code' => 'FM', 'value_min' => '0', 'unity' => 'U/mL', 'value_max' => '0,9', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>VALORES DE REFERENCIA NEGATIVO: <0.9 U/mL INDETERMINADO: 0.9 - 1.0 U/mL POSITIVO: >1.0 U/mL</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'HER2IG', 'configurations' => [
                    ['name' => 'HERPES 2 IgG INDICE', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Herpes II IgG', 'genders_code' => 'FM', 'value_min' => '0', 'unity' => 'U/mL', 'value_max' => '0,9', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>VALORES DE REFERENCIA NEGATIVO: &Iacute;NDICE INFERIOR A 0.9 INDETERMINADO: &Iacute;NDICE ENTRE 0.9 - 1.1 POSITIVO: &Iacute;NDICE SUPERIOR A 1.1</p>'],
                    ],
                    ],
                    ['name' => 'HERPES 2 IgG U/mL', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Herpes II IgG', 'genders_code' => 'FM', 'value_min' => '0', 'unity' => 'U/mL', 'value_max' => '0,9', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>VALORES DE REFERENCIA NEGATIVO: <0.9 U/mL INDETERMINADO: 0.9 - 1.0 u/mL POSITIVO: >1.0 U/mL</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'VDRL', 'configurations' => [
                    ['name' => 'VDRL', 'tbl_category_exams_name' => 'Serología', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'VDRL', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Reactividad'],
                    ],
                    ],
                ],
                ],
                ['code' => 'K', 'configurations' => [
                    ['name' => 'POTASIO', 'tbl_category_exams_name' => 'Electrolitos', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Potasio', 'abbreviation' => 'K', 'genders_code' => 'FM', 'unity' => 'meq/L', 'value_min' => '3,5', 'value_max' => '5,1', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'NA', 'configurations' => [
                    ['name' => 'SODIO', 'tbl_category_exams_name' => 'Electrolitos', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Sodio', 'abbreviation' => 'Na', 'genders_code' => 'FM', 'unity' => 'meq/L', 'value_min' => '137', 'value_max' => '145', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'TOXOIM', 'configurations' => [
                    ['name' => 'TOXOPLASMA IgM', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Toxoplasma IgM', 'genders_code' => 'FM', 'value_min' => '0', 'value_max' => '0,8', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>VALORES DE REFERENCIA NO REACTIVO: &Iacute;NDICE INFERIOR A 0.8 INDETERMINADO: &Iacute;NDICE ENTRE 0.8 - 1.0 REACTIVO: &Iacute;NDICE SUPERIOR A 1.0</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'COPRO', 'configurations' => [
                    ['name' => 'COPROLÓGICO - COPROPARASITARIO', 'tbl_category_exams_name' => 'Coproanálisis', 'parameters' => [
                        ['type_parameter_code' => 'TIT', 'name' => 'EXAMEN DIRECTO MACROSCOPICO'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Color', 'abbreviation' => 'Color', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Color de Heces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Consistencia', 'abbreviation' => 'Cons', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Consistencia Heces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Aspecto', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Aspecto de Heces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Restos Alimenticios', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Moco', 'abbreviation' => 'Moco', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Sangre', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'pH', 'genders_code' => 'FM'],
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'Olor', 'genders_code' => 'FM'],
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'Otros', 'genders_code' => 'FM'],
                        ['type_parameter_code' => 'TIT', 'name' => 'EXAMEN COPROLÓGICO'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Flora Bacteriana', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Aumentada-Disminuida'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Grasas Neutras', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Restos Vegetales', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Almidones', 'abbreviation' => 'Alm', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Levaduras', 'abbreviation' => 'Lev', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Levaduras en Gemación Tipo Candida', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Micelio de Hongo', 'abbreviation' => 'Mic', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Hifas', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Cristales de Charcot Leyden', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'Eritrocitos', 'abbreviation' => 'Hem', 'genders_code' => 'FM'],
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'Piocitos', 'abbreviation' => 'Pioc', 'genders_code' => 'FM'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Pseudohifas', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'Leucocitos', 'abbreviation' => 'Leu', 'genders_code' => 'FM'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Fibras Vegetales', 'abbreviation' => 'FVeg', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Bacterias', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'Otro', 'genders_code' => 'FM'],
                        ['type_parameter_code' => 'TIT', 'name' => 'EXAMEN COPROPARASITARIO'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Parásitos', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Parásitos'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Quistes de Ameba Coli', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Quistes de Ameba Histolytica', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Quistes de Endolimax Nana', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Quistes de Chilomastix Mesnili', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Quistes de Giardia Lamblia', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Blastocystis Hominis', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Quistes de Embadomona Intestinal', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Quistes de Lodamoeba Bütschlii', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Trofozoitos de Ameba histolytica', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Trofozoitos de Balantidium coli', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Trofozoitos de Chilomastix mesnili', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Trofozoitos de Giardia lamblia', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Trofozoitos de Iodamoeba bütschlii', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Trofozoitos de Trichomonas hominis', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Huevo Ascaris Lumbricoides', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Huevos de Enterobius vermicularis', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Huevos de Uncinaria stenocephala', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Huevos de Hymenolepsis diminuta', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Huevos de Hymenolepsis nana', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Huevos de Trichuris Trichiura', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Huevos de Taenia saginata', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Huevos de Taenia solium', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Proglótides de Taenia saginata', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Proglótides de Taenia solium', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Huevos de Ascaris lumbricoides', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Strongyloides stercoralis', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Larvas de Strongyloides stercoralis', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Cruces'],
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'Otros Parásitos', 'genders_code' => 'FM'],
                    ],
                    ],
                ],
                ],
                ['code' => 'TSH', 'configurations' => [
                    ['name' => 'TSH', 'tbl_category_exams_name' => 'Estudios Hormonales', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'TSH IgM', 'abbreviation' => 'TSH', 'genders_code' => 'FM', 'unity' => 'uUI/mL', 'value_min' => '0,6', 'value_max' => '8,1', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'BILIN', 'configurations' => [
                    ['name' => 'BILIRRUBINA INDIRECTA', 'tbl_category_exams_name' => 'Bioquímica', 'parameters' => [
                        // ['type_parameter_code' => '','name'=>'Bilirrubina Indirecta','genders_code'=>'FM','unity'=>'mg/dL','value_min'=>'0','value_max'=>'0,9','show_value_references'=>'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'GGT', 'configurations' => [
                    ['name' => 'GAMMA GT', 'tbl_category_exams_name' => 'Bioquímica', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Gama GT', 'abbreviation' => 'GGT', 'genders_code' => 'M', 'unity' => 'U/L', 'value_min' => '8', 'value_max' => '61', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Gama GT', 'abbreviation' => 'GGT', 'genders_code' => 'F', 'unity' => 'U/L', 'value_min' => '5', 'value_max' => '36', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'COLINE', 'configurations' => [
                    ['name' => 'COLINESTERASA ERITROCITARIA', 'tbl_category_exams_name' => 'Bioquímica', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Colinesterasa Eritrocitaria', 'abbreviation' => 'Colin', 'genders_code' => 'FM', 'unity' => 'U/L  G.R.', 'value_min' => '4400', 'value_max' => '8200', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'CMVIM', 'configurations' => [
                    ['name' => 'CITOMEGALOVIRUS IGM', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Citomegalovirus IgM', 'genders_code' => 'FM', 'value_min' => '0', 'value_max' => '30', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>VALORES DE REFERENCIA NEGATIVO: &Iacute;NDICE INFERIOR A 30.0 INDETERMINADO: &Iacute;NDICE ENTRE 30 - 35 POSITIVO: &Iacute;NDICE SUPERIOR A 35.0</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'HER1IM', 'configurations' => [
                    ['name' => 'HERPES I IGM INDICE', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Herpes I IgM', 'genders_code' => 'FM', 'value_min' => '0', 'value_max' => '0,9', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>VALORES DE REFERENCIA NEGATIVO: &Iacute;NDICE INFERIOR A 0.9 INDETERMINADO: &Iacute;NDICE ENTRE 0.9 - 1.1 POSITIVO: &Iacute;NDICE SUPERIOR A 1.1</p>'],
                    ],
                    ],
                    ['name' => 'HERPES I IGM U/mL	', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Herpes I IgM', 'genders_code' => 'FM', 'value_min' => '0', 'value_max' => '0,9', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>VALORES DE REFERENCIA NEGATIVO: <0.9 U/mL INDETERMINADO: 0.9 - 1.0 U/mL POSITIVO: >1.0 U/mL</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'HPYLOG', 'configurations' => [
                    ['name' => 'HELICOBACTER PYLORI IGG', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Helicobacter Pylori IgG', 'genders_code' => 'FM', 'unity' => 'U/mL', 'value_min' => '0', 'value_max' => '25', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>VALORES DE REFERENCIA NEGATIVO: &Iacute;NDICE INFERIOR A 25 U/mL POSITIVO: &Iacute;NDICE SUPERIOR A 25 U/mL</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'TOXOIG', 'configurations' => [
                    ['name' => 'TOXOPLASMA IgG', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Toxoplasma IgG', 'genders_code' => 'FM', 'unity' => 'UI/mL', 'value_min' => '0', 'value_max' => '3', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>VALORES DE REFERENCIA NO REACTIVO: MENOR A 1.0 UI/mL INDETERMINADO: 1.0 - 3.0 UI/mL REACTIVO: MAYOR A 3.0 UI/mL</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'HER1IG', 'configurations' => [
                    ['name' => 'HERPES I IGG INDICE', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Herpes I IgG', 'genders_code' => 'FM', 'value_min' => '0', 'value_max' => '0,9', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>VALORES DE REFERENCIA NEGATIVO: &Iacute;NDICE INFERIOR A 0.9 INDETERMINADO: &Iacute;NDICE ENTRE 0.9 - 1.1 POSITIVO: &Iacute;NDICE SUPERIOR A 1.1</p>'],
                    ],
                    ],
                    ['name' => 'HERPES I IGG U/mL', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Herpes I IgG', 'genders_code' => 'FM', 'value_min' => '0', 'value_max' => '0,9', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>VALORES DE REFERENCIA NEGATIVO: <0.9 UI/mL INDETERMINADO: 0.9 - 1.0 UI/mL POSITIVO: >1.0 UI/mL</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'TP', 'configurations' => [
                    ['name' => 'TIEMPO DE PROTROMBINA TP', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Tiempo de Protrombina TP', 'abbreviation' => 'TP', 'genders_code' => 'FM', 'unity' => 'seg', 'value_min' => '12', 'value_max' => '14', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => '% de actividad', 'abbreviation' => '%', 'genders_code' => 'FM', 'unity' => '%', 'value_min' => '70', 'value_max' => '100', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'INR', 'abbreviation' => 'INR', 'genders_code' => 'FM', 'value_min' => '0,9', 'value_max' => '1,2', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'RUBIM', 'configurations' => [
                    ['name' => 'RUBEOLA IGM', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Rubeola IgM', 'genders_code' => 'FM', 'value_min' => '0', 'value_max' => '20', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>VALORES DE REFERENCIA NEGATIVO: &Iacute;NDICE INFERIOR A 20 INDETERMINADO: &Iacute;NDICE ENTRE 20 - 25 POSITIVO: &Iacute;NDICE SUPERIOR A 25</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'TTP', 'configurations' => [
                    ['name' => 'TIEMPO PARCIAL DE TROMBOPLASTINA TTP', 'tbl_category_exams_name' => 'Coagulación', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Tiempo Parcial de Tromboplastina (TTP)', 'genders_code' => 'FM', 'unity' => 'seg.', 'value_min' => '20', 'value_max' => '40', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'CL', 'configurations' => [
                    ['name' => 'CLORO', 'tbl_category_exams_name' => 'Electrolitos', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Cloro', 'genders_code' => 'FM', 'unity' => 'meq/L', 'value_min' => '98', 'value_max' => '110', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'HIV', 'configurations' => [
                    ['name' => 'HIV 1 + 2', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'HIV 1 + 2', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'HIV 1 + 2', 'genders_code' => 'FM', 'value_min' => '0', 'value_max' => '0,9', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>VALORES DE REFERENCIA NEGATIVO: <0.9 ratio INDETERMINADO: 0.9 - 1.1 ratio POSITIVO: >1.1 ratio</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'PLAQ', 'configurations' => [
                    ['name' => 'RECUENTO DE PLAQUETAS', 'tbl_category_exams_name' => 'Hematología', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Recuento de Plaquetas', 'genders_code' => 'FM', 'unity' => 'x10^3/ul', 'value_min' => '150', 'value_max' => '450', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'RUBIG', 'configurations' => [
                    ['name' => 'RUBEOLA IGG', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Rubeola IgG', 'genders_code' => 'FM', 'unity' => 'UI/mL', 'value_min' => '0', 'value_max' => '5', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>VALORES DE REFERENCIA NO REACTIVO: MENOR A 5 UI/mL INDETERMINADO: 5 - 10 UI/mL REACTIVO: MAYOR O IGUAL A 10 UI/mL</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'CMVIG', 'configurations' => [
                    ['name' => 'CITOMEGALOVIRUS IGG', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Citomegalovirus IgG', 'genders_code' => 'FM', 'unity' => 'UI/mL', 'value_min' => '0', 'value_max' => '15', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>VALORES DE REFERENCIA NO REACTIVO: MENOR A 15.0 UI/mL INDETERMINADO: ENTRE 15 - 18 UI/mL REACTIVO: MAYOR A 18.0 UI/mL</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'HCGCNT', 'configurations' => [
                    ['name' => 'HCG BETA CUANTITATIVO', 'tbl_category_exams_name' => 'Estudios Hormonales', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'BHCG Cuantitativa', 'genders_code' => 'FM', 'unity' => 'mUI/mL', 'interpretation' => '<p>VALORES DE REFERENCIA NO EMBARAZADAS: Hasta 5.3 mUI/mL EMBARAZO: VALORES SUPERIORES A 50 mUI/mL, SE DUPLICAN EN 48 HORAS POSTMENOPAUSIA: Hasta 8.3 mUI/mL HOMBRES: Hasta 2.6 mUI/mL SEMANAS DE GESTACI&Oacute;N VALOR DE REFERENCIA 3 sem: 5.8 - 71.2 mUI/mL 4 sem: 9.5 - 750 mUI/mL 5 sem: 217 - 7138 mUI/mL 6 sem: 158 - 31795 mUI/mL 7 sem: 3697 - 163563 mUI/mL 8 sem: 32065 - 149571 mUI/mL 9 sem: 63803 - 151410 mUI/mL 10 sem: 45509 - 186977 mUI/mL</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'TG', 'configurations' => [
                    ['name' => 'HCG BETA CUANTITATIVO', 'tbl_category_exams_name' => 'Marcadores Tumorales', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Tiroglobulina', 'genders_code' => 'FM', 'unity' => 'ng/mL', 'value_min' => '1,5', 'value_max' => '56', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'HBSAC', 'configurations' => [
                    ['name' => 'HEPATITIS B (ANTI-HBS)', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'Hepatitis B (Anti-HBs)', 'genders_code' => 'FM', 'unity' => 'mUI/mL', 'interpretation' => '<p>VALORES DE REFERENCIA: NO REACTIVO: menor a 10 mUI/mL VACUNACI&Oacute;N EFECTIVA: entre 10-100 mUI/mL VACUNACI&Oacute;N &Oacute;PTIMA: mayor a 100 mUI/mL</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'HBSAG', 'configurations' => [
                    ['name' => 'HEPATITIS B ANTIGENO AUSTRALIA DE SUPERFICIE (HBSAG)', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Hepatitis B (HBsAg)', 'genders_code' => 'FM', 'value_min' => '0', 'value_max' => '1', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>VALORES DE REFERENCIA NEGATIVO: menor a 1.0 POSITIVO: mayor a 1.0</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'CA', 'configurations' => [
                    ['name' => 'CALCIO', 'tbl_category_exams_name' => 'Bioquímica', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Calcio', 'genders_code' => 'FM', 'unity' => 'mg/dL', 'value_min' => '8,6', 'value_max' => '10', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'GRUPO', 'configurations' => [
                    ['name' => 'TIPIFICACION SANGUINEA RH (D)', 'tbl_category_exams_name' => 'Hematología', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Grupo Sanguíneo', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Grupo Sanguíneo'],
                        ['type_parameter_code' => 'INPUT-OPT', 'name' => 'Factor Rh', 'abbreviation' => 'Rh', 'genders_code' => 'FM', 'tbl_result_input_option_main_name' => 'Positivo - Negativo'],
                    ],
                    ],
                ],
                ],
                ['code' => 'PROTO', 'configurations' => [
                    ['name' => 'PROTEINAS TOTALES EN SUERO', 'tbl_category_exams_name' => 'Bioquímica', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Proteínas Totales', 'abbreviation' => 'Proto', 'genders_code' => 'FM', 'unity' => 'g/dL', 'value_min' => '6,6', 'value_max' => '8,7', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'CA125', 'configurations' => [
                    ['name' => 'MARCADOR TUMORAL CA 125', 'tbl_category_exams_name' => 'Bioquímica', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'CA125', 'genders_code' => 'FM', 'unity' => 'U/mL', 'value_min' => '0', 'value_max' => '35', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'CHLAMM', 'configurations' => [
                    ['name' => 'CHLAMYDIA TRACHOMATIS IGM', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Chlamydia Trachomatis IgM', 'genders_code' => 'FM', 'value_min' => '0', 'value_max' => '0,8', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>VALORES DE REFERENCIA NEGATIVO: INFERIOR A 0.8 INDETERMINADO: 0.8 - 1.1 POSITIVO: SUPERIOR A 1.1</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'T4', 'configurations' => [
                    ['name' => 'T4 TIROXINA TOTAL', 'tbl_category_exams_name' => 'Estudios Hormonales', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'T4 Total', 'genders_code' => 'FM', 'unity' => 'ng/dL', 'value_min' => '5,1', 'value_max' => '14,1', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'DHEAS', 'configurations' => [
                    ['name' => 'DHEAS', 'tbl_category_exams_name' => 'Estudios Hormonales', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'DHEAS', 'genders_code' => 'F', 'unity' => 'ug/dL', 'value_min' => '35', 'value_max' => '430', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'DHEAS', 'genders_code' => 'M', 'unity' => 'ug/dL', 'value_min' => '80', 'value_max' => '560', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'TESTO', 'configurations' => [
                    ['name' => 'TESTOSTERONA TOTAL', 'tbl_category_exams_name' => 'Estudios Hormonales', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Testosterona Total', 'genders_code' => 'F', 'unity' => 'ng/mL', 'value_min' => '0,08', 'value_max' => '0,48', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>NOTA: En caso de mediciones realizadas en p&uacute;beres, deben evaluarse los niveles de Testosterona en relaci&oacute;n a la escala de Tanner.</p>'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Testosterona Total', 'genders_code' => 'M', 'unity' => 'ng/mL', 'value_min' => '2,8', 'value_max' => '8', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'CA+', 'configurations' => [
                    ['name' => 'CALCIO IÓNICO', 'tbl_category_exams_name' => 'Electrolitos', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Calcio Iónico', 'genders_code' => 'FM', 'unity' => 'mmol/L', 'value_min' => '1,12', 'value_max' => '1,32', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'HBGLI', 'configurations' => [
                    ['name' => 'HEMOGLOBINA GLICOSILADA TOTAL HBA1C', 'tbl_category_exams_name' => 'Bioquímica', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Hemoglobina Glicosilada HbA1c', 'genders_code' => 'FM', 'unity' => '%', 'value_min' => '4,5', 'value_max' => '5,8', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'FERRI', 'configurations' => [
                    ['name' => 'FERRITINA', 'tbl_category_exams_name' => 'Inmunoquímica Sanguínea', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Ferritina', 'genders_code' => 'F', 'unity' => 'ng/mL', 'value_min' => '13', 'value_max' => '150', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Ferritina', 'genders_code' => 'M', 'unity' => 'ng/mL', 'value_min' => '30', 'value_max' => '400', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'FRUCT', 'configurations' => [
                    ['name' => 'FRUCTOSAMINA', 'tbl_category_exams_name' => 'Bioquímica', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Fructosamina', 'genders_code' => 'FM', 'unity' => 'umol/L', 'value_min' => '205', 'value_max' => '285', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'HPYLOM', 'configurations' => [
                    ['name' => 'HELICOBACTER PYLORI IGM', 'tbl_category_exams_name' => 'Autoinmunes e Infecciosas', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Helicobacter Pylori IgM', 'genders_code' => 'FM', 'unity' => 'U/mL', 'value_min' => '0', 'value_max' => '40', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>VALORES DE REFERENCIA NEGATIVO: &Iacute;NDICE INFERIOR A 40 U/mL POSITIVO: &Iacute;NDICE SUPERIOR A 40 U/mL</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'PTH', 'configurations' => [
                    ['name' => 'PARATOHORMONA', 'tbl_category_exams_name' => 'Estudios Hormonales', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Paratohormona', 'genders_code' => 'FM', 'unity' => 'pg/mL', 'value_min' => '16', 'value_max' => '87', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'FE', 'configurations' => [
                    ['name' => 'HIERRO SÉRICO', 'tbl_category_exams_name' => 'Bioquímica', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Hierro', 'genders_code' => 'M', 'unity' => 'ug/dL', 'value_min' => '65', 'value_max' => '175', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Hierro', 'genders_code' => 'F', 'unity' => 'ug/dL', 'value_min' => '40', 'value_max' => '150', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Capacidad de Fijación', 'abbreviation' => 'TIBC', 'genders_code' => 'FM', 'unity' => 'ug/dL', 'value_min' => '200', 'value_max' => '400', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'FOSFOR', 'configurations' => [
                    ['name' => 'FÓSFORO EN SUERO', 'tbl_category_exams_name' => 'Bioquímica', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Fósforo', 'genders_code' => 'FM', 'unity' => 'mg/dL', 'value_min' => '2,7', 'value_max' => '4,5', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                //name->Nombre
                //tbl_category_exams_name->Sección
                ['code' => 'PROTEI', 'configurations' => [
                    ['name' => 'PROTEINURIA EN ORINA DE 24 HORAS', 'tbl_category_exams_name' => 'Química Clínica en Orina', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'Volumen de Orina en 24 Horas', 'genders_code' => 'FM', 'unity' => 'mL'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Proteínas en Orina', 'abbreviation' => null, 'genders_code' => 'FM', 'unity' => 'g/dL', 'value_min' => '6,7', 'value_max' => '8,3', 'show_value_references' => 'ACTIVO'],
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'Proteinuria en Orina de 24 Horas', 'abbreviation' => null, 'genders_code' => 'FM', 'unity' => 'g/24 hrs.', 'value_min' => '0', 'value_max' => '100', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'IGE', 'configurations' => [
                    ['name' => 'INMUNOGLOBULINA E (IGE)', 'tbl_category_exams_name' => 'Estudios de Alergias', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'IgE Total', 'abbreviation' => null, 'genders_code' => 'FM', 'unity' => 'UI/mL', 'value_min' => '0', 'value_max' => '87', 'show_value_references' => 'ACTIVO', 'interpretation' => '<p>En caso de IgE elevadas, se sugiere realizar IgE espec&iacute;fica (RAST) para confirmaci&oacute;n de alergenos asociados</p>'],
                    ],
                    ],
                ],
                ],
                ['code' => 'MICROA', 'configurations' => [
                    ['name' => 'MICROALBUMINURIA EN ORINA PARCIAL', 'tbl_category_exams_name' => 'Química Clínica en Orina', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-TXT', 'name' => 'Nivel de Microalbuminuria', 'abbreviation' => null, 'genders_code' => null, 'value_normal' => 'hasta 20', 'unity' => 'mg/L', 'value_normal' => null, 'interpretation' => null],
                    ],
                    ],
                ],
                ],
                ['code' => 'FT3', 'configurations' => [
                    ['name' => 'T3 LIBRE', 'tbl_category_exams_name' => 'Estudios Hormonales', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'FT3', 'abbreviation' => null, 'genders_code' => 'FM', 'unity' => 'pg/mL', 'value_min' => '1,4', 'value_max' => '4,2', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
                ['code' => 'T3', 'configurations' => [
                    ['name' => 'T3 TOTAL', 'tbl_category_exams_name' => 'Estudios Hormonales', 'parameters' => [
                        ['type_parameter_code' => 'INPUT-NUM', 'name' => 'T3 Total', 'abbreviation' => null, 'genders_code' => 'FM', 'unity' => 'ng/dL', 'value_min' => '80', 'value_max' => '200', 'show_value_references' => 'ACTIVO'],
                    ],
                    ],
                ],
                ],
            ];

            foreach ($arr_template as $arr_main) {
                $analysis = Exams::where('code', $arr_main['code'])->first();
                if (isset($analysis)) {
                    $tbl_exams = $analysis->id;
                    $configuration = $arr_main['configurations'];

                    foreach ($configuration as $config) {
                        $CategoryExams = CategoryExams::where('name', $config['tbl_category_exams_name'])->first();
                        $tbl_category_exams = $CategoryExams->id;
                        $exams_templates_main = $RelationTemplatesDefinition = RelationTemplatesDefinition::firstOrCreate([
                            'tbl_exams' => $tbl_exams,
                            'tbl_category_exams' => $tbl_category_exams,
                            'name_template' => $config['name'],
                            'method_template' => isset($config['method']) ? $config['method'] : null,
                            'reference_template' => isset($config['references']) ? $config['references'] : null,
                            'print_parameters' => isset($config['print_parameters']) ? $config['print_parameters'] : 'ACTIVO',
                            'print_method_template' => isset($config['print_method_template']) ? $config['print_method_template'] : 'INACTIVO',
                            'print_reference_template' => isset($config['print_reference_template']) ? $config['print_reference_template'] : 'INACTIVO',
                            'created_by_user' => $user->id,
                        ]);
                        $parameters = $config['parameters'];
                        $tbl_exams_templates_main = $exams_templates_main->id;

                        foreach ($parameters as $parm) {
                            $tbl_result_input_option_main = null;
                            $tbl_result_input_option_details = null;

                            //tbl_type_parameter_template INICIO
                            $tbl_type_parameter_template_info = TypeParameterTemplate::where('code', $parm['type_parameter_code'])->first();
                            $tbl_type_parameter_template = $tbl_type_parameter_template_info->id;
                            //tbl_type_parameter_template FIN

                            //tbl_config_interpretation_templates INICIO
                            $search_tbl_config_interpretation_templates_code = isset($parm['tbl_config_interpretation_templates_code']) ? $parm['tbl_config_interpretation_templates_code'] : 'DEFAULT';
                            $tbl_config_interpretation_templates_info = ConfigInterpretationParameter::where('code', $search_tbl_config_interpretation_templates_code)->first();
                            $tbl_config_interpretation_templates = $tbl_config_interpretation_templates_info->id;
                            //tbl_config_interpretation_templates FIN

                            //tbl_genders INICIO
                            if (isset($parm['genders_code'])) {
                                $genders_code = Genders::where('code', $parm['genders_code'])->first();
                                $tbl_genders = $genders_code->id;
                            }
                            //tbl_genders FIN

                            //tbl_result_input_option_main INICIO
                            if ($parm['type_parameter_code'] == "INPUT-OPT") {
                                $input_option_main_name = InputOptionMain::where('name', $parm['tbl_result_input_option_main_name'])->first();
                                $tbl_result_input_option_main = $input_option_main_name->id;
                                //tbl_result_input_option_details INICIO
                                if (isset($parm['search_by_id_option_to_text'])) {
                                    $option_to_text = InputOptionDetails::where('tbl_result_input_option_main', $tbl_result_input_option_main)
                                        ->where('name', $parm['search_by_id_option_to_text'])
                                        ->first();
                                    $tbl_result_input_option_details = $option_to_text->id;
                                }
                                //tbl_result_input_option_details FIN
                            }
                            //tbl_result_input_option_main FIN

                            $id_exams_templates_parameters = $RelationTemplatesParameters = RelationTemplatesParameters::firstOrCreate([
                                'tbl_exams_templates_main' => $tbl_exams_templates_main,
                                'tbl_type_parameter_template' => $tbl_type_parameter_template,
                                'tbl_config_interpretation_templates' => $tbl_config_interpretation_templates,
                                'tbl_result_input_option_main' => isset($tbl_result_input_option_main) ? $tbl_result_input_option_main : null,
                                'tbl_result_input_option_details' => isset($tbl_result_input_option_details) ? $tbl_result_input_option_details : null,
                                'order' => isset($parm['order']) ? $parm['order'] : null,
                                'name' => isset($parm['name']) ? $parm['name'] : null,
                                'abbreviation' => isset($parm['abbreviation']) ? $parm['abbreviation'] : null,
                                'tbl_genders' => isset($tbl_genders) ? $tbl_genders : null,
                                'unity' => isset($parm['unity']) ? $parm['unity'] : null,
                                'value_defect' => isset($parm['value_defect']) ? $parm['value_defect'] : null,
                                'value_normal' => isset($parm['value_normal']) ? $parm['value_normal'] : null,
                                'value_min' => isset($parm['value_min']) ? $parm['value_min'] : null,
                                'value_max' => isset($parm['value_max']) ? $parm['value_max'] : null,
                                'value_min_critical' => isset($parm['value_min_critical']) ? $parm['value_min_critical'] : null,
                                'value_max_critical' => isset($parm['value_max_critical']) ? $parm['value_max_critical'] : null,
                                'references_critical' => isset($parm['references_critical']) ? $parm['references_critical'] : null,
                                'qr_url' => isset($parm['qr_url']) ? $parm['qr_url'] : null,
                                'image_url' => isset($parm['image_url']) ? $parm['image_url'] : null,
                                'image_name' => isset($parm['image_name']) ? $parm['image_name'] : null,
                                'html' => isset($parm['html']) ? $parm['html'] : null,
                                'interpretation' => isset($parm['interpretation']) ? $parm['interpretation'] : null,
                                'show_value_references' => $parm['type_parameter_code'] == 'INPUT-NUM' ? 'ACTIVO' : 'INACTIVO',
                                'show_pdf' => isset($parm['show_pdf']) ? $parm['show_pdf'] : 'ACTIVO',
                                'show_interpretation' => isset($parm['interpretation']) ? 'ACTIVO' : 'INACTIVO',
                                'created_by_user' => $user->id,
                            ]);
                        }
                    }
                }
            }
        }
    }
}
