<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sach vat tu </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <header class="container my-3">
        <h1>Danh sach vat tu</h1>
    </header>
        <section class="container my-1 border p-2">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Ma vat tu</th>
                        <th>Ten vat tu</th>
                        <th>Don vi tinh</th>
                        <th>Phan Tram</th>
                        <th>Chuc nang</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($ngdVattus as $item)
                        <tr>
                            <td>{{$loop->iteration+($ngdVattus->currentPage()-1)*$ngdVattus->perPage()}}</td>
                            <td>{{$item->ngdMaVTu}}</td>
                            <td>{{$item->ngdTenVtu}}</td>
                            <td>{{$item->ngdDviTinh}}</td>
                            <td>{{$item->ngdPhanTram}}</td>
                          
                            <td>
                                View/Edit/Delete
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7">Chua co du lieu</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>    
            <button class="btn btn-primary">Them moi</button>
        </section>
</body>
</html>