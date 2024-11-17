<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
<<<<<<< HEAD
use App\Http\Requests\StoretransaksiRequest;
use App\Http\Requests\UpdatetransaksiRequest;
=======
<<<<<<< HEAD
use App\Http\Requests\StoretransaksiRequest;
use App\Http\Requests\UpdatetransaksiRequest;
=======
use App\Models\product;
use App\Models\tblCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 74b14f5 (update)
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoretransaksiRequest $request)
    {
        //
<<<<<<< HEAD
=======
=======
        $best = product::where('quantity_out', '>=', 5)->get();
        $data = product::paginate(15);
        $countKeranjang = tblCart::where(['idUser' => 'guest123', 'status' => 0])->count();
        return view('pelanggan.page.home', [
            'title' => 'Home',
            'data' => $data,
            'best' => $best,
            'count' => $countKeranjang,
        ]);
    }

    /**
     * Add a product to the cart.
     */
    public function addToCart(Request $request)
    {
        $idProduct = $request->input('idProduct');
        $product = product::find($idProduct);

        if (!$product) {
            Alert::error('Error', 'Product not found');
            return redirect()->back();
        }

        $existingCartItem = tblCart::where([
            'idUser' => 'guest123',
            'id_barang' => $idProduct,
            'status' => 0
        ])->first();

        if ($existingCartItem) {
            // If product is already in the cart, increase quantity by 1
            $existingCartItem->qty += 1;
            $existingCartItem->save();
        } else {
            // Otherwise, create a new cart item
            tblCart::create([
                'idUser' => 'guest123',
                'id_barang' => $idProduct,
                'qty' => 1,
                'price' => $product->harga,
                'status' => 0
            ]);
        }

        Alert::success('Success', 'Product added to cart');
        return redirect('/transaksi');
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
    }

    /**
     * Display the specified resource.
     */
    public function show(transaksi $transaksi)
    {
<<<<<<< HEAD
        //
=======
<<<<<<< HEAD
        //
=======
        // Implement if needed
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(transaksi $transaksi)
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 74b14f5 (update)
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatetransaksiRequest $request, transaksi $transaksi)
    {
        //
<<<<<<< HEAD
=======
=======
        // Implement if needed
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(transaksi $transaksi)
    {
<<<<<<< HEAD
        //
=======
<<<<<<< HEAD
        //
=======
        // Implement if needed
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
    }
}
