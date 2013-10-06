<?php
class Book extends AppModel {
    public $displayField='judul';

    public $hasMany = array('Buy');
}
?>