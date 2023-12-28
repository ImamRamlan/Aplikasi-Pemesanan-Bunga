<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Transaksi</title>
    <style>
        /* Add your styles here */
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h4>Export PDF Pembayaran.</h4>
    <hr class="opacity-75">

    <h5>Username anda : <?= session('username') ?></h5>
    <h1>Data Transaksi</h1>
    <table>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tanggal Pesanan</th>
                <th scope="col">Tanggal Pembayaran</th>
                <th scope="col">Status Pesanan</th>
                <th scope="col">Total Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Metode</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($dataByDateRange as $row) : ?>
                <tr>
                    <th><?= $i++ ?></th>
                    <td><?= $row['211170_tanggalpesanan']; ?></td>
                    <td><?= $row['211170_tanggalpembayaran']; ?></td>
                    <td><?= $row['211170_statuspesanan']; ?></td>
                    <td><?= $row['211170_totalharga']; ?></td>
                    <td><?= $row['211170_jumlah']; ?></td>
                    <td><?= $row['211170_metode']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>