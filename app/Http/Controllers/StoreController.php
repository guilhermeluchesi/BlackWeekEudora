<?php

namespace App\Http\Controllers;

use Storage;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\View;
use Rap2hpoutre\FastExcel\FastExcel;

class StoreController extends BaseController
{
    CONST PAGINATION = 9;

    public function index(Request $request)
    {
        $products = Redis::get('database');

        if (!$products) {
            $products = (new FastExcel)->import(sprintf('%s%s',env('LIST_XLSX_PATH'), 'lista.xlsx'));
            $products = json_encode($products);
            Redis::set('database', $products);
        }

        $products = new Collection(json_decode($products, true));

        $maxValue = round($products->max('RE Vende por'));
        $categories = $products->groupBy('Categoria');

        if ($request->has('orderBy')) {
            $products = $products->sortBy($request->input('orderBy'));
        }

        if (strpos($request->input('orderBy'), '-') !== false) {
            $option = trim($request->input('orderBy'), '-');
            $products = $products->sortByDesc($option);
        }

        if ($request->has('search')) {
            $search = $request->input('search');
            $products = $products->reject(function($element) use ($search) {
                return mb_strpos(Arr::get($element, 'Produto'), strtoupper($search)) === false;
            });
        }

        if ($request->has('type') && $request->input('type')) {
            $products = $products->where('Categoria', $request->input('type'));
        }

        if ($request->has('slider')) {
            $products = $products->where('RE Vende por', '>', $request->input('slider'));
        }

        $pagination = $this->getPagination($products, self::PAGINATION, $request->input('page'), $request->all());

        return View::make('store.index')
            ->withMaxValue($maxValue)
            ->withProducts($pagination->items())
            ->withProductCollection($products)
            ->withCategories($categories)
            ->withPagination($pagination);
    }

    protected function getPagination($items, $perPage, $page, $options)
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
	    $items = $items instanceof Collection ? $items : Collection::make($items);

        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
