<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegalOff extends Model
{
    protected $table = 'legal_off';
    public $timestamps = false;
    protected $primaryKey = 'id_legal';
    public function getNameApproveAttribute()
    {
        if ($this->approve === 0) {
            return 'Duyệt';
        } else if ($this->approve === 1) {
            return 'Không duyệt';
        } else if ($this->approve == null) {
            return 'chờ';
        }
    }
    public function process()
    {
        if ($this->approve == Null) {
        } else if ($this->approve === 1) {
            //ẩn cột active
        } else if ($this->approve == 0) {
            //ẩn cột active
        }
    }
}
