@foreach ($data as $p)
<form method="post" action="/update">
    {{csrf_field() }}
    <input type="hidden" name="id" value="{{ $p->id }}">
    <Input type="text" name="xnama" size="50" value="{{ $p->nama }}" placeholder="Input Nama" /><br>
    <input type="text" name="xtempat" size="50" value="{{ $p->tempat_lahir }}" placeholder="Input Tempat Lahir"/><br>
    <input type="text" name="xtanggal" size="50" value="{{ $p->tanggal_lahir }}" placeholder="Input Tanggal Lahir"/><br>
    <input type="text" name="xjenis" size="50" value="{{ $p->jenis_kelamin }}" placeholder="Input Jenis Kelamin"/><br>
    <input type="text" name="xagama" size="50" value="{{ $p->agama }}" placeholder="Input Agama"/><br>
    <input type="text" name="xalamat" size="50" value="{{ $p->alamat }}" placeholder="Input Alamat"/><br>
    <input type="text" name="xstatus" size="50" value="{{ $p->status }}" placeholder="Input Status"/><br>
    <Input type="submit" name="asal" value="Update"/>
</form>

@endforeach