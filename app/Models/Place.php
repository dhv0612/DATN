<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['Ten_dia_diem'];
    protected $primaryKey = 'Ma_dia_diem';
    protected $table = 'dia_diem';
}
