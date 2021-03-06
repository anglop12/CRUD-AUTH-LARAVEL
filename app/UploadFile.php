<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UploadFile extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'upload_files';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo',
        'descripcion',
        'nombre',
        'ruta'
    ];

}
