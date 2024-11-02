<form action="{{ route('barang.update',$barang->id)}}" method="POST">
    @csrf
    @method('PUT')
    <table>
        @if ($errors->has('stock'))
    <div class="alert alert-danger">{{ $errors->first('stock') }}</div>
@endif
        <tr>
            <td>
                <label for="nama_barang">Nama Barang</label>
            </td>
            <td>
                <input type="text" name="nama_barang" value="{{$barang->nama_barang}}" required>
            </td>
        </tr>
        <tr>
            <td>
                <label for="jenis_barang">Jenis barang</label>
            </td>
            <td>
               <select name="jenis_barang" id="">
                <option value="">--PILIH--</option>
                <option value="elektronik" {{$barang->jenis_barang === 'elektronik' ? 'selected' : ''}}>elektroik</option>
                <option value="perabotan" {{$barang->jenis_barang === 'perabotan' ? 'selected' : ''}}>perabotan</option>
                <option value="pangan" {{$barang->jenis_barang === 'pangan' ? 'selected' : ''}}>pangan</option>
                
               </select>
            </td>
        </tr>
        <tr>
            <td>
                <label for="stock">Stock</label>
            </td>
            <td>
              <input type="text" name="stock" alt="NONE" value="{{$barang->stock}}">
            </td>
        </tr>
        <tr>
            <td>
                <label for="status">Status</label>
            </td>
            <td>
               <select name="status" id="">
                <option value="">--PILIH--</option>
                <option value="tersedia" {{$barang->status === 'tersedia' ? 'selected' : ''}}>tersedia</option>
                <option value="kosong" {{$barang->status === 'kosong' ? 'selected' : ''}}>kosong</option>
                
               </select>
            </td>
        </tr>
        <tr>
            <td>
                <label for="harga_satuan">harga satuan</label>
            </td>
            <td>
              <input type="text" name="harga_satuan" alt="NONE" value="{{$barang->harga_satuan}}">
            </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: right;">
                <button type="submit">Update</button>
            </td>
        </tr>
    </table>
</form>
</div>