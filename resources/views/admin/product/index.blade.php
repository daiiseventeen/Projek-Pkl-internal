@extends('layouts.admin')

@section('content')
    <div class="container">
        <a href="{{ route('admin.product.create') }}" class="btn btn-primary mb-4">
            <i class="fas fa-plus me-2"></i> Tambah Produk
        </a>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white fw-bold">
                        Daftar Produk
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped mb-0 align-middle">
                                <thead class="table-primary">
                                    <tr>
                                        <th scope="col" width="5%">No</th>
                                        <th scope="col">Nama Produk</th>
                                        <th scope="col">Slug</th>
                                        <th scope="col">Photo Produk</th>
                                        <th scope="col">Stok</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col" class="text-end" width="20%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($product as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->slug }}</td>
                                            <td>
                                                <img src="{{ asset('storage/' . $item->gambar) }}" alt="Foto Produk"
                                                    class="img-fluid" style="max-width: 100px; max-height: 100px;">
                                            </td>
                                            <td>{{ $item->stok }}</td>
                                            <td>{{ $item->deskripsi }}</td>
                                            <td>Rp. {{ number_format($item->harga, 0, ',', '.') }}</td>
                                            <td>
                                                <div class="d-flex justify-content-end gap-2">
                                                    <a href="{{ route('admin.product.edit', $item->id) }}"
                                                        class="btn btn-sm btn-warning">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                    <form action="{{ route('admin.product.destroy', $item->id) }}"
                                                        method="POST"
                                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger">
                                                            <i class="fas fa-trash"></i> Hapus
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center py-4 text-muted">Tidak ada data produk.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    @endpush
@endsection
