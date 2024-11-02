<form action="{{ route('barang.store')}}" method="POST">

    @if ($errors->has('stock'))
    <div class="alert alert-danger">{{ $errors->first('stock') }}</div>
@endif
    @csrf
    <table>
        <tr>
            <td>
                <label for="nama_barang">Nama Barang</label>
            </td>
            <td>
                <input type="text" name="nama_barang" required>
            </td>
        </tr>
        <tr>
            <td>
                <label for="jenis_barang">Jenis barang</label>
            </td>
            <td>
               <select name="jenis_barang" id="">
                <option value="">--PILIH--</option>
                <option value="elektronik">elektroik</option>
                <option value="perabotan">perabotan</option>
                <option value="pangan">pangan</option>
               </select>
            </td>
        </tr>
        <tr>
            <td>
                <label for="stock">Stock</label>
            </td>
            <td>
              <input type="text" name="stock" alt="NONE">
            </td>
        </tr>
        <tr>
            <td>
                <label for="status">Status</label>
            </td>
            <td>
               <select name="status" id="">
                <option value="">--PILIH--</option>
                <option value="tersedia">tersedia</option>
                <option value="kosong">kosong</option>
                
               </select>
            </td>
        </tr>
        <tr>
            <td>
                <label for="stock">harga satuan</label>
            </td>
            <td>
              <input type="text" name="harga_satuan" alt="NONE">
            </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: right;">
                <button type="submit">Tambah Barang</button>
            </td>
        </tr>
    </table>
</form>
</div>