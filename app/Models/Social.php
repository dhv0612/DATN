<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['Ma_ung_vien_mxh', 'Mang_xa_hoi', 'Ma_ung_vien'];
    protected $primaryKey = 'Nguoi_dung';
    protected $table = 'mang_xa_hoi';

    public function login(){
        return $this->belongsTo('App\Models\User', 'Ma_ung_vien');
    }
}
