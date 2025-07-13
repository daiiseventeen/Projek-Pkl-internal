<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 30px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 600px;
            margin: 0 auto;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #009879;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f3f3f3;
        }

        .empty-message {
            text-align: center;
            padding: 20px;
            color: #999;
        }
    </style>
</head>
<body>
    <h2>Daftar Siswa</h2>
    <div style="text-align: center; margin-bottom: 20px;">
        <a href="{{ route('siswa.create') }}" style="padding: 10px 15px; background-color: #009879; color: white; text-decoration: none; border-radius: 5px;">Tambah Siswa</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $item)
                <tr>
                    <td>{{ $item['id'] }}</td>
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['kelas'] }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="empty-message">Tidak ada data siswa.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
