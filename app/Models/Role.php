<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name',
    ];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function assignPermission($permission)
    {
        return $this->permissions()->save($permission);
    }
}
