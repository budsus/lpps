<?php
class Book extends AppModel {
    public $displayField='nama';

    public $hasMany = array('Buy');
}
?>