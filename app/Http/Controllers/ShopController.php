<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $data = Product::paginate(20);
        return view('pelanggan.page.shop', compact('data'));
    }

    public function filterByCategory(Request $request)
    {
        $category = $request->get('kategory');

        $data = Product::where('category', $category)->paginate(20);

        return view('pelanggan.component.partials.product_list', compact('data'));
    }
}
