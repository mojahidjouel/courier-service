<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /*
    * relation with user
    */
    public function users(){
        return $this->hasMany(AdminUser::class);
    }
}
