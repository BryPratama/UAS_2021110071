@extends('pelanggan.layout.index')
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 74b14f5 (update)

@section('content')
    <div class="row mt-4">
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    Items
                </div>
<<<<<<< HEAD
=======
=======
@section('content')
    <div class="d-flex flex-row gap-2 mt-4">
        <div style="width: 30%;">
            <div class="card" style="width: 18rem;">
                <div class="card-header">Category HW</div>
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
                <div class="card-body">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
<<<<<<< HEAD
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
=======
<<<<<<< HEAD
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
=======
                                    data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
                                    Reguler
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="d-flex flex-column gap-4">
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 74b14f5 (update)
                                        <a href="#" class="page-link">
                                            <i class="fas fa-plus"></i>Reguler JDM
                                        </a>
                                        <a href="#" class="page-link">
                                            <i class="fas fa-plus"></i>Reguler European
                                        </a>
                                        <a href="#" class="page-link">
                                            <i class="fas fa-plus"></i>Reguler American
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item p-0">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Premium
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body p-0">
                                    <div class="accordion-body">
                                        <div class="d-flex flex-column gap-4">
                                            <a href="#" class="page-link">
                                                <i class="fas fa-plus"></i>Premium JDM
                                            </a>
                                            <a href="#" class="page-link">
                                                <i class="fas fa-plus"></i>Premium European
                                            </a>
                                            <a href="#" class="page-link">
                                                <i class="fas fa-plus"></i>Premium American
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    RLC
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="accordion-body p-0">
                                        <div class="d-flex flex-column gap-4">
                                            <a href="#" class="page-link">
                                                <i class="fas fa-plus"></i>RLC JDM
                                            </a>
                                            <a href="#" class="page-link">
                                                <i class="fas fa-plus"></i>RLC European
                                            </a>
                                            <a href="#" class="page-link">
                                                <i class="fas fa-plus"></i>RLC American
                                            </a>
