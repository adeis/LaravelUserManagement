<?php

namespace Adeis\LaravelUserManagement\Database\Seeders\Department;

use Adeis\LaravelUserManagement\Seeders\Department\MasterDepartmentTableSeeder;

class DepartmentTableSeeder extends MasterDepartmentTableSeeder
{
    protected $departments = [
        [
            'title' => 'Clients',
            'parent' => '',
        ],
    ];
}
