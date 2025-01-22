<?php

namespace App\Repositories;

use App\Models\Employee;
use App\Models\Company;
use App\Repositories\BaseRepository;

class EmployeeRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'company_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Employee::class;
    }

    public function allCompanies()
    {
        return Company::all();
    }
}
