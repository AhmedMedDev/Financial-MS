<?php

namespace App\Imports;

use App\Models\Children;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ChildrenImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Children([
            'child_name'        => $row['child_name'],
            'parent'            => $row['parent'],
            'phone'             => $row['phone'],
            'date'              => date('Y-m-d', strtotime(str_replace('/', '-', $row['date']))),
            'date_of_birth'     => date('Y-m-d', strtotime(str_replace('/', '-', $row['date_of_birth']))),
            'gender'            => 'ذكر',
            'nationality'       => $row['nationality'],
            'religion'          => $row['religion'],
            'num_of_bro'        => $row['num_of_bro'],
            'rank_of_bro'       => $row['rank_of_bro'],
            'address'           => $row['address'],
            'national_id'       => $row['national_id'],
            'monthly_expenses'  => $row['monthly_expenses'],
            'bus_expenses'      => $row['bus_expenses'],
        ]);
    }
}
