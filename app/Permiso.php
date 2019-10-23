<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'permissions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'role_has_permissions', 'permission_id', 'role_id');
    }

}
