<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
=======
<<<<<<< HEAD
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
=======
use App\Models\modelDetailTransaksi;
use App\Models\product;
use App\Models\tblCart;
use App\Models\transaksi;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 74b14f5 (update)
    public function index()
    {
        return view('pelanggan.page.home',[
            'title'=>'Home',
        ]);
    }
    public function shop()
    {
        return view('pelanggan.page.shop',[
            'title'=>'Shop',
<<<<<<< HEAD
=======
=======

    public function shop(Request $request)
    {
        if ($request->has('kategory') && $request->has('type')) {
            $category = $request->input('kategory');
            $type = $request->input('type');
            $data = product::where('kategory', $category)
                ->orWhere('type', $type)->paginate(5);
        } else {
            $data = product::paginate(5);
        }
        $countKeranjang = tblCart::where(['idUser' => 'guest123', 'status' => 0])->count();


        return view('pelanggan.page.shop', [
            'title'     => 'Shop',
            'data'      => $data,
            'count'     => $countKeranjang,
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
        ]);
    }
    public function transaksi()
    {
<<<<<<< HEAD
        return view('pelanggan.page.transaksi',[
            'title'=>'Transaksi',
=======
<<<<<<< HEAD
        return view('pelanggan.page.transaksi',[
            'title'=>'Transaksi',
=======
        $db = tblCart::with('product')->where(['idUser' => 'guest123', 'status' => 0])->get();
        $countKeranjang = tblCart::where(['idUser' => 'guest123', 'status' => 0])->count();

        // dd($db->product->nama_product);die;
        return view('pelanggan.page.transaksi', [
            'title'     => 'Transaksi',
            'count'     => $countKeranjang,
            'data'      => $db
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
        ]);
    }
    public function contact()
    {
<<<<<<< HEAD
        return view('pelanggan.page.contact',[
            'title'=>'Contact Us',
=======
<<<<<<< HEAD
        return view('pelanggan.page.contact',[
            'title'=>'Contact Us',
=======
        $countKeranjang = tblCart::where(['idUser' => 'guest123', 'status' => 0])->count();

        return view('pelanggan.page.contact', [
            'title'     => 'Contact Us',
            'count'     => $countKeranjang,
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
        ]);
    }
    public function checkout()
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 74b14f5 (update)
        return view('pelanggan.page.checkout',[
            'title'=>'Checkout',
        ]);
    }


    public function admin()
    {
        return view('admin.page.dashboard',[
            'name' => "Dashboard",
            'title'=> 'Admin Dashboard',
<<<<<<< HEAD
=======
=======
        $countKeranjang = tblCart::where(['idUser' => 'guest123', 'status' => 0])->count();
        $code = transaksi::count();
        $codeTransaksi = date('Ymd') . $code + 1;
        $detailBelanja = modelDetailTransaksi::where(['id_transaksi' => $codeTransaksi, 'status' => 0])
            ->sum('price');
        $jumlahBarang = modelDetailTransaksi::where(['id_transaksi' => $codeTransaksi, 'status' => 0])
            ->count('id_barang');
        $qtyBarang = modelDetailTransaksi::where(['id_transaksi' => $codeTransaksi, 'status' => 0])
            ->sum('qty');
        return view('pelanggan.page.checkOut', [
            'title'     => 'Check Out',
            'count'     => $countKeranjang,
            'detailBelanja' => $detailBelanja,
            'jumlahbarang' => $jumlahBarang,
            'qtyOrder'  => $qtyBarang,
            'codeTransaksi' => $codeTransaksi
        ]);
    }
    public function prosesCheckout(Request $request, $id)
    {
        $data = $request->all();
        // $findId = tblCart::where('id',$id)->get();
        $code = transaksi::count();
        $codeTransaksi = date('Ymd') . $code + 1;
        // dd($data);die;

        // simpan detail barang
        $detailTransaksi = new modelDetailTransaksi();
        $fieldDetail = [
            'id_transaksi' => $codeTransaksi,
            'id_barang'    => $data['idBarang'],
            'qty'          => $data['qty'],
            'price'        => $data['total']
        ];
        $detailTransaksi::create($fieldDetail);

        // update cart
        $fieldCart = [
            'qty'          => $data['qty'],
            'price'        => $data['total'],
            'status'       => 1,
        ];
        tblCart::where('id', $id)->update($fieldCart);

        Alert::toast('Checkout Berhasil', 'success');
        return redirect()->route('checkout');
    }

    public function prosesPembayaran(Request $request)
    {
        $data = $request->all();
        $dbTransaksi = new transaksi();
        // dd($data);die;

        $dbTransaksi->code_transaksi    = $data['code'];
        $dbTransaksi->total_qty         = $data['totalQty'];
        $dbTransaksi->total_harga       = $data['dibayarkan'];
        $dbTransaksi->nama_customer     = $data['namaPenerima'];
        $dbTransaksi->alamat            = $data['alamatPenerima'];
        $dbTransaksi->no_tlp            = $data['tlp'];
        $dbTransaksi->ekspedisi         = $data['ekspedisi'];

        $dbTransaksi->save();

        $dataCart = modelDetailTransaksi::where('id_transaksi', $data['code'])->get();
        foreach ($dataCart as $x) {
            $dataUp = modelDetailTransaksi::where('id', $x->id)->first();
            $dataUp->status    = 1;
            $dataUp->save();

            $idProduct = product::where('id', $x->id_barang)->first();
            $idProduct->quantity = $idProduct->quantity - $x->qty;
            $idProduct->quantity_out = $x->qty;
            $idProduct->save();
        }

        Alert::alert()->success('Transaksi berhasil', 'Ditunggu barangnya');
        return redirect()->route('home');
    }

    public function keranjang()
    {
        $countKeranjang = tblCart::where(['idUser' => 'guest123', 'status' => 0])->count();
        $all_trx = transaksi::all();
        return view('pelanggan.page.keranjang', [
            'name' => 'Payment',
            'title' => 'Payment Process',
            'count' => $countKeranjang,
            'data'  => $all_trx
        ]);
    }

    public function admin()
    {
        $dataProduct = product::count();
        $dataStock = product::sum('quantity');
        $dataTransaksi = transaksi::count();
        $dataPenghasilan = transaksi::sum('total_harga');
        return view('admin.page.dashboard', [
            'name'          => "Dashboard",
            'title'         => 'Admin Dashboard',
            'totalProduct'  => $dataProduct,
            'sumStock'      => $dataStock,
            'dataTransaksi' => $dataTransaksi,
            'dataPenghasilan' => $dataPenghasilan,
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
        ]);
    }

    public function userManagement()
    {
<<<<<<< HEAD
        return view('admin.page.user',[
            'name' => "User Management",
            'title'=> 'Admin User Management',
=======
<<<<<<< HEAD
        return view('admin.page.user',[
            'name' => "User Management",
            'title'=> 'Admin User Management',
=======
        return view('admin.page.user', [
            'name'      => "User Management",
            'title'     => 'Admin User Management',
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
        ]);
    }
    public function report()
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 74b14f5 (update)
        return view('admin.page.report',[
            'name' => "Report",
            'title'=> 'Admin Report',
        ]);
    }
<<<<<<< HEAD
=======
=======
        return view('admin.page.report', [
            'name'      => "Report",
            'title'     => 'Admin Report',
        ]);
    }
    public function login()
    {
        return view('admin.page.login', [
            'name'      => "Login",
            'title'     => 'Admin Login',
        ]);
    }
    public function loginProses(Request $request)
    {
        Session::flash('error', $request->email);
        $dataLogin = [
            'email' => $request->email,
            'password'  => $request->password,
        ];

        $user = new User;
        $proses = $user::where('email', $request->email)->first();

        if ($proses->is_admin === 0) {
            Session::flash('error', 'Kamu bukan admin');
            return back();
        } else {
            if (Auth::attempt($dataLogin)) {
                Alert::toast('Kamu berhasil login', 'success');
                $request->session()->regenerate();
                return redirect()->intended('/admin/dashboard');
            } else {
                Alert::toast('Email dan Password salah', 'error');
                return back();
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        Alert::toast('Kamu berhasil Logout', 'success');
        return redirect('admin');
    }

    public function deleteItem($id)
{
    // Hapus item dari tblCart berdasarkan ID yang diberikan
    tblCart::where('id', $id)->delete();

    // Redirect kembali ke halaman transaksi dengan pesan sukses
    return redirect()->route('transaksi')->with('success', 'Item berhasil dihapus');
}

>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
}
