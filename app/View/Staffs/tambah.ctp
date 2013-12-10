<h2>Tambah Staff</h2>

<form id="StaffAddForm" method="post" action="tambah" class="custom">

        <div class="large-4 columns">
            <label for="nama">Name</label>
            <input name="data[Staff][nama]" type="text" value="" placeholder="Masukkan Nama"/>
        </div><br><br><br><br>
        <div class="large-4 columns">
            <label for="jabatan">Golongan Jabatan</label>
            <select  name="data[Staff][golongan]" class="medium">
                <option value="">pilih golongan jabatan</option>
                <option value="A">Manajer</option>
                <option value="B">Pelaksana Pembina</option>
                <option value="C">Karyawan</option>
                <option value="D">Emiritus</option>
                <option value="E">Karyawan Pensiun</option>
            </select>
        </div><br><br><br><br><br>
        <div class="large-4 columns">
            <label for="jabatan">Spesifikasi Jabatan</label>
            <input name="data[Staff][jabatan]" type="text" value="" placeholder="Isi spesifikasi jabatan" />
        </div><br><br><br><br>
        <div class="large-4 columns">
            <label for="email">Email</label>
            <input name="data[Staff][email]" type="text" value="" placeholder="Masukkan alamat email" />
        </div><br><br><br><br>

    <div class="submit">
        <input type="submit" value="Tambah" />
    </div>
</form>