@extends('admin.layout.index')

@section('content')
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 74b14f5 (update)
    <div class="d-flex flex-wrap gap-5">
        <div class="card" style= "width:250px;">
            <div class="card-body m-auto">
                <div class="d-flex gap-4 align-item-center m-auto">
                    <span class="material-icons fs-1 p-0 m-0" style="font-size:52px; color:lightgray;">
                        inventory
                    </span>
                    <span class="fs-1 p-0 m-0">100%</span>
                </div>
            </div>
            <div class ="card-footer text-center bg-transparent">
                <h5> Total Inventory</h5>
            </div>
        </div>
        <div class="card" style= "width:250px;">
            <div class="card-body m-auto">
                <div class="d-flex gap-4 align-item-center m-auto">
                    <span class="material-icons fs-1 p-0 m-0" style="font-size:52px; color:lightgray;">
                        shopping_cart
                    </span>
                    <span class="fs-1 p-0 m-0">100%</span>
                </div>
            </div>
            <div class ="card-footer text-center bg-transparent">
                <h5> Total Transaksi</h5>
            </div>
        </div>
        <div class="card" style= "width:250px;">
            <div class="card-body m-auto">
                <div class="d-flex gap-4 align-item-center m-auto">
                    <span class="material-icons fs-1 p-0 m-0" style="font-size:52px; color:lightgray;">
                        people
                    </span>
                    <span class="fs-1 p-0 m-0">100%</span>
                </div>
            </div>
            <div class ="card-footer text-center bg-transparent">
                <h5> Total Karyawan</h5>
            </div>
        </div>
        <div class="card" style= "width:250px;">
            <div class="card-body m-auto">
                <div class="d-flex gap-4 align-item-center m-auto">
                    <span class="material-icons fs-1 p-0 m-0" style="font-size:52px; color:lightgray;">
                        account_balance_wallet
                    </span>
                    <span class="fs-1 p-0 m-0">100%</span>
                </div>
            </div>
            <div class ="card-footer text-center bg-transparent">
                <h5> Total Profit</h5>
            </div>
        </div>

    </div>
@endsection
<<<<<<< HEAD
=======
=======
    <div class="d-flex flex-wrap gap-3">
        <div class="card" style="width: 250px;">
            <div class="card-body">
                <div class="d-flex gap-2 align-items-center justify-start">
                    <span class="material-icons p-1 rounded"
                        style="font-size:22px; color:rgb(255, 242, 0); background-color:#ff0000">
                        inventory
                    </span>
                    <h5 class="p-0 m-0" style="color:rgb(0, 42, 255)">Total Product</h5>
                </div>
                <span class="fs-2 p-0 m-0">{{ $totalProduct }}</span>
            </div>
        </div>

        <div class="card" style="width: 250px;">
            <div class="card-body">
                <div class="d-flex gap-2 align-items-center justify-start">
                    <span class="material-icons p-1 rounded"
                        style="font-size:22px; color:rgb(255, 242, 0); background-color:#ff0000">
                        view_in_ar
                    </span>
                    <h5 class="p-0 m-0" style="color:rgb(0, 42, 255)">Total Stock</h5>
                </div>
                <span class="fs-2 p-0 m-0">{{ $sumStock }}</span>
            </div>
        </div>

        <div class="card" style="width: 250px;">
            <div class="card-body">
                <div class="d-flex gap-2 align-items-center justify-start">
                    <span class="material-icons p-1 rounded"
                        style="font-size:22px; color:rgb(255, 242, 0); background-color:#ff0000">
                        shopping_cart
                    </span>
                    <h5 class="p-0 m-0" style="color:rgb(0, 42, 255)">Transaksi</h5>
                </div>
                <span class="fs-2 p-0 m-0">{{ $dataTransaksi }}</span>
            </div>
        </div>

        <div class="card" style="width: 250px;">
            <div class="card-body">
                <div class="d-flex gap-2 align-items-center justify-start">
                    <span class="material-icons p-1 rounded"
                        style="font-size:22px; color:rgb(255, 242, 0); background-color:#ff0000">
                        payments
                    </span>
                    <h5 class="p-0 m-0" style="color:rgb(0, 42, 255)">Penghasilan</h5>
                </div>
                <span class="fs-2 p-0 m-0">{{ number_format($dataPenghasilan / 1000000, 2) . ' Jt' }}</span>
            </div>
        </div>
    </div>

    <div class="card mt-2">
        <canvas id="myChart" style="height: 50vh;"></canvas>
    </div>

    <div class="d-flex flex-row gap-2">
        <div class="card rounded-full mt-2" style="width: 50%;">
            <div class="card-header">
                Stock Limited
            </div>
            <div class="card-body">
                <table class="table table-responsive table-striped" style="font-size: 12px">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Inbound Date</th>
                            <th>Stock</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>

                <div class="pagination d-flex flex-row justify-content-between">
                </div>
            </div>
        </div>
        <div class="card rounded-full mt-2" style="width: 50%;">
            <div class="card-header">
                Product Paling Laris
            </div>
            <div class="card-body">
                <table class="table table-responsive table-striped" style="font-size: 12px">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Inbound Date</th>
                            <th>Stock</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>

                <div class="pagination d-flex flex-row justify-content-between">
                </div>
            </div>
        </div>

        <script>
            const ctx = document.getElementById('myChart');
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    datasets: [{
                        label: 'Transaksi',
                        data: [12, 19, 3, 5, 2, 3, 12, 19, 3, 5, 2, 3],
                        borderWidth: 1,
                        fill: false,
                        borderColor: 'rgb(75, 192, 192)',
                        tension: 0.1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    @endsection
>>>>>>> 2f36051 (update)
>>>>>>> 74b14f5 (update)
