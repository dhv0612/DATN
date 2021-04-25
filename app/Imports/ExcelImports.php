<?php

namespace App\Imports;

use App\Models\Question;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Illuminate\Support\Facades\Session;
class ExcelImports implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    /**
     * @return int
     */
    public function startRow(): int
    {
        return 2;
    }
    public function model(array $row)
    {
        $examid = Session::get('examid');
        return new Question([   
            'Ten_cau_hoi'=>$row[1],
            'Lua_chon_a'=>$row[2],
            'Lua_chon_b'=>$row[3],
            'Lua_chon_c'=>$row[4],
            'Lua_chon_d'=>$row[5],
            'Dap_an'=>$row[6],  
            'Ma_bai_kiem_tra'=>$examid
        ]);
    }
}