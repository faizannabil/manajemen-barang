<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        /* Basic reset for margins and padding */
        body {
          margin: 0;
          padding: 0;
        }

        /* Style for the link to add new entries */
        a {
          text-decoration: none;
          color: #007BFF;
          font-weight: bold;
          margin: 10px;
          display: inline-block;
        }

        a:hover {
          text-decoration: underline;
        }

        /* Style for the table */
        table {
          width: 100%;
          border-collapse: collapse;
          margin: 20px 0;
        }

        /* Style for table headers */
        th {
          background-color: #f2f2f2;
          border: 2px solid #ddd;
          padding: 10px;
        }

        /* Style for table cells */
        td {
          border: 1px solid #ddd;
          padding: 8px;
        }

        /* Style for table rows */
        tr:nth-child(even) {
          background-color: #f9f9f9;
        }

        tr:hover {
          background-color: #f1f1f1;
        }

        /* Style for buttons inside the table */
        button {
          background-color: #dc3545;
          color: white;
          border: none;
          padding: 5px 10px;
          cursor: pointer;
        }

        button:hover {
          background-color: #c82333;
        }

        /* Center text in cells */
        .text-center {
          text-align: center;
        }
    </style>
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
  