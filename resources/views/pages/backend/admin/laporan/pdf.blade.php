<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>LAPORAN PENGGUNA SEPATU LOLA</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <h5 style="text-align: center;">LAPORAN PENGGUNA SEPATU LOLA</h5>
    <table class="table table-striped">
        <thead class="thead-light">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>ROLE</th>
                <th>Akses</th>
            </tr>
        </thead>
        <tbody>
            @php
            $no = 1;
            @endphp
            @forelse ($items as $item)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->role }}</td>
                <td>{{ $item->logs_count }}x Baca</td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">Tidak Ada Data</td>
            </tr>
            @endforelse

        </tbody>
    </table>
</body>

</html>