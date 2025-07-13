<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    private $siswa = [
        ['id' => 1, 'nama' => 'Ahmad', 'kelas' => 'VII-A',],
        ['id' => 2, 'nama' => 'Dudi', 'kelas' => 'VII-B',],
    ];
    
    public function index() {
        if (!session::has('siswa')) {
            session::put('siswa', $this->siswa);
        }
        $data = session::get('siswa', []);
        return view('siswa.index', compact('data'));
    }

    public function create() {
        return view('siswa.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kelas' => 'required|string|max:50',
        ]);
        $dataSiswa = Session::get('siswa', []);
        $dataSiswa[] = [
            'id' => count($dataSiswa) + 1,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
        ];
        Session::put('siswa', $dataSiswa);
        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil ditambahkan.');
    }
}
