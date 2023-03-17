<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Matricula
 *
 * @property $id
 * @property $id_Materia
 * @property $created_at
 * @property $updated_at
 *
 * @property Materia $materia
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Matricula extends Model
{
    
    static $rules = [
		'id_Materia' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_Materia'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function materia()
    {
        return $this->hasOne('App\Models\Materia', 'id', 'id_Materia');
    }
    

}
