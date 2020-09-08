<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'hv_role';

    protected $fillable= [
        'name', 'display_name',
    ];
    public function admins() {
        return $this->hasMany('App\Model\Admin' , 'role_id', 'id');
    }
}
