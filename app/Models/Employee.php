<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    public $timestamps = false;
    public $primaryKey = 'id_employee';

    public function getNameGenderAttribute()
    {
        if ($this->gender == 1) {
            return 'Nữ';
        } else {
            return 'Nam';
        }
    }

    public function getNameStatusAttribute()
    {
        if ($this->status == 1) {
            return 'Đang làm';
        } else {
            return 'Nghỉ';
        }
    }
}
