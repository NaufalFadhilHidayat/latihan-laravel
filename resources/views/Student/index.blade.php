<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>Document</title>
</head>
<body>
    
    <table class="table text-center">
        <thead>
            <tr class="table-primary">
            <td>id</td>
            <td>nis</td>
            <td>Nama</td>
            <td>Kelas</td>
            <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            @php
            $no = 1;
            @endphp
            @foreach($query as $student)
            <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $student->nis }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->class }}</td>
            <td>
<a href="">Edit</a>
<br>
<a href="{{ url('students/delete') }}/{{ $student->id }}">Hapus</a>
            </td>
        </tr>
        @endforeach
        </tbody>

    </table>
    <a href="{{ url('students/create') }}" class="btn btn-info">Tambah Data </a>
    <br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>