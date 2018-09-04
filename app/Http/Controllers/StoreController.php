<?php

namespace App\Http\Controllers;

use Rap2hpoutre\FastExcel\FastExcel;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

class StoreController extends BaseController
{
    public function index()
    {
        $products = (new FastExcel)->import('/var/www/lista.xlsx');

        return View::make('store.index')
            ->withProducts($products);
    }
}
