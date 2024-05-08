<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\GroupsImport;
use App\Imports\TypesImport;

class ImportController extends Controller
{
    public function importgroup(Request $request)
    {
        // return $request;
        $request->validate([
            'file' => 'required|mimes:xlsx,xls',
        ]);

        $file = $request->file('file');

        Excel::import(new GroupsImport, $file);

        return redirect()->back()->with('success', 'Data imported successfully!');
    }

    public function importtype(Request $request)
    {
        // return $request;
        $request->validate([
            'file' => 'required|mimes:xlsx,xls',
        ]);

        $file = $request->file('file');

        Excel::import(new TypesImport, $file);

        return redirect()->back()->with('success', 'Data imported successfully!');
    }
}
