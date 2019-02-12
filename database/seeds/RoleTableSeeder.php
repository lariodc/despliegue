<?php

use Illuminate\Database\Seeder;
//use Provider\Role;
//use Provider\User;
use InterSoluciones\Role;
//use InterSoluciones\User;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $role = new Role();
       $role->name = 'admin';
       $role->description = 'Administrador';
       $role->save();

       $role = new Role();
       $role->name = 'user';
       $role->description = 'User';
       $role->save();
    }
}
