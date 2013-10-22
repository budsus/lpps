
   <table>
        <?php foreach($profiles as $profile): ?>
        <tr>
            <?php echo $profile['Profile']['judul'];  ?>
            <td><?php echo $profile['Profile']['isi'];  ?></td>
        </tr>

        <?php endforeach ?>
    </table>



