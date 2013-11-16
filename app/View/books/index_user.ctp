
<h6>Daftar Buku</h6>
<p>&nbsp;</p>
<div>

	<?php
		/*echo $this->Form->create('Book', array('action' => 'cari'));
 		echo $this->Form->input('Book.judul');
		echo $this->Form->end('Search');*/
	?>
</div>


	<?php 
	// jika tidak ada data user
	if (sizeof($data) == 0) {
	?>
	Belum ada data buku.
	<?php 
	} else {
		// jika sudah ada data akun user
		foreach($data as $b):
			$directory=$b['Book']['cover_dir'];
		    $file=$b['Book']['cover'];
			$path=  $this->webroot.'app/webroot/files/book/cover/'.$directory.'/'.$file ;
	?>

	         <div class="large-4 small-6 columns">
              <img width="200px" height="200px" src="<?php echo $path; ?>">

              <div class="panel">
                <h5><?php echo $b['Book']['judul']; ?></h5>
                <h6 class="subheader">Harga : <?php echo $b['Book']['harga']; ?></h6>
                <class="subheader"><?php echo $b['Book']['keterangan']; ?>
                <h6 class="class='button secondary"><a href="<?php echo $this->Html->url(
                  array('controller' => 'buys', 'action'=>'beli', $b['Book']['id'])); ?>">Beli</a></h6>
              </div>
            </div>
	</tr>
	<?php
		endforeach;
	}
	?>


<!--<div class="row">
    <div class="large-12 columns">

   

      <div class="row">

  

    <!-- Thumbnails

        <div class="large-8 columns">
          <div class="row">

            <div class="large-4 small-6 columns">
              <img src="http://placehold.it/1000x1000&text=Thumbnail">

              <div class="panel">
                <h5>Item Name</h5>
                <h6 class="subheader">$000.00</h6>
              </div>
            </div>

            <div class="large-4 small-6 columns">
              <img src="http://placehold.it/500x500&text=Thumbnail">

              <div class="panel">
                <h5>Item Name</h5>
                <h6 class="subheader">$000.00</h6>
              </div>
            </div>

            <div class="large-4 small-6 columns">
              <img src="http://placehold.it/500x500&text=Thumbnail">

              <div class="panel">
                <h5>Item Name</h5>
                <h6 class="subheader">$000.00</h6>
              </div>
            </div>

            <div class="large-4 small-6 columns">
              <img src="http://placehold.it/500x500&text=Thumbnail">

              <div class="panel">
                <h5>Item Name</h5>
                <h6 class="subheader">$000.00</h6>
              </div>
            </div>

            <div class="large-4 small-6 columns">
              <img src="http://placehold.it/500x500&text=Thumbnail">

              <div class="panel">
                <h5>Item Name</h5>
                <h6 class="subheader">$000.00</h6>
              </div>
            </div>

            <div class="large-4 small-6 columns">
              <img src="http://placehold.it/500x500&text=Thumbnail">

              <div class="panel">
                <h5>Item Name</h5>
                <h6 class="subheader">$000.00</h6>
              </div>
            </div>
          </div>

    <!-- End Thumbnails



          </div>
        </div>
      </div>


    <!-- Footer

      <footer class="row">
        <div class="large-12 columns"><hr />
          <div class="row">

            <div class="large-6 columns">
              <p>&copy; Copyright no one at all. Go to town.</p>
            </div>

            <div class="large-6 columns">
              <ul class="inline-list right">
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
                <li><a href="#">Link 4</a></li>
              </ul>
            </div>

          </div>
        </div>
      </footer>

    <!-- End Footer

    </div>
  </div>-->