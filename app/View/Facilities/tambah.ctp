<?php echo $this->Session->flash(); ?>

<fieldset>
    <h3>Tambah Fasilitas</h3>
    <?php
    // pr($data);
    echo $this->Form->create('Facility',array('type' => 'file'));
    echo $this->Form->input('Facility.nama',
        array('type' =>'text'));


    echo $this->Form->input('Facility.keterangan',array('label'=>'Keterangan','type'=>'textarea'));
    echo $this->Form->input('Facility.biaya',array('label'=>'Biaya'));
    echo $this->Form->input('Facility.color',array('label'=>'Biaya','type'=>'hidden','value'=>'Blue'));
    echo $this->Form->input('Galery.0.photo', array('type' => 'file'));
    echo $this->Form->input('Galery.0.photo_dir', array('type' => 'hidden'));
    echo $this->Form->end('Submit');
    ?>
</fieldset>

<!--<fieldset>
<h3>Tambah fasilitas</h3>
<div class="row">
    <div class="large-12 columns">
<form data-abide id="FacilityTambahForm" action="/lpps2/Facilities/tambah" enctype="multipart/form-data" method="post" accept-charset="utf-8" class="custom">
    <div class="name-field">
        <label>Nama Fasilitas <small>(harus diisi)</small></label>
        <input  required pattern="[a-zA-Z]+" name="data[Facility][nama]" placeholder="Nama fasilitas" maxlength="50" type="text"  id="FacilityNama" required="required"/>


        <small class="error">Nama fasilitas harus diisi</small>

    </div>
    <div class="email-field">
        <label>Keterangan <small>(harus diisi)</small></label>
        <textarea name="data[Facility][keterangan]" cols="30" rows="6" id="FacilityKeterangan" required="required"></textarea>
        <small class="error">Keterangan harus diisi</small>
    </div>

    <div class="cost-field">
        <label>Biaya <small>(harus diisi)</small></label>
        <input required pattern="[a-zA-Z]" name="data[Facility][biaya]" maxlength="100" type="text"  id="FacilityBiaya" required="required"/>


        <small class="error">Biaya harus diisi</small>

    </div>
    <div class="row collapse">
    <label for="customDropdown1">Warna (digunakan untuk manajemen pemesanan nanti) <small>Harus diisi</small></label>
    <select name="data[Facility][color]" id="customDropdown1" class="medium" required>
        <option value="Blue">Biru</option>
        <option value="Red">Merah</option>
        <option value="Pink">Pink</option>
        <option value="Purple">Ungu</option>
        <option value="Orange">Orange</option>
        <option value="Green" selected="selected">Hijau</option>
        <option value="Gray">Abu-abu</option>
        <option value="Black">Hitam</option>
        <option value="Brown">Coklat</option>
    </select>
        <small class="error" data-error-message>Pilih Dahulu</small>

    </div>
    <div class="cost-field">
        <label>gambar <small>(harus diisi)</small></label>
        <input type="file" name="data[Galery][0][photo]"  id="Galery0Photo" required="required">


        <small class="error">Biaya harus diisi</small>

    </div>






<button type="submit">Submit</button>
</form>
    </div>
</div>
</fieldset>--!>


