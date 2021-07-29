<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;
use App\Models\Member_Role;



class Member extends Model
{
    use HasFactory;
    protected $table = "members";
    protected $fillable = 
    [
        'name'
    ];

    public function role()
    {
        return $this->belongsToMany(Role::class,'member__roles');
    }
}
