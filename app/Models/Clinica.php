<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Clinica
 *
 * @property $id
 * @property $nombre
 * @property $telefono
 * @property $direccion
 *
 * @property Medico[] $medicos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Clinica extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'telefono' => 'required',
		'direccion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','telefono','direccion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function medicos()
    {
        return $this->hasMany('App\Models\Medico', 'clinica_id', 'id');
    }
    

}
