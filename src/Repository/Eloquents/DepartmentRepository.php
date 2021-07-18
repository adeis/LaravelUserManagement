<?php

namespace Adeis\LaravelUserManagement\Repository\Eloquents;

use App\Entities\Department;
use Adeis\LaravelUserManagement\Repository\Eloquents\BaseEloquentRepository;
use Adeis\LaravelUserManagement\Repository\Contracts\DepartmentRepositoryInterface;

class DepartmentRepository extends BaseEloquentRepository implements DepartmentRepositoryInterface
{
    protected $model = Department::class;

    public function syncDepartments($owner, array $departments=[])
    {
        return $owner->departments()->sync($departments, true);
    }

    public function attachDepartment($owner, array $departments=[])
    {
        return $owner->departments()->attach($departments);
    }


}