<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleHasPermissions extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'role_has_permissions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'role_id');
    }


}
