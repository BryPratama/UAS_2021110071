<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        // Menampilkan produk awal saat halaman shop pertama kali diakses
        $data = Product::paginate(20);
        return view('pelanggan.page.shop', compact('data'));
    }

    public function filterByCategory(Request $request)
    {
        $category = $request->get('kategory');

        // Filter produk berdasarkan kategori yang dipilih
        $data = Product::where('category', $category)->paginate(20);

        // Mengembalikan partial view 'product_list' sebagai respon AJAX
        return view('pelanggan.component.partials.product_list', compact('data'));
    }
}
