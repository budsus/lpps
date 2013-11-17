<div class="large-12 columns">
<?php echo $this->Session->flash(); ?>
    <div class="row">

        <div class="large-6 columns">
            <div class="large-5 columns">
                <?php
                echo $this->Form->create('User',array('action'=>'login'));
                echo $this->Form->input('User.Username');
                ?>
            </div>

            <div class="large-5 columns">
                <?php
                echo $this->Form->input('User.Password');
                ?>
            </div>
            <br>
            <div class="large-2 columns">
                <?php
                echo $this->Form->end('Submit');
                ?>
            </div>
        </div>
    </div>
</div>