<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegalOff extends Model
{
    protected $table = 'legal_off';
    public $timestamps = false;
    protected $primaryKey = 'id_legal';
}
