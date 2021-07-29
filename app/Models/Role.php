<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Member;
use App\Models\Member_Role;


class Role extends Model
{
    use HasFactory;
    protected $table = "roles";
    protected $fillable =
    [
        'roles'
    ];

    public function member()
    {
        return $this->belongsToMany(Member::class,'member__roles');
    }
}
