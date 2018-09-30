<?php

namespace App\Http\Controllers;

use Rap2hpoutre\FastExcel\FastExcel;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;


class StoreController extends BaseController
{
    CONST PAGINATION = 9;

    public function index(Request $request)
    {
        $products = (new FastExcel)->import(sprintf('%s%s',env('LIST_XLSX_PATH'),'lista.xlsx'));
        $categories = $products->groupBy('Categoria');

        if ($request->has('orderBy')) {
            $products = $products->sortBy($request->input('orderBy'));
        }

        if (strpos($request->input('orderBy'), '-') !== false) {
            $option = trim($request->input('orderBy'), '-');
            $products = $products->sortByDesc($option);
        }

        if ($request->has('search')) {
            $products = $products->where('Produto', $request->input('search'));
        }

        if($request->has('type') && $request->input('type')) {
            $products = $products->where('Categoria', $request->input('type'));
        }

        $pagination = $this->getPagination($products, self::PAGINATION, $request->input('page'), $request->all());

        return View::make('store.index')
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
