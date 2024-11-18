@if ($data->isEmpty())
    <h1>Barang Kosong</h1>
@else
    @foreach ($data as $p)
        <div class="card" style="width:200px;">
            <div class="card-header m-auto">
                <img src="{{ asset('storage/product/' . $p->foto) }}" alt=""
                    style="width: 100%; height:130px; object-fit: cover; padding:0;">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify" style="font-size: 14px;">{{ $p->nama_product }}</p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 14px; font-weight:600;">
                    <span>IDR</span> {{ number_format($p->harga) }}
                </p>
                <button class="btn btn-outline-primary add-to-cart" style="font-size:24px" data-id="{{ $p->id }}">
                    <i class="fa-solid fa-cart-plus"></i>
                </button>
            </div>
        </div>
    @endforeach
@endif
