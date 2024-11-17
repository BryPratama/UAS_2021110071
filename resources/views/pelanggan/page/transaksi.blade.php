@extends('pelanggan.layout.index')

@section('content')
    <style>
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 74b14f5 (update)
<h3 class="mt-5">Keranjang Belanja</h3>
<div class="card mb-3">
    <div class="card-body d-flex gap-4">
        <img src="{{ asset('assets/images/787b.jpg') }}" alt="" width="250px" height="auto">
        <div class="desc w-100">
            <p style="font-size:24px; font-weight:700;">HotWheels Premium Gran Turismo Mazda 787B</p>
            <input type="number" class="form-control border-0 fs-4" id="harga" value="350000">
            <div class="row mb-2">
                <label for="qty" class="col-sm-2 col-form-label fs-5">Quantity</label>
                <div class="col-sm-5 d-flex">
                    <button class="rounded-start bg-secondary p-2 border border-0" id="plus">+</button>
                    <input type="number" name="qty" class="form-control w-25 text-center" id="qty" min="0" max="9999" value="1">
                    <button class="rounded-end bg-secondary p-2 border border-0" id="minus" disabled>-</button>
                </div>
            </div>
            <div class="row">
                <label for="price" class="col-sm-2 col-form-label fs-5">Total</label>
                <input type="text" class="col-sm-2 form-control w-25 border-0 fs-4" readonly id="total">
            </div>
            <div class="row w-50 gap-1">
                <a href="/checkout" class="btn btn-success col-sm-5">
                    <i class="fa fa-shopping-cart"></i>
                    Checkout
                </a>
                <button class="btn btn-danger col-sm-5">
                    <i class="fa fa-trash-alt"></i>
                    Delete
                </button>
            </div>
        </div>
    </div>
</div>
@endsection


<<<<<<< HEAD
=======
=======

    <h3 class="mt-5 mb-5">Keranjang Belanja</h3>

    @if ($data->isEmpty())
        <p>Keranjang belanja Anda kosong.</p>
    @else
        @foreach ($data as $x)
            <div class="card mb-3">
                <div class="card-body d-flex gap-4">
                    <img src="{{ asset('storage/product/' . $x->product->foto) }}" width="300" alt="">

                    <form action="{{ route('checkout.product', ['id' => $x->id]) }}" method="POST" class="w-100">
                        @csrf
                        <div class="desc w-100">
                            <p style="font-size:24px; font-weight:700;">{{ $x->product->nama_product }}</p>
                            <input type="hidden" name="idBarang" value="{{ $x->product->id }}">
                            <input type="number" class="form-control border-0 fs-1" name="harga" id="harga"
                                value="{{ $x->product->harga }}" readonly>

                            <div class="row mb-2">
                                <label for="qty" class="col-sm-2 col-form-label fs-5">Quantity</label>
                                <div class="col-sm-5 d-flex">
                                    <button type="button" class="rounded-start bg-secondary p-2 border border-0 plus"
                                        id="plus">+</button>
                                    <input type="number" name="qty" class="form-control w-25 text-center qty"
                                        id="qty" value="{{ $x->qty }}">
                                    <button type="button" class="rounded-end bg-secondary p-2 border border-0 minus"
                                        id="minus" {{ $x->qty <= 1 ? 'disabled' : '' }}>-</button>
                                </div>
                            </div>

                            <div class="row">
                                <label for="price" class="col-sm-2 col-form-label fs-5">Total</label>
                                <input type="text" class="col-sm-2 form-control w-25 border-0 fs-4 total" name="total"
                                    readonly id="total" value="{{ $x->product->harga * $x->qty }}">
                            </div>

                            <div class="row w-50 gap-1">
                                <button type="submit" class="btn btn-success col-sm-5">
                                    <i class="fa fa-shopping-cart"></i>
                                    Checkout
                                </button>

                                <!-- Tombol Delete dengan link ke deleteItem -->
                                <a href="{{ route('deleteItem', $x->id) }}" class="btn btn-danger col-sm-5">
                                    <i class="fa fa-trash-alt"></i>
                                    Delete
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
    @endif
@endsection
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
