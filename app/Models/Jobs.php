<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['Tieu_de', 'Yeu_cau', 
                           'Mo_ta_cong_viec', 'Muc_luong', 
                           'Vi_tri_tuyen_dung', 'Ngay_dang', 
                           'Han_ung_tuyen', 'Thong_tin_khac',
                           'Ma_nha_tuyen_dung', 'Ma_nganh_nghe', '
                           Tieu_de_SEO','Mo_ta_SEO', 
                           'Hinh_anh_SEO'];
    protected $primaryKey = 'Ma_bai_dang';
    protected $table = 'bai_dang_tuyen_dung';
}
