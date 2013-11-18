<h2>Tambah Pengurus</h2>

<form id="StaffAddForm" method="post" action="/KP/Penguruses/tambah" class="custom">

    <div class="large-4 columns">
        <label for="nama">Nama</label>
        <input name="data[Pengurus][nama]" type="text" value="" placeholder="Masukkan Nama"/>
    </div><br><br><br><br>
    <div class="large-4 columns">
        <label for="nama">Jabatan</label>
        <input name="data[Pengurus][jabatan]" type="text" value="" placeholder="Masukkan Jabatan"/>
    </div><br><br><br><br>
    <div class="large-4 columns">
        <label for="nama">Unsur</label>
        <input name="data[Pengurus][unsur]" type="text" value="" placeholder="Masukkan Unsur"/>
    </div><br><br><br><br>
    <div class="large-4 columns">
        <label for="nama">Gereja</label>
        <input name="data[Pengurus][gereja]" type="text" value="" placeholder="Masukkan Gereja"/>
    </div><br><br><br><br>
    <div class="large-4 columns">
        <label for="email">Email</label>
        <input name="data[Pengurus][email]" type="text" value="" placeholder="Masukkan alamat email" />
    </div><br><br><br><br>

    <div class="submit">
        <input type="submit" value="Tambah" />
    </div>
</form>