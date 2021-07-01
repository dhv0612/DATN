<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['Ten_bai_kiem_tra', 'Thoi_gian_lam','So_cau', 'Diem_toi_thieu', 'Ma_nha_tuyen_dung'];
    protected $primaryKey = 'Ma_bai_kiem_tra';
    protected $table = 'bai_kiem_tra';
}
