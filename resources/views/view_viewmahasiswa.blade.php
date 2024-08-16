<html>

<body>
    <h2>View Mahasiswa | <a href="{{url('mahasiswa/create')}}">Input</h2></a>
    <h2>
        <table border=1 cellpadding="5" cellspacing="0">
            <thead>
                <th>Nim</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Kode Jurusan</th>
                <th>aksi</th>
            </thead>
            @foreach($mahasiswas as $mahasiswa)
            <tr>
                <td>{{ $mahasiswa->nim }}</td>
                <td>{{ $mahasiswa->nama }}</td>
                <td>{{ $mahasiswa->alamat }}</td>
                <td>{{ $mahasiswa->kodejurusan }}</td>
                <td>
                    <a href="{{ url('mahasiswa').'/'.$mahasiswa->nim.'/edit'}}">Edit</a>&nbsp;&nbsp;
                    <a href="{{ url('mahasiswa').'/'.$mahasiswa->nim.'/delete'}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
</body>

</html>