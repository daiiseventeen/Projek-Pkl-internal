<div class="container">
    <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>
    <h2>Tambah Siswa</h2>
    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <table class="table">
            <tr>
                <td><label for="nama">Nama:</label></td>
                <td>
                    <input type="text" id="nama" name="nama" value="{{ old('nama') }}" class="form-control">
                    @error('nama')
                        <div class="error text-danger">{{ $message }}</div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td><label for="kelas">Kelas:</label></td>
                <td>
                    <input type="text" id="kelas" name="kelas" value="{{ old('kelas') }}" class="form-control">
                    @error('kelas')
                        <div class="error text-danger">{{ $message }}</div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </td>
            </tr>
        </table>
    </form>
</div>