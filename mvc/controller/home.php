<?php
class home extends controller{
    public function defauAction(){
        $this->showSanPham();
        // Khi ng dùng k nhập url
    }
    
    public function showSanPham(){
        $tmp = $this->model("sanPhamModel");
        $this->view("layout",[
            "Page" => "home_page",
            "content" => $tmp->GetAoThun()
        ]); 
        
    }
}
?>

