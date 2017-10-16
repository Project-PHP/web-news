<?php
include('model/m_tintuc.php');

class C_tintuc{
    public function index(){
        $m_tintuc = new M_tintuc();
        $slide=$m_tintuc->getSlide();
        return array('slide'=>$slide);
    }
}
?>