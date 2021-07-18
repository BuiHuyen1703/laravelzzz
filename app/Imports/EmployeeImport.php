<?php

namespace App\Imports;

use App\Models\Employee;
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
        $date = str_replace('/', '-', $row['ngay_sinh']);
        dd([]);
        return new Employee([
            'name' => $row['ten'],
            'dateOfBirth' => date('Y-m-d', strtotime($date)),
            'gender' => $row['gioi_tinh'] == "Nam" ? 1 : 0,
            'phone' => $row['sdt'],
            'address' => $row['dia_chi'],
            'email' => $row['email'],
            'pass' => $row['password'],
            'salaryPerHour' => $row['luong_1h'],
            'level' => $row['level'],
            'department' => $row['phong_ban'],
            'jobTitle' => $row['chuc_vu'],
            'available' => 1,
        ]);
    }
}
