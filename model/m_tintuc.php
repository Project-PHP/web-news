<?php
include('database.php'); //cung cap voi database

class M_tintuc extends database{
    function getSlide(){
        $sql= 'SELECT * FROM slide';
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    function getMenu(){
        $sql= 'SELECT tl.*,GROUP_CONCAT(lt.id,":",lt.Ten,":",lt.TenKhongDau) AS LoaiTin FROM theloai tl INNER JOIN loaitin lt
                ON lt.idTheLoai=tl.id GROUP BY tl.id';
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}

?>