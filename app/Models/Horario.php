<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Horario
 *
 * @property $id
 * @property $medico_id
 * @property $dia_trabajo
 * @property $hora_e
 * @property $hora_s
 *
 * @property Dia $dia
 * @property Medico $medico
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Horario extends Model
{
    
    static $rules = [
		'medico_id' => 'required',
		'dia_trabajo' => 'required',
		'hora_e' => 'required',
		'hora_s' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['medico_id','dia_trabajo','hora_e','hora_s'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function dia()
    {
        return $this->hasOne('App\Models\Dia', 'id', 'dia_trabajo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function medico()
    {
        return $this->hasOne('App\Models\Medico', 'id', 'medico_id');
    }
    

}
