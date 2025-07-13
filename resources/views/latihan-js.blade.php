@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Latihan JavaScript</h1>
        <p>Ini adalah halaman latihan JavaScript.</p>
        <button id="alertButton" class="btn btn-primary">
            <i class="fas fa-bell"></i> Klik Saya
        </button>
    </div>
@endsection

@push('scripts')
    <!-- Font Awesome CDN for icon (optional, remove if already included) -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.getElementById('alertButton')
            .addEventListener('click', () => alert('Tombol telah diklik!'));
        });
    </script>
@endpush
