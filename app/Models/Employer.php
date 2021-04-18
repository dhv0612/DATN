<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['Ten_cong_ty', 'Trang_web', 
                           'Dia_chi', 'Ma_dia_diem', 
                           'So_fax', 'Email', 
                           'Hinh_anh', 'Tai_khoan',
                           'Mat_khau'];
    protected $primaryKey = 'Ma_nha_tuyen_dung';
    protected $table = 'nha_tuyen_dung';
}
