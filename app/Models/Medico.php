<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Medico
 *
 * @property $id
 * @property $nombre
 * @property $genero_id
 * @property $especialidad_id
 * @property $telefono
 * @property $clinica_id
 *
 * @property Cita[] $citas
 * @property Clinica $clinica
 * @property Especialidad $especialidad
 * @property Genero $genero
 * @property Horario[] $horarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Medico extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'genero_id' => 'required',
		'especialidad_id' => 'required',
		'telefono' => 'required',
		'clinica_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','genero_id','especialidad_id','telefono','clinica_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function citas()
    {
        return $this->hasMany('App\Models\Cita', 'medico_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function clinica()
    {
        return $this->hasOne('App\Models\Clinica', 'id', 'clinica_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function especialidad()
    {
        return $this->hasOne('App\Models\Especialidad', 'id', 'especialidad_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function genero()
    {
        return $this->hasOne('App\Models\Genero', 'id', 'genero_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function horarios()
    {
        return $this->hasMany('App\Models\Horario', 'medico_id', 'id');
    }
    

}
