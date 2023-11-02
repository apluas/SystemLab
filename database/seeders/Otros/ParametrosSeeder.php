<?php

namespace Database\Seeders\Otros;

use Illuminate\Database\Seeder;
use App\Models\Person\User;
use App\Models\Sydelab\Specialty;
use App\Models\Sydelab\Genders;

class ParametrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ESTOS REGISTROS DEBEN SER REGISTRADOS POR UN USUARIO DEL LABORATORIO, EN ESTE CASO EL USUARIO DEFAULT, CASO CONTRARIO NO SE CREA LOS REGISTROS
        $user = User::where('protected', 'ACTIVO')->where('user_first', 'ACTIVO')->first();
        if (isset($user)) {

            //---- CREACION DE ESPECIALIDADES
            $arr_distribution = [
                ['name' => 'Acupuntura'],
                ['name' => 'Alergología'],
                ['name' => 'Anestesiología'],
                ['name' => 'Auditoria Médica'],
                ['name' => 'Audiólogos y Foniatras'],
                ['name' => 'Cardiología'],
                ['name' => 'Cirugía Maxilofacial'],
                ['name' => 'Cirugía Cardiaca'],
                ['name' => 'Cirugía General'],
                ['name' => 'Cirugía General y especializada'],
                ['name' => 'Cirugía Pediátrica'],
                ['name' => 'Cirugía Plástica y Reconstructiva'],
                ['name' => 'Cirugía Torácica'],
                ['name' => 'Cirugía Vascular y Endovascular'],
                ['name' => 'Cirugía de Cabeza y Cuello'],
                ['name' => 'Dermatología'],
                ['name' => 'Diabetología'],
                ['name' => 'Endocrinología'],
                ['name' => 'Epidemiología'],
                ['name' => 'Farmacología'],
                ['name' => 'Fisiatría'],
                ['name' => 'Forense/Legal'],
                ['name' => 'Física Médica'],
                ['name' => 'Gastreonterología'],
                ['name' => 'Genética'],
                ['name' => 'Geriatría'],
                ['name' => 'Gerontología'],
                ['name' => 'Ginecología y Obstetricia'],
                ['name' => 'Hebeatría'],
                ['name' => 'Hematólogía'],
                ['name' => 'Infectología'],
                ['name' => 'Inmunología clínica'],
                ['name' => 'Mastología'],
                ['name' => 'Medicina Familiar y Comunitaria'],
                ['name' => 'Medicina General'],
                ['name' => 'Medicina Interna'],
                ['name' => 'Medicina Laboral'],
                ['name' => 'Medicina Nuclear'],
                ['name' => 'Medicina Paleativa'],
                ['name' => 'cialidades Médicas Periciales'],
                ['name' => 'Medicina de Emergencia'],
                ['name' => 'Medicina del Deporte'],
                ['name' => 'Nefrología'],
                ['name' => 'Neumología'],
                ['name' => 'Neurocirugía'],
                ['name' => 'Neurofisiología Clínica'],
                ['name' => 'Neurología'],
                ['name' => 'Nutricionista'],
                ['name' => 'Odontología/Odontología Forense'],
                ['name' => 'Oftalmología'],
                ['name' => 'Oncología'],
                ['name' => 'Otorrinolaringología'],
                ['name' => 'Patología'],
                ['name' => 'Pediatra'],
                ['name' => 'Proctología'],
                ['name' => 'Psicología'],
                ['name' => 'Psicología Clínica'],
                ['name' => 'Psicología Educativa'],
                ['name' => 'Psicología Infantil'],
                ['name' => 'Psicología Jurídica-Forense'],
                ['name' => 'Psicología Organizacional'],
                ['name' => 'Psicología Social'],
                ['name' => 'Psiquiatra'],
                ['name' => 'Radiología y Imagenología'],
                ['name' => 'Reumatología'],
                ['name' => 'Toxicología Médica'],
                ['name' => 'Traumatología'],
                ['name' => 'Urología'],
            ];
            foreach ($arr_distribution as $value) {
                $Specialty = Specialty::firstOrCreate([
                    'name' => $value['name'],
                    'created_by_user' => $user->id,
                ]);
            }
        }

        // CREACION GENEROS
        $arr_distribution = [
            ['code' => 'FM', 'name' => 'Ambos géneros'],
            ['code' => 'F', 'name' => 'Femenino'],
            ['code' => 'M', 'name' => 'Masculino'],
        ];
        foreach ($arr_distribution as $value) {
            $Genders = Genders::firstOrCreate([
                'code' => $value['code'],
                'name' => $value['name'],
            ]);
        }
    }
}
