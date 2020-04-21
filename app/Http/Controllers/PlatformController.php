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
        // $request->validate(['file' => 'required|mimes:xlsx,csv|max:2048',]);
        Validator::make($request->all(), [
            'file' => 'required|mimes:xlsx,csv'
        ])->validate();


        if($request->hasFile('file'))
        {
            Excel::import(new amazonImport,$request->file('file'));
        }

        return redirect('/importdata');
    }
}
