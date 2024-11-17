<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
=======
<<<<<<< HEAD
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
=======
use App\Models\product;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class ProductController extends Controller
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
        $data = product::get();
        return view('admin.page.product',[
            'name' => "Product",
            'title'=> 'Admin Product',
            'data'=> $data,
        ]);
    }

<<<<<<< HEAD
=======
=======
        $data = product::paginate(3);
        return view('admin.page.product', [
            'name'      => "Product",
            'title'     => 'Admin Product',
            'data'      => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
    public function addModal()
    {
        return view('admin.modal.addModal', [
            'title' => 'Tambah Data Product',
<<<<<<< HEAD
            'sku' => 'BRG' . rand(10000, 99999),
=======
<<<<<<< HEAD
            'sku' => 'BRG' . rand(10000, 99999),
=======
            'sku'   => 'BRG' . rand(10000, 99999),
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
<<<<<<< HEAD
    public function store(StoreProductRequest $request)
    {
        $data = new Product();
=======
<<<<<<< HEAD
    public function store(StoreProductRequest $request)
    {
        $data = new Product();
=======
    public function store(StoreproductRequest $request)
    {
        $data = new product;
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
        $data->sku          = $request->sku;
        $data->nama_product = $request->nama;
        $data->type         = $request->type;
        $data->kategory     = $request->kategori;
        $data->harga        = $request->harga;
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 74b14f5 (update)
        $data->quantity     = $request->input('quantity', 0); // Set default ke 0 jika tidak ada input
        $data->discount     = 10; // Atur diskon sesuai kebutuhan
        $data->is_active    = 1;

        // Menangani upload foto
<<<<<<< HEAD
=======
=======
        $data->quantity     = $request->quantity;
        $data->discount     = 10 / 100;
        $data->is_active    = 1;

>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
        if ($request->hasFile('foto')) {
            $photo = $request->file('foto');
            $filename = date('Ymd') . '_' . $photo->getClientOriginalName();
            $photo->move(public_path('storage/product'), $filename);
            $data->foto = $filename;
        }
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 74b14f5 (update)

        // Simpan data produk ke database
        $data->save();

        // Menampilkan pesan sukses
        Alert::toast('Data Telah Disimpan', 'success');
<<<<<<< HEAD
=======
=======
        $data->save();
        Alert::toast('Data berhasil disimpan', 'success');
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
        return redirect()->route('product');
    }

    /**
     * Display the specified resource.
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 74b14f5 (update)
    public function show(Product $product)
    {
        // Anda bisa menambahkan logika untuk menampilkan detail produk di sini
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        // Anda bisa menambahkan logika untuk menampilkan form edit produk di sini
<<<<<<< HEAD
=======
=======
    public function show($id)
    {
        $data = product::findOrFail($id);

        return view('admin.modal.editModal', [
            'title' => 'Edit data product',
            'data'  => $data,
        ]);
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
    }

    /**
     * Update the specified resource in storage.
     */
<<<<<<< HEAD
    public function update(UpdateProductRequest $request, Product $product)
    {
        // Anda bisa menambahkan logika untuk memperbarui data produk di sini
=======
<<<<<<< HEAD
    public function update(UpdateProductRequest $request, Product $product)
    {
        // Anda bisa menambahkan logika untuk memperbarui data produk di sini
=======
    public function update(UpdateproductRequest $request, $id)
    {
        $data = product::findOrFail($id);

        if ($request->hasFile('foto')) {
            $photo = $request->file('foto');
            $filename = date('Ymd') . '_' . $photo->getClientOriginalName();
            $photo->move(public_path('storage/product'), $filename);
            $data->foto = $filename;
        } else {
            $filename = $data->foto;
        }

        $data->update([
            'sku'           => $request->sku,
            'nama_product'  => $request->nama,
            'type'          => $request->type,
            'kategory'      => $request->kategori,
            'harga'         => $request->harga,
            'quantity'      => $request->quantity,
            'discount'      => 10 / 100,
            'is_active'     => 1,
            'foto'          => $filename,
        ]);

        Alert::toast('Data berhasil diupdate', 'success');
        return redirect()->route('product');
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
    }

    /**
     * Remove the specified resource from storage.
     */
<<<<<<< HEAD
    public function destroy(Product $product)
    {
        // Anda bisa menambahkan logika untuk menghapus produk di sini
=======
<<<<<<< HEAD
    public function destroy(Product $product)
    {
        // Anda bisa menambahkan logika untuk menghapus produk di sini
=======
    public function destroy($id)
    {
        $product = product::findOrFail($id);
        $product->delete();

        return response()->json(['success' => "Data berhasil dihapus"]);
    }

    /**
     * Add product to cart
     */
    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $product = product::find($productId);

        if ($product) {
            $cart = session()->get('cart', []);

            if (isset($cart[$productId])) {
                $cart[$productId]['quantity']++;
            } else {
                $cart[$productId] = [
                    "name" => $product->nama_product,
                    "quantity" => 1,
                    "price" => $product->harga,
                    "photo" => $product->foto
                ];
            }

            session()->put('cart', $cart);
            return response()->json(['success' => 'Product added to cart']);
        }

        return response()->json(['error' => 'Product not found'], 404);
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
    }
}
