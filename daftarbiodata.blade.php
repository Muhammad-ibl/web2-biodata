<table border="1px" width="100%" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Alamat</th>
        <th>Status</th>
        <th>Opsi</th>
    </tr>
        @foreach ($data as $p)
    <tr align="center">
        <td>{{ $p->id }}</td>
        <td>{{ $p->nama }}</td>
        <td>{{ $p->tempat_lahir }}</td>
        <td>{{ $p->tanggal_lahir }}</td>
        <td>{{ $p->jenis_kelamin }}</td>
        <td>{{ $p->agama }}</td>
        <td>{{ $p->alamat }}</td>
        <td>{{ $p->status }}</td>
        <td>
            <a href="editbiodata/{{ $p->id }}">Edit</a>
            <a href="hapus/{{ $p->id }}">Delete</a></td>
    </tr>
        @endforeach
   
</table>