<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['Ma_bai_kiem_tra','Ten_cau_hoi','Lua_chon_a', 'Lua_chon_b', 'Lua_chon_c', 'Lua_chon_d', 'Dap_an'];
    protected $primaryKey = 'Ma_cau_hoi';
    protected $table = 'cau_hoi';
}
