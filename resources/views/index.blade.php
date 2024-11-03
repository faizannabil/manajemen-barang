<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <a href="{{route('barang.create')}}">Tambah</a>
    <table>
        <tr>
            <th>Nama Barang</th>
            <th>Jenis Barang</th>
            <th>Stock</th>
            <th>Status</th>
            <th>Harga Satuan</th>
            <th>Aksi</th>
        </tr>
        @foreach($barang as $Barang)
        <tr>
            <td>{{$Barang->nama_barang}}</td>
            <td>{{$Barang->jenis_barang}}</td>
            <td>{{$Barang->stock}}</td>
            <td>{{$Barang->status}}</td>
            <td>Rp.{{$Barang->harga_satuan}}</td>
            <td>
                <a href="{{route('barang.edit', $Barang->id)}}">Edit</a>
                <form action="{{route('barang.destroy', $Barang->id)}}" method="post" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
  