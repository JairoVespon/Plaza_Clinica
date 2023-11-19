<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function reporteUno()
    {
        // Extraer todos los pacientes
        $data = Paciente::select(
            "pacientes.id",
            "pacientes.nombre",
            "pacientes.apellido",
            "genero.nombre as genero"
        ) -> join("genero", "genero.id", "=", "pacientes.genero") -> get();

        // Cargar vista del reporte con la data
        $pdf = Pdf::loadView('/reports/report1', compact('data'));
        return $pdf->stream('pacientes.pdf');
    }
}
