@extends('pelanggan.layout.index')

@section('content')
    <div class="row mt-4 align-items-center">
        <div class="col-md-6">
            <div class="content-text">
                Bry Hotwheels Shop lahir dari kecintaan mendalam terhadap dunia mobil miniatur dan nostalgia yang dibawa oleh setiap koleksi Hot Wheels. Didirikan oleh sekelompok penggemar yang telah menghabiskan tahun-tahun mengumpulkan berbagai model, kami memahami betapa berharganya setiap mobil bagi kolektor dan penggemar. Melihat semakin meningkatnya minat terhadap Hot Wheels di kalangan anak-anak dan orang dewasa, kami merasa terinspirasi untuk membuka toko yang tidak hanya menjual produk, tetapi juga menjadi pusat komunitas bagi para penggemar.
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('assets/images/hwhq.jpg') }}" style="width:100%" alt="">
        </div>
    </div>

    <div class="d-flex justify-content-lg-between mt-5">
        <div class="d-flex align-items-center gap-4">
            <i class="fa fa-building fa-2x"></i>
            <p class="m-0 fs-5">Official Mattel Reseller</p>
        </div>
        <div class="d-flex align-items-center gap-4">
            <i class="fas fa-cart-plus fa-2x"> </i>
            <p class="m-0 fs-5">+ 2.000 Customer</p>
        </div>
        <div class="d-flex align-items-center gap-4">
            <i class="fas fa-car fa-2x"></i>
            <p class="m-0 fs-5">Over 2.000 Products</p>
        </div>
    </div>

    <h4 class="text-center mt-md-5 mb-md-2">Contact Us</h4>
    <hr class="mb-5">
    <div class="row  mb-md-5">
        <div class="col-md-5">
            <div class="bg-secondary" style="width: 100%; height:50vh; border-radius:10px;"></div>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Kritik dan saran</h4>
                </div>
                <div class="card-body">
                    <p class="p-0 mb-5 text-lg-center">Silahkan Masukan kritik dan saran
                    </p>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" value=""
                                placeholder="Masukan email Anda">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="pesan" class="col-sm-2 col-form-label">Pesan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="pesan" placeholder="Masukan Pesan Anda">
                        </div>
                    </div>
                    <button class="btn btn-primary mt-4 w-100"> Kirim pesan anda</button>
                </div>
            </div>
        </div>
    </div>
@endsection
