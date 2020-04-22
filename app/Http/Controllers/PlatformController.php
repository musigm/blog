<?php

namespace App\Http\Controllers;

use Validator;
// use Illuminate\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\amazon_lists;
use Datatables; //databale
use Maatwebsite\Excel\Facades\Excel;
// use App\Exports\excelExport; //匯出
use App\Imports\amazonImport; //匯入


class PlatformController extends Controller
{
    // 顯示表單
    public function get_amazon()
    {
        $data_table = DB::table('amazon_lists');
        return Datatables::of($data_table)
        ->toJson();
    }

    // 顯示頁面
    public function show()
    {
        return view('/importdata');
    }


    public function import(Request $request)
    {
        $platform = $request->platform;
        Validator::make($request->all(), [
            'file' => 'required|mimes:xlsx,csv,txt'
        ])->validate();

        if($request->hasFile('file'))
        {
            if ($platform == "Amazon"){
                dd('123');
                Excel::import(new amazonImport,$request->file('file'));
            }
            elseif($platform == "eBay"){
                dd('目前無法匯入');
            }
            elseif($platform == "Cammy"){
                dd('目前無法匯入');
            }
        }

        return redirect('/importdata');
    }
}
