<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use App\Models\Medico;
use App\Models\Dia;
use Illuminate\Http\Request;

/**
 * Class HorarioController
 * @package App\Http\Controllers
 */
class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horarios = Horario::paginate();

        return view('horario.index', compact('horarios'))
            ->with('i', (request()->input('page', 1) - 1) * $horarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $horario = new Horario();
        $medico = Medico::all();
        $dia = Dia::all();

        return view('horario.create', compact('horario', 'medico', 'dia'));
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
            'medico_id' => 'required',
            'dia_trabajo' => 'required',
            'hora_e' => 'required',
            'hora_s' => 'required',
        ]);

        request()->validate(Horario::$rules);

        $horario = Horario::create($request->all());

        return redirect()->route('horarios.index')
            ->with('success', 'Horario created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $horario = Horario::find($id);

        return view('horario.show', compact('horario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $horario = Horario::find($id);
        $medico = Medico::all();
        $dia = Dia::all();

        return view('horario.edit', compact('horario', 'medico', 'dia' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Horario $horario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Horario $horario)
    {
        $request->validate([
            'medico_id' => 'required',
            'dia_trabajo' => 'required',
            'hora_e' => 'required',
            'hora_s' => 'required',
        ]);
        
        request()->validate(Horario::$rules);

        $horario->update($request->all());

        return redirect()->route('horarios.index')
            ->with('success', 'Horario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $horario = Horario::find($id)->delete();

        return redirect()->route('horarios.index')
            ->with('success', 'Horario deleted successfully');
    }
}
