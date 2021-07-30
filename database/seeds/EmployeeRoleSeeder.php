<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Employee;

class EmployeeRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $roles=factory(Role::class, 5)->create();
        $employees=factory(Employee::class,10)->create();

        $employees->each(function (Employee $emp) use ($roles) {
        $emp->roles()->sync($roles->random(rand(1,3))->pluck('id')->toArray());
        });
    }
}
