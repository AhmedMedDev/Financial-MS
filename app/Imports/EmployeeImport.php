<?php

namespace App\Imports;

use App\Models\Employee;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EmployeeImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Employee([
            'name'              => $row['name'],
            'salary'            => $row['salary'],
            'national_id'       => $row['national_id'],
            'date_of_birth'     => $row['date_of_birth'],
            'qualification'     => $row['qualification'],
            'address'           => $row['address'],
            'religion'          => $row['religion'],
            'phone'             => $row['phone'],
            'position'          => $row['position'],
            'email'             => $row['email'],
            'start_date'        => $row['start_date'],
        ]);
    }
}
