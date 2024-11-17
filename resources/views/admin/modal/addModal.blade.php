<div class="modal fade" id="addModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-md">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">{{ $title }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('addData') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3 row">
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 74b14f5 (update)
                        <label for="SKU" class="col-sm-3 col-form-label">SKU</label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" id="SKU" name="sku"
                                value="{{ $sku }}" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nameProduct" class="col-sm-3 col-form-label">Nama Barang</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nameProduct" name="nama">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="type" class="col-sm-3 col-form-label">Tipe Barang</label>
                        <div class="col-sm-9">
                            <select type="text" class="form-control" id="type" name="type">
                                <option value="">Pilih Tipe</option>
                                <option value="jdm">JDM</option>
                                <option value="european">European</option>
                                <option value="american">American</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="kategori" class="col-sm-3 col-form-label">Kategori Barang</label>
                        <div class="col-sm-9">
                            <select type="text" class="form-control" id="kategori" name="kategori">
                                <option value="">Pilih Kategori</option>
<<<<<<< HEAD
=======
=======
                        <label for="SKU" class="col-sm-5 col-form-label">SKU</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control-plaintext" id="SKU" name="sku"
                                value="{{$sku}}" readonly>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nameProduct" class="col-sm-5 col-form-label">Nama Product</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="nameProduct" name="nama">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="type" class="col-sm-5 col-form-label">Type Product</label>
                        <div class="col-sm-7">
                            <select type="text" class="form-control" id="type" name="type">
                                <option value=""> Pilih Type </option>
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
                                <option value="reguler">Reguler</option>
                                <option value="premium">Premium</option>
                                <option value="rlc">RLC</option>
                            </select>
                        </div>
                    </div>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 74b14f5 (update)
                    <div class="mb-3 row">
                        <label for="harga" class="col-sm-3 col-form-label">Harga Barang</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="harga" name="harga">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="foto" class="col-sm-3 col-form-label">Foto Barang</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" accept=".png, .jpg, .jpeg" id="foto"
                                name="foto">
<<<<<<< HEAD
=======
=======

                    <div class="mb-3 row">
                        <label for="kategori" class="col-sm-5 col-form-label">Category Product</label>
                        <div class="col-sm-7">
                            <select type="text" class="form-control" id="kategori" name="kategori">
                                <option value=""> Pilih Category </option>
                                <option value="jdm">JDM</option>
                                <option value="eudm">EU-DM</option>
                                <option value="adm">ADM</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="harga" class="col-sm-5 col-form-label">Harga Product</label>
                        <div class="col-sm-7">
                            <input type="number" class="form-control" id="harga" name="harga">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="quantity" class="col-sm-5 col-form-label">Qty Product</label>
                        <div class="col-sm-7">
                            <input type="number" class="form-control" id="quantity" name="quantity">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="foto" class="col-sm-5 col-form-label">Foto Product</label>
                        <div class="col-sm-7">
                            <input type="hidden" name="foto">
                            <img class="mb-2 preview"
                                style="width: 100px;">
                            <input type="file" class="form-control" accept=".png, .jpg, .jpeg" id="inputFoto"
                                name="foto" onchange="previewImg()">
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
<<<<<<< HEAD
                    <button type="submit" class="btn btn-primary">Save</button>
=======
<<<<<<< HEAD
                    <button type="submit" class="btn btn-primary">Save</button>
=======
                    <button type="submit" class="btn btn-success">Save</button>
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
                </div>
            </form>
        </div>
    </div>
</div>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

<script>
    function previewImg() {
        const fotoIn = document.querySelector('#inputFoto');
        const preview = document.querySelector('.preview');
        preview.style.display = 'block';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(fotoIn.files[0]);
        oFReader.onload = function(oFREvent) {
            preview.src = oFREvent.target.result;
        }
    }
</script>
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
