<h2>Profile LPPS</h2>
<p>&nbsp;</p>



<table>
        <?php foreach($profiles as $profile): ?>
        <tr>
           <!-- <?php //echo $profile['Profile']['judul'];  ?>-->
            <td><?php echo $profile['Profile']['isi'];  ?></td>
            <td><?php echo $profile['Profile']['latar'];  ?></td>
        </tr>

        <?php endforeach ?>

 </table>




