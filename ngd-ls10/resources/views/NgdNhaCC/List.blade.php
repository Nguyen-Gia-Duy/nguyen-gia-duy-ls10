<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sach nha cung cap </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <header class="container my-3">
        <h1>Danh sach nha cung cap</h1>
    </header>
        <section class="container my-1 border p-2">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Ma nha cung cap</th>
                        <th>Ten nha cung cap</th>
                        <th>Dia chi</th>
                        <th>Email</th>
                        <th>Dien thoai</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($ngdNhaCCs as $item)
                        <tr>
                            <td>1</td>
                            <td>{{$item->ngdMaNCC}}</td>
                            <td>{{$item->ngdTenNCC}}</td>
                            <td>{{$item->ngdDiaChi}}</td>
                            <td>{{$item->ngdemail}}</td>
                            <td>{{$item->ngdDienThoai}}</td>
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