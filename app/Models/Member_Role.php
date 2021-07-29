<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;
use App\Models\Member;


class Member_Role extends Model
{
    use HasFactory;
    protected $table = "member_roles";
    protected $fillable = 
    [
        'member_id','role_id'
    ];
}
