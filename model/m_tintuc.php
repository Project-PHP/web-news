<?php
include('database.php'); //cung cap voi database

class M_tintuc extends database{
    function getSlide(){
        $sql= 'SELECT * FROM slide';
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}

?>