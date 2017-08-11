<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleSuperAdmin  = Role::where('name', 'super_admin')->first();
        $employee = new User();
        $employee->name = 'Super Admin';
        $employee->email = 'superadmin@hrms.com';
        $employee->password = bcrypt('Welcome321');
        $employee->save();
        $employee->roles()->attach($roleSuperAdmin);
    }
}
