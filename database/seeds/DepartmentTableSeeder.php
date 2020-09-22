<?php

use Illuminate\Database\Seeder;
use App\Department;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $departments = ['HR', 'Marketing', 'Software'];
      foreach ($departments as $row) {
        Department::create(['name'=>$row]);
      }
    }
}
