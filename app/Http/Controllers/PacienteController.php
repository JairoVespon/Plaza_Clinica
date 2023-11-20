<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\Genero;
use Illuminate\Http\Request;

/**
 * Class PacienteController
 * @package App\Http\Controllers
 */
class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::paginate();

        return view('paciente.index', compact('pacientes'))
            ->with('i', (request()->input('page', 1) - 1) * $pacientes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paciente = new Paciente();
        $genero = Genero::all();

        return view('paciente.create', compact('paciente', 'genero'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nombre' => 'required|alpha',
            'apellido' => 'required|alpha',
            'edad' => 'required|numeric',
            'genero_id' => 'required',
            'telefono' => 'required|numeric',
            'direccion' => 'required',
            'fecha_nacimiento' => 'required',
        ]);

        request()->validate(Paciente::$rules);

        $paciente = Paciente::create($request->all());

        return redirect()->route('pacientes.index')
            ->with('success', 'Paciente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paciente = Paciente::find($id);

        return view('paciente.show', compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente = Paciente::find($id);
        $genero = Genero::all();

        return view('paciente.edit', compact('paciente', 'genero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Paciente $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $paciente)
    {
        $request->validate([
            'nombre' => 'required|alpha',
            'apellido' => 'required|alpha',
            'edad' => 'required|numeric',
            'genero_id' => 'required',
            'telefono' => 'required|numeric',
            'direccion' => 'required',
            'fecha_nacimiento' => 'required',
        ]);

        request()->validate(Paciente::$rules);

        $paciente->update($request->all());

        return redirect()->route('pacientes.index')
            ->with('success', 'Paciente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $paciente = Paciente::find($id)->delete();

        return redirect()->route('pacientes.index')
            ->with('success', 'Paciente deleted successfully');
    }
}
