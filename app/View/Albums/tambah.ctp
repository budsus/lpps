<?php echo $this->Session->flash(); ?>
<fieldset>
    <h3>Buat Album Baru</h3>
    <div class="row">
        <div class="large-12 columns">
            <form data-abide id="FacilityTambahForm" action="tambah" enctype="multipart/form-data" method="post" accept-charset="utf-8" class="custom">
                <div class="name-field">
                    <label>Nama Album <small>(harus diisi)</small></label>
                    <input  required pattern="[a-zA-Z]+" name="data[Album][nama]" placeholder="Nama album" maxlength="50" type="text"  id="FacilityNama" required="required"/>


                    <small class="error">Nama fasilitas harus diisi</small>

                </div>


                <div class="cost-field">
                    <label>gambar <small>(harus diisi)</small></label>
                    <input type="file" name="data[Galerifoto][0][photo]"  id="Galery0Photo" required="required">


                    <small class="error">Biaya harus diisi</small>

                </div>

                <div class="cost-field">
                    <label>gambar <small>(harus diisi)</small></label>
                    <input type="file" name="data[Galerifoto][1][photo]"  id="Galery1Photo" required="required">


                    <small class="error">Biaya harus diisi</small>

                </div>




                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</fieldset>


<a href="<?php echo $this->Html->url(array('controller'=>'Albums','action'=>'index')); ?>">
    <button class="btn btn-primary" type="button">Kembali</button>
</a>