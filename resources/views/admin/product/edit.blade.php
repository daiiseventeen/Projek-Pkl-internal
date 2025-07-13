@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Produk</h4>
            <form action="{{ route('admin.product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    {{-- Kategori --}}
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="category_id" class="form-label">Kategori</label>
                            <select name="category_id" id="category_id" class="form-select" required>
                                <option disabled {{ $product->category_id ? '' : 'selected' }}>Pilih Kategori</option>
                                @foreach ($categories as $data)
                                    <option value="{{ $data->id }}"
                                        {{ $product->category_id == $data->id ? 'selected' : '' }}>
                                        {{ $data->nama }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- Nama Produk --}}
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" id="nama" name="nama" required
                                value="{{ old('nama', $product->nama) }}">
                            @error('nama')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- Deskripsi --}}
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi" required
                                value="{{ old('deskripsi', $product->deskripsi) }}">
                            @error('deskripsi')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- Harga --}}
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" class="form-control" id="harga" name="harga" required
                                value="{{ old('harga', $product->harga) }}">
                            @error('harga')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- Stok --}}
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="stok" class="form-label">Stok Produk</label>
                            <input type="number" class="form-control" id="stok" name="stok" required
                                value="{{ old('stok', $product->stok) }}">
                            @error('stok')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- Gambar --}}
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Foto Produk</label>
                            <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
                            <small class="form-text text-muted">Kosongkan jika tidak ingin mengubah gambar.</small>
                            @if ($product->gambar)
                                <img src="{{ asset('storage/' . $product->gambar) }}" alt="Gambar Produk Saat Ini"
                                    class="img-fluid mt-2" style="max-width: 200px;">
                            @endif
                            @error('gambar')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- Tombol Simpan --}}
                <div class="col-md-12">
                    <div class="d-md-flex align-items-center">
                        <div class="ms-auto mt-3 mt-md-0">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Simpan
                            </button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
