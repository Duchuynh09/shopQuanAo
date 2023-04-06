<?php
class danhMuc extends controller
{
    public $select;
    public function defauAction()
    {
        echo "Nothing!!";
        // Khi ng dùng k nhập url
    }

    public function sanpham()
    {
        $this->select = $this->model("sanPhamModel");
        $this->view("layout", [
            "Page" => "sanPham",
            "content" => $this->select->GetAll()
        ]);
    }
    public function aoThun()
    {
        $this->select = $this->model("sanPhamModel");
        $this->view("layout", [
            "Page" => "sanPham",
            "content" => $this->select->GetAoThun()
        ]);
    }
    
    

    
}
