<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\product_lookup_lists;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\excelExport; //匯出
use App\Imports\excelImport; //匯入

//優化：上傳進度條、大量檔案上傳問題

class ExcelController extends Controller
{
    //顯示表單
    public function show_table()
    {
        $alists = DB::table('product_lookup_lists')->paginate(50);
        return view('/excel',compact('alists'));
    }

    public function search(Request $request)
    {
        $field = $request->field;
        $keyword = $request->keyword;
        $lists = DB::table('product_lookup_lists')->where($field, 'like', '%' . $keyword . '%')->paginate(50);
        // dd($lists);
        return view('/excel',compact('lists'));

    }

    public function export_all()
    {
        return Excel::download(new excel_allExport, 'product lookup lists.xlsx');
    }

    public function export(Request $request )
    {
        $id_count = DB::table('product_lookup_lists')->whereIn('id',$request->checkbox)->get();
        foreach ($id_count as $id_data)
        {
            $data[] = $id_data;
        }
        $export = new excelExport($data);
        return Excel::download($export, 'product lookup lists.xlsx');
    }

    public function import(Request $request)
    {
        // dd($request);
        // $request->validate(['file' => 'required|mimes:xlsx,csv|max:2048',]);
        $request->validate(['file' => 'required|mimes:xlsx,csv',]);

        // $fileName = time().$request->file->getClientOriginalName();
        // $request->file->move(public_path('uploads'), $fileName);
        Excel::import(new excelImport,$request->file);
        return redirect('/excel');
    }
}
