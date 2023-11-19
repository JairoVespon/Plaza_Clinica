<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class EspecialidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $especialidades = ['Anestesiología', 'Anatomía Patológica', 'Cardiología Clínica', 'Cardiología Intervencionista', 'Cirugía Pediátrica', 'Cirugía General', 'Cirugía Plástica y Reconstructiva', 'Angiología y Cirugía Vascular y Endovascular', 'Dermatología', 'Endoscopia del Aparato Digestivo', 'Gastroenterología', 'Ginecología y Obstetricia', 'Hematología', 'Infectología de Adulto', 'Medicina Aeroespacial', 'Medicina de Rehabilitación', 'Medicina Interna', 'Nefrología', 'Neurología de Adultos', 'Neumología', 'Oftalmología', 'Ortopedia', 'Otorrinolaringología', 'Patología Clínica', 'Pediatría', 'Psiquiatría General', 'Radiología e Imagen', 'Medicina Crítica', 'Urología', 'Cardiología', 'Intervencionista', 'Cirugía Oncológica', 'Oncología Médica', 'Oncología Pediátrica', 'Radio-Oncología', 'Cirugía Neurológica'];

        foreach ($especialidades as $especialidad) {
            DB::table('especialidades')->insert([
                'nombre' => $especialidad
            ]);
        }

    }
}
