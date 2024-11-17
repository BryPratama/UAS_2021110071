@extends('admin.layout.index')

@section('content')
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 74b14f5 (update)
    <div class="card mb-1">
        <div class="card-body d-flex flex-row justify-content-between">
            <div class="filter d-flex flex-lg-row gap-3">
                <input type="date" class="form-control" name="tgl_awal">
                <input type="date" class="form-control" name="tgl_akhir">
                <button class="btn btn-primary">Filter</button>
            </div>

        </div>
    </div>
<<<<<<< HEAD
=======
=======
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
    <div class="card rounded-full">
        <div class="card-header bg-transparent d-flex justify-content-between">
            <button class="btn btn-info" id="addData">
                <i class="fa fa-plus">
                    <span>Tambah Product</span>
                </i>
            </button>
<<<<<<< HEAD
            <input type="text" class="form-control w-25" placeholder="Search...">
=======
<<<<<<< HEAD
            <input type="text" class="form-control w-25" placeholder="Search...">
=======
            <input type="text" wire:model="search" class="form-control w-25" placeholder="Search....">
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
        </div>
        <div class="card-body">
            <table class="table table-responsive table-striped">
                <thead>
                    <tr>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 74b14f5 (update)
                        <td>No</td>
                        <td>Foto</td>
                        <td>Date In</td>
                        <td>SKU</td>
                        <td>Product Name</td>
                        <td>Category</td>
                        <td>Price</td>
                        <td>Stock Mint</td>
                        <td>Stock Loose</td>
                        <td>#</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $y => $x)
                        <tr class="align-middle">
                            <td>{{ ++$y }}</td>
                            <td>
                                <img src="{{ asset('storage/product/' . $x->foto) }}" style="width:100px;   ">
                            </td>
                            <td>{{ $x->created_at }}</td>
                            <td>{{ $x->sku }}</td>
                            <td>{{ $x->nama_product }}</td>
                            <td>{{ $x->type . ' ' . $x->kategory }} </td>
                            <td>{{ $x->harga }}</td>
                            <td>{{ $x->quantity }}</td>
                            <td>
                                <button class="btn btn-info">
                                    <i class= "fas fa-edit"></i>
                                </button>
                                <button class="btn btn-danger">
                                    <i class= "fas fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="tampilData" style="display: none;"></div>

            <script>
                $('#addData').click(function() {
                    $.ajax({
                        url: '{{ route('addModal') }}',
                        success: function(response) {
                            $('.tampilData').html(response).show();
                            $('#addModal').modal("show");
                        }
                    });
                });
            </script>
        @endsection
<<<<<<< HEAD
=======
=======
                        <th>No</th>
                        <th>Foto</th>
                        <th>Date In</th>
                        <th>SKU</th>
                        <th>Product Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>#</th>
                    </tr>
                </thead>

                <tbody>
                    @if ($data->isEmpty())
                        <tr class="text-center">
                            <td colspan="9">Barang masih kosong</td>
                        </tr>
                    @else
                        @foreach ($data as $y => $x)
                            <tr class="align-middle">
                                <td>{{ ++$y }}</td>
                                <td>
                                    <img src="{{ asset('storage/product/' . $x->foto) }}" style="width:100px;">
                                </td>
                                <td>{{ $x->created_at }}</td>
                                <td>{{ $x->sku }}</td>
                                <td>{{ $x->nama_product }}</td>
                                <td>{{ $x->type . ' ' . $x->kategory }}</td>
                                <td>{{ $x->harga }}</td>
                                <td>{{ $x->quantity }}</td>
                                <td>
                                    <input type="hidden" id="sku" value="{{ $x->sku }}">
                                    <button class="btn btn-info editModal" data-id="{{ $x->id }}">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn btn-danger deleteData" data-id="{{ $x->id }}">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>

            <div class="pagination d-flex flex-row justify-content-between">
                <div class="showData">
                    Data Tampil {{ $data->count() }} dari {{ $data->total() }}
                </div>
                <div>
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
    <div class="tampilData" style="display: none;"></div>
    <div class="tampilEditData" style="display: none;"></div>

    <script>
        $('#addData').click(function() {
            $.ajax({
                url: '{{ route('addModal') }}',
                success: function(response) {
                    $('.tampilData').html(response).show();
                    $('#addModal').modal("show");
                }
            });
        });

        $('.editModal').click(function(e) {
            e.preventDefault();
            var id = $(this).data('id');

            $.ajax({
                type: "GET",
                url: "{{ route('editModal', ['id' => ':id']) }}".replace(':id', id),
                success: function(response) {
                    $('.tampilEditData').html(response).show();
                    $('#editModal').modal("show");
                }
            });
        });

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $('.deleteData').click(function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            var sku = $('#sku').val();
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener("mouseenter", Swal.stopTimer);
                    toast.addEventListener("mouseleave", Swal.resumeTimer);
                    setTimeout(function() {
                        window.location.reload();
                    }, 1000);
                },
            });

            Swal.fire({
                title: 'Hapus Data?',
                text: "Anda yakin menghapus SKU " + sku + " ?",
                icon: 'Warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Berhasil Terhapus'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "DELETE",
                        url: "{{ route('deleteData', ['id' => ':id']) }}".replace(':id', id),
                        dataType: "json",
                        success: function(response) {
                            if (response.success) {
                                Toast.fire({
                                    icon: "success",
                                    title: response.success,
                                });
                            }
                        },
                        error: function(xhr, status, error) {
                            Swal.fire({
                                title: 'Error',
                                text: 'Error',
                                icon: 'error'
                            });
                        }
                    });
                }
            })
        });
    </script>
@endsection
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