<<<<<<< HEAD
=======
=======
                                        <div class="d-flex flex-row gap-3">
                                            <input type="checkbox" name="kategory" class="kategory" value="jdm">
                                            <span>JDM</span>
                                        </div>
                                        <div class="d-flex flex-row gap-3">
                                            <input type="checkbox" name="kategory" class="kategory" value="eudm">
                                            <span>EU-DM</span>
                                        </div>
                                        <div class="d-flex flex-row gap-3">
                                            <input type="checkbox" name="kategory" class="kategory" value="adm">
                                            <span>ADM</span>
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 74b14f5 (update)
        <div class="col-md-9 d-flex flex-wrap gap-4 mb-4">
            <div class="card" style="width:220px;">
                <div class="card-header m-auto" style="border-radius:5px; height: 180px;">
                    <img src="{{ asset('assets/images/430.jpg') }}" alt="430"
                        style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                    <p class="m-0 text-center"> HotWheels Ferrari Racer Ferrari 430 Scuderia </p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0" style="font-size: 16px; font-weight:600;">Rp.500.000</p>
                    <button class="btn btn-outline-primary" style="font-size:24px;">
                        <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>

            <div class="card" style="width:220px;">
                <div class="card-header m-auto" style="border-radius:5px; height: 180px;">
                    <img src="{{ asset('assets/images/430.jpg') }}" alt="430"
                        style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                    <p class="m-0 text-center"> HotWheels Ferrari Racer Ferrari 430 Scuderia </p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0" style="font-size: 16px; font-weight:600;">Rp.500.000</p>
                    <button class="btn btn-outline-primary" style="font-size:24px;">
                        <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>

            <div class="card" style="width:220px;">
                <div class="card-header m-auto" style="border-radius:5px; height: 180px;">
                    <img src="{{ asset('assets/images/430.jpg') }}" alt="430"
                        style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                    <p class="m-0 text-center"> HotWheels Ferrari Racer Ferrari 430 Scuderia </p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0" style="font-size: 16px; font-weight:600;">Rp.500.000</p>
                    <button class="btn btn-outline-primary" style="font-size:24px;">
                        <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>

            <div class="card" style="width:220px;">
                <div class="card-header m-auto" style="border-radius:5px; height: 180px;">
                    <img src="{{ asset('assets/images/430.jpg') }}" alt="430"
                        style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                    <p class="m-0 text-center"> HotWheels Ferrari Racer Ferrari 430 Scuderia </p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0" style="font-size: 16px; font-weight:600;">Rp.500.000</p>
                    <button class="btn btn-outline-primary" style="font-size:24px;">
                        <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>

            <div class="card" style="width:220px;">
                <div class="card-header m-auto" style="border-radius:5px; height: 180px;">
                    <img src="{{ asset('assets/images/430.jpg') }}" alt="430"
                        style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                    <p class="m-0 text-center"> HotWheels Ferrari Racer Ferrari 430 Scuderia </p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0" style="font-size: 16px; font-weight:600;">Rp.500.000</p>
                    <button class="btn btn-outline-primary" style="font-size:24px;">
                        <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>

            <div class="card" style="width:220px;">
                <div class="card-header m-auto" style="border-radius:5px; height: 180px;">
                    <img src="{{ asset('assets/images/430.jpg') }}" alt="430"
                        style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                    <p class="m-0 text-center"> HotWheels Ferrari Racer Ferrari 430 Scuderia </p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0" style="font-size: 16px; font-weight:600;">Rp.500.000</p>
                    <button class="btn btn-outline-primary" style="font-size:24px;">
                        <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>

            <div class="card" style="width:220px;">
                <div class="card-header m-auto" style="border-radius:5px; height: 180px;">
                    <img src="{{ asset('assets/images/430.jpg') }}" alt="430"
                        style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                    <p class="m-0 text-center"> HotWheels Ferrari Racer Ferrari 430 Scuderia </p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0" style="font-size: 16px; font-weight:600;">Rp.500.000</p>
                    <button class="btn btn-outline-primary" style="font-size:24px;">
                        <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>

            <div class="card" style="width:220px;">
                <div class="card-header m-auto" style="border-radius:5px; height: 180px;">
                    <img src="{{ asset('assets/images/430.jpg') }}" alt="430"
                        style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                    <p class="m-0 text-center"> HotWheels Ferrari Racer Ferrari 430 Scuderia </p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0" style="font-size: 16px; font-weight:600;">Rp.500.000</p>
                    <button class="btn btn-outline-primary" style="font-size:24px;">
                        <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>

            <div class="card" style="width:220px;">
                <div class="card-header m-auto" style="border-radius:5px; height: 180px;">
                    <img src="{{ asset('assets/images/430.jpg') }}" alt="430"
                        style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                    <p class="m-0 text-center"> HotWheels Ferrari Racer Ferrari 430 Scuderia </p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0" style="font-size: 16px; font-weight:600;">Rp.500.000</p>
                    <button class="btn btn-outline-primary" style="font-size:24px;">
                        <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>

            <div class="card" style="width:220px;">
                <div class="card-header m-auto" style="border-radius:5px; height: 180px;">
                    <img src="{{ asset('assets/images/430.jpg') }}" alt="430"
                        style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                    <p class="m-0 text-center"> HotWheels Ferrari Racer Ferrari 430 Scuderia </p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0" style="font-size: 16px; font-weight:600;">Rp.500.000</p>
                    <button class="btn btn-outline-primary" style="font-size:24px;">
                        <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>

            <div class="card" style="width:220px;">
                <div class="card-header m-auto" style="border-radius:5px; height: 180px;">
                    <img src="{{ asset('assets/images/430.jpg') }}" alt="430"
                        style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                    <p class="m-0 text-center"> HotWheels Ferrari Racer Ferrari 430 Scuderia </p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0" style="font-size: 16px; font-weight:600;">Rp.500.000</p>
                    <button class="btn btn-outline-primary" style="font-size:24px;">
                        <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>

            <div class="card" style="width:220px;">
                <div class="card-header m-auto" style="border-radius:5px; height: 180px;">
                    <img src="{{ asset('assets/images/430.jpg') }}" alt="430"
                        style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body">
                    <p class="m-0 text-center"> HotWheels Ferrari Racer Ferrari 430 Scuderia </p>
                </div>
                <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                    <p class="m-0" style="font-size: 16px; font-weight:600;">Rp.500.000</p>
                    <button class="btn btn-outline-primary" style="font-size:24px;">
                        <i class="fa-solid fa-cart-plus"></i>
                    </button>
                </div>
            </div>

            <nav class="m-auto">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
<<<<<<< HEAD
=======
=======
        <div class="d-flex flex-wrap gap-4 mb-5" id="filterResult">
            @include('pelanggan.component.partials.product_list', ['data' => $data])
        </div>
    </div>

    <div class="pagination d-flex flex-row justify-content-between">
        <div class="showData">
            Data ditampilkan {{ $data->count() }} dari {{ $data->total() }}
        </div>
        <div>
            {{ $data->links() }}
        </div>
    </div>

    <script>
        $(document).ready(function() {
            function initializeCartButtons() {
                $('.add-to-cart').off('click').on('click', function(e) {
                    e.preventDefault();
                    let productId = $(this).data('id');

                    $.ajax({
                        type: "POST",
                        url: "{{ route('cart.add') }}",
                        data: {
                            product_id: productId,
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            window.location.href = "{{ route('transaksi') }}";
                        },
                        error: function(xhr, status, error) {
                            console.error('Error adding to cart:', xhr.responseText);
                        }
                    });
                });
            }

            initializeCartButtons();

            $('.kategory').change(function(e) {
                e.preventDefault();
                var value = $(this).val();

                $.ajax({
                    type: "GET",
                    url: "{{ route('shop.filter') }}",
                    data: {
                        kategory: value
                    },
                    success: function(response) {
                        $('#filterResult').html(response);
                        initializeCartButtons();
                    },
                    error: function(xhr, status, error) {
                        console.error('Error filtering category:', xhr.responseText);
                    }
                });
            });
        });
    </script>
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
@endsection
