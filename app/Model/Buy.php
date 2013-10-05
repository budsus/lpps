<?php
class Buy extends AppModel {
    public $displayField='nama';

    public $belongsTo = array('Book');
}
?>