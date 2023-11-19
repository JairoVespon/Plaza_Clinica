<?php

namespace App\Http\Controllers;

use App\Models\Clinica;
use Illuminate\Http\Request;

/**
 * Class ClinicaController
 * @package App\Http\Controllers
 */
class ClinicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clinicas = Clinica::paginate();

        return view('clinica.index', compact('clinicas'))
            ->with('i', (request()->input('page', 1) - 1) * $clinicas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clinica = new Clinica();
        return view('clinica.create', compact('clinica'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Clinica::$rules);

        $clinica = Clinica::create($request->all());

        return redirect()->route('clinicas.index')
            ->with('success', 'Clinica created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clinica = Clinica::find($id);

        return view('clinica.show', compact('clinica'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clinica = Clinica::find($id);

        return view('clinica.edit', compact('clinica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Clinica $clinica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clinica $clinica)
    {
        request()->validate(Clinica::$rules);

        $clinica->update($request->all());

        return redirect()->route('clinicas.index')
            ->with('success', 'Clinica updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $clinica = Clinica::find($id)->delete();

        return redirect()->route('clinicas.index')
            ->with('success', 'Clinica deleted successfully');
    }
}
