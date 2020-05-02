<form method="post" action="savecreate">
    {{csrf_field() }}
    <Input type="text" name="xnama" size="50" placeholder="Input Nama" /><br>
    <input type="text" name="xtempat" size="50" placeholder="Input Tempat Lahir"/><br>
    <input type="text" name="xtanggal" size="50" placeholder="Input Tanggal Lahir"/><br>
    <input type="text" name="xjenis" size="50" placeholder="Input Jenis Kelamin"/><br>
    <input type="text" name="xagama" size="50" placeholder="Input Agama"/><br>
    <input type="text" name="xalamat" size="50" placeholder="Input Alamat"/><br>
    <input type="text" name="xstatus" size="50" placeholder="Input Status"/><br>
    <Input type="submit" name="asal" value="Save"/>
</form>