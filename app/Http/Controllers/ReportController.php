<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Genero;
use App\Models\Paciente;
use App\Models\Clinica;
use App\Models\Especialidad;
use App\Models\Medico;
use App\Models\Dia;
use App\Models\Horario;
use App\Models\Cita;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function reportePac()
    {
        // Extraer todos los pacientes
        $data = Paciente::select(
            "pacientes.id",
            "pacientes.nombre",
            "pacientes.apellido",
            "pacientes.edad",
            "generos.nombre as genero",
            "pacientes.telefono",
            "pacientes.direccion",
            "pacientes.fecha_nacimiento"
        ) -> join("generos", "generos.id", "=", "pacientes.genero_id") -> get();

        // Cargar vista del reporte con la data
        $pdf = Pdf::loadView('/reports/reportPac', compact('data'));
        return $pdf->stream('RegistroPacientes.pdf');
    }

    public function reporteCli()
    {
        // Extraer todas las clinicas
        $data = Clinica::select(
            "clinicas.id",
            "clinicas.nombre",
            "clinicas.telefono",
            "clinicas.direccion"
        )->get();

        // Cargar vista del reporte con la data
        $pdf = Pdf::loadView('/reports/reportCli', compact('data'));
        return $pdf->stream('RegistroClinicas.pdf');
    }
    
    public function reporteMed()
    {
        // Extraer todos los medicos
        $data = Medico::select(
            "medicos.id",
            "medicos.nombre",
            "generos.nombre as genero",
            "especialidades.nombre as especialidad",
            "medicos.telefono",
            "clinicas.nombre as clinica",
        ) -> join("generos", "generos.id", "=", "medicos.genero_id") -> join("especialidades", "especialidades.id", "=", "medicos.especialidad_id") -> join("clinicas", "clinicas.id", "=", "medicos.clinica_id") -> get();

        // Cargar vista del reporte con la data
        $pdf = Pdf::loadView('/reports/reportMed', compact('data'));
        return $pdf->stream('RegistroMédicos.pdf');
    }
    public function reporteHor()
    {
        // Extraer todos los horarios
        $data = Horario::select(
            "horarios.id",
            "medicos.nombre as medico",
            "dias.nombre as dia",
            "horarios.hora_e",
            "horarios.hora_s",
        ) -> join("medicos", "medicos.id", "=", "horarios.medico_id") -> join("dias", "dias.id", "=", "horarios.dia_trabajo") -> get();

        // Cargar vista del reporte con la data
        $pdf = Pdf::loadView('/reports/reportHor', compact('data'));
        return $pdf->stream('RegistroHorarios.pdf');
    }
    public function reporteCit()
    {
        // Extraer todas las citas
        $data = Cita::select(
            "citas.id",
            "pacientes.nombre as paciente",
            "medicos.nombre as medico",
            "citas.motivo",
            "citas.fecha_a",
            "citas.created_at",
        ) -> join("pacientes", "pacientes.id", "=", "citas.paciente_id") -> join("medicos", "medicos.id", "=", "citas.medico_id") -> get();

        // Cargar vista del reporte con la data
        $pdf = Pdf::loadView('/reports/reportCit', compact('data'));
        return $pdf->stream('RegistroClinicas.pdf');
    }
}
