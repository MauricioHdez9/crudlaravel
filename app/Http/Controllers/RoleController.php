<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
   public function addRole()
   {
       $roles =
       [
           ["name"=>"administrador"],
           ["name"=>"Editor"],
           ["name"=>"autor"],
           ["name"=>"contribuidor"],
           ["name"=>"Subscrito"]

       ];
       Role::insert($roles);
       return "los roles se crearon";

   }
   public function adduser()
   {
       $user = new User();
       $user->name="mau";
       $user->email="loca@gmail.com";
       $user->password =encrypt('secret');
       $user->save();
       $roleid=[1,2,4,3,5];
       $user->roles()->attach($roleid);
       return "los usuarios se crearon ";
   }
}
