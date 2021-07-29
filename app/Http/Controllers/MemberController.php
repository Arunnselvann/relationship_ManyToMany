<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Role;

class MemberController extends Controller
{
    public function __construct(Member $member, Role $role)
    {
        $this->member = $member;
        $this->role = $role;
    }

    public function addMember()
    {
        $member = new Member();
        $member->name = "Arun";
        $member->save();
        
        $roleid = [1,2];
        $member->role()->attach($roleid);
        return "Attached created successfully!";
    }

    public function addMemberTwo()
    {
        $member = new Member();
        $member->name = "Balaji";
        $member->save();
        
        $roleid = [2,3,4];
        $member->role()->attach($roleid);
        return "Attached created successfully!";
    }

    public function getAllRolesByMember()
    {
        $member = $this->member->with('role')->get();
        return view('view',compact('member'));
    }

    public function getAllMembersByRole()
    {
        $roles = $this->role->with('member')->get();
        return view('view',compact('roles'));
    }

    public function addRoles()
    {
        $member = [
            ["roles" => "Cricket"],
            ["roles" => "Football"],
            ["roles" => "Hockey"],
            ["roles" => "Tennis"],
            ["roles" => "Boxing"]
        ];
         Role::insert($member);
         return "Roles created successfully!";
    }
}
