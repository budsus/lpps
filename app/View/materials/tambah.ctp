<h2>Upload File Materi Pembinaan</h2>
<?php
echo $this->Form->create('Material', array('type' => 'file'));
echo $this->Form->input('Material.judul', array('type' => 'file','label' => 'Document'));
echo $this->Form->input('Material.keterangan', array('type' =>'textarea','value' => ''));	
echo $this->Form->input('materipembinaan_dir', array('type' => 'hidden'));
?>
 <label>Event Gereja</label>
    <select name="data[Material][event]">
    	<option value=" ">(Pilih Event)</option>
        <option value="AdvenNatal">Adven-Natal</option>
        <option value="Pentakosta">Pentakosta</option>
        <option value="Paskah">Paskah</option>
        <option value="BulanKeluarga">Bulan Keluarga</option>
    </select>
    <br><br>
    <label>Tahun</label>
    <select name="data[Material][tahun]">
    	<option value=" ">(Pilih Tahun)</option>
        <option value="2014">2014</option>
        <option value="2015">2015</option>
        <option value="2016">2016</option>
        <option value="2017">2017</option>
    </select>

<?php
echo $this->Form->end('Upload file');
?>
