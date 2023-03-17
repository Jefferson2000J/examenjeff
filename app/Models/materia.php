<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Materia
 *
 * @property $id
 * @property $name
 * @property $creditos
 * @property $estado
 * @property $date_at
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Materia extends Model
{
    
    static $rules = [
		'name' => 'required',
		'creditos' => 'required',
		'estado' => 'required',
		'date_at' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','creditos','estado','date_at'];
    public function materia()
{
    return $this->belongsTo(Materia::class, 'id_Materia');
}

}
