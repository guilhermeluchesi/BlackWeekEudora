<?php

namespace App\Http\Controllers;

use Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;
use Rap2hpoutre\FastExcel\FastExcel;

class FileController extends BaseController
{
    public function index(Request $request)
    {
        return View::make('file.index');
    }

    public function store(Request $request)
    {
        $request->file('xlsx')->storeAs('uploads', 'lista.xlsx');

        $products = (new FastExcel)->import(sprintf('%s%s',env('LIST_XLSX_PATH'), 'lista.xlsx'));
        $products = json_encode($products);
        Redis::set('database', $products);

        return redirect('/');
    }
}
