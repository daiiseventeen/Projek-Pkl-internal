@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add Product</h4>
            <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <select name="category_id" id="category_id" class="form-select">
                                <option disabled selected>Pilih Kategori</option>
                                @foreach ($categories as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nama" class="form-label" value="{{ old('nama') }}">Nama Produk</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                            @error('nama')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label" value="{{ old('deskripsi') }}">Deskripsi</label>
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
                            @error('deskripsi')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="harga" class="form-label" value="{{ old('harga') }}">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga" required>
                            @error('harga')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="stok" class="form-label" value="{{ old('stok') }}">Stok Produk</label>
                            <input type="text" class="form-control" id="stok" name="stok" required>
                            @error('stok')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="gambar" class="form-label" ">Gambar</label>
                                <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*" required>
                                @error('gambar')
        <div class="text-danger">{{ $message }}</div>
    @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="d-md-flex align-items-center">
                            <div class="ms-auto mt-3 mt-md-0">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i>
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
