<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Jenis Hewan</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f5f7ff; padding: 20px; }
        h2 { color: #002080; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; background: white; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background: #002080; color: white; }
    </style>
</head>
<body>
    <h2>Data Jenis Hewan</h2>
    <table>
        <thead>
            <tr>
                <th>ID Jenis Hewan</th>
                <th>Nama Jenis Hewan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                    <td>{{ $row->idjenis_hewan }}</td>
                    <td>{{ $row->nama_jenis_hewan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>