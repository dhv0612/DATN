<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['Ten_nganh_nghe'];
    protected $primaryKey = 'Ma_nganh_nghe';
    protected $table = 'nganh_nghe';
}
